<?php

namespace App\Http\Controllers;

use App\Models\SalesTableModel;
use App\Models\TicketMessagesTableModel;
use App\Models\TicketsTableModel;
use App\Models\UsersTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allTickets($page = 1)
    {
        $countControl = TicketsTableModel::all()->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('all-tickets', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allTickets = TicketsTableModel::orderBy('updated_at', 'DESC')->limit(10)->get();

            } else {
                $allTickets = TicketsTableModel::skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allTicketsCount = TicketsTableModel::all()->count();
            $respondedCount = TicketsTableModel::where('status', 'responded')->count();
            $resolvedCount = TicketsTableModel::where('status', 'resolved')->count();
            $pendingCount = TicketsTableModel::where('status', 'pending')->count();
            $type = "all";
            return view('Pages.Tickets.all-tickets', compact(
                'allTickets',
                'allTicketsCount',
                'respondedCount',
                'resolvedCount',
                'pendingCount',
                'page',
                'type'
            ));
        }
    }

    public function pendingTickets($page = 1)
    {
        $countControl = TicketsTableModel::where('status', 'pending')->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('pending-tickets', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allTickets = TicketsTableModel::where('status', 'pending')->orderBy('updated_at', 'DESC')->limit(10)->get();
            } else {
                $allTickets = TicketsTableModel::where('status', 'pending')->skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allTicketsCount = TicketsTableModel::all()->count();
            $respondedCount = TicketsTableModel::where('status', 'responded')->count();
            $resolvedCount = TicketsTableModel::where('status', 'resolved')->count();
            $pendingCount = TicketsTableModel::where('status', 'pending')->count();
            $type = "pending";
            return view('Pages.Tickets.all-tickets', compact(
                'allTickets',
                'allTicketsCount',
                'respondedCount',
                'resolvedCount',
                'pendingCount',
                'page',
                'type'
            ));
        }
    }

    public function respondedTickets($page = 1)
    {
        $countControl = TicketsTableModel::where('status', 'responded')->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('responded-tickets', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allTickets = TicketsTableModel::where('status', 'responded')->orderBy('updated_at', 'DESC')->limit(10)->get();
            } else {
                $allTickets = TicketsTableModel::where('status', 'responded')->skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allTicketsCount = TicketsTableModel::all()->count();
            $respondedCount = TicketsTableModel::where('status', 'responded')->count();
            $resolvedCount = TicketsTableModel::where('status', 'resolved')->count();
            $pendingCount = TicketsTableModel::where('status', 'pending')->count();
            $type = "responded";
            return view('Pages.Tickets.all-tickets', compact(
                'allTickets',
                'allTicketsCount',
                'respondedCount',
                'resolvedCount',
                'pendingCount',
                'page',
                'type'
            ));
        }
    }

    public function resolvedTickets($page = 1)
    {
        $countControl = TicketsTableModel::where('status', 'resolved')->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('resolved-tickets', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allTickets = TicketsTableModel::where('status', 'resolved')->orderBy('updated_at', 'DESC')->limit(10)->get();
            } else {
                $allTickets = TicketsTableModel::where('status', 'resolved')->skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allTicketsCount = TicketsTableModel::all()->count();
            $respondedCount = TicketsTableModel::where('status', 'responded')->count();
            $resolvedCount = TicketsTableModel::where('status', 'resolved')->count();
            $pendingCount = TicketsTableModel::where('status', 'pending')->count();
            $type = "resolved";
            return view('Pages.Tickets.all-tickets', compact(
                'allTickets',
                'allTicketsCount',
                'respondedCount',
                'resolvedCount',
                'pendingCount',
                'page',
                'type'
            ));
        }
    }

    public function showTicket($id)
    {
        $ticket = TicketsTableModel::find($id);
        $ticketMessages = TicketMessagesTableModel::where('ticket_id', $id)->orderBy('created_at', 'DESC')->get();
        $ticketUser = UsersTableModel::where('id', $ticket->user_id)->first();
        return view('Pages.Tickets.show-ticket', compact(
            'ticket',
            'ticketMessages',
            'ticketUser'
        ));
    }

    public function ticketAnswer(Request $request)
    {
        $user = Auth::user();

        if ($user->is_admin == 1) {
            if (is_null($request->ticket_id)) {
                return abort(404);
            } elseif (is_null($request->message)) {
                $ticket = TicketsTableModel::find($request->ticket_id);
                return redirect()->route('show-ticket', $ticket->id);
            } else {
                $ticket = TicketsTableModel::find($request->ticket_id);

                $newTicketMessage = new TicketMessagesTableModel;
                $newTicketMessage->ticket_id = $ticket->id;
                $newTicketMessage->user_id = $user->id;
                $newTicketMessage->message = $request->message;
                $newTicketMessage->save();

                $ticket->status = "responded";
                $ticket->save();

                return redirect()->route('show-ticket', $ticket->id);
            }
        } else if ($user->is_admin == 0) {
            if (is_null($request->ticket_id)) {
                return abort(404);
            } elseif (is_null($request->message)) {
                $ticket = TicketsTableModel::find($request->ticket_id);
                return redirect()->route('show-ticket', $ticket->id);
            } else {
                $ticket = TicketsTableModel::find($request->ticket_id);

                $newTicketMessage = new TicketMessagesTableModel;
                $newTicketMessage->ticket_id = $ticket->id;
                $newTicketMessage->user_id = $user->id;
                $newTicketMessage->message = $request->message;
                $newTicketMessage->save();

                $ticket->status = "pending";
                $ticket->save();

                return redirect()->route('show-my-ticket', $ticket->id);
            }
        } else {
            return abort(403);
        }
    }

    public function resolveTicket(Request $request)
    {
        $user = Auth::user();
        if (is_null($request->ticket_id)) {
            return abort(404);
        } else {
            $ticket = TicketsTableModel::find($request->ticket_id);
            $ticket->status = "resolved";
            $ticket->save();
            if ($user->is_admin == 1) {
                return redirect()->route('all-tickets', 1);
            } else if ($user->is_admin == 0) {
                return redirect()->route('my-all-tickets', 1);
            } else {
                return abort(403);
            }
        }
    }

}
