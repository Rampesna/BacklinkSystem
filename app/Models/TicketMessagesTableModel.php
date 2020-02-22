<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TicketMessagesTableModel extends Model
{
    use Notifiable;
    protected $table = "ticket_messages";
    protected $primaryKey = "id";
    protected $guarded = [];
}
