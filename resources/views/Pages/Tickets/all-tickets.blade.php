@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($allTickets))

        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <a href="{{route('all-tickets')}}" class="card">
                    <div class="body top_counter">
                        <div class="icon bg-danger text-white"><i class="fa fa-ticket"></i> </div>
                        <div class="content">
                            <span>Tüm Destek Talepleri</span>
                            <h5 class="number mb-0">{{$allTicketsCount}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{route('pending-tickets')}}" class="card">
                    <div class="body top_counter">
                        <div class="icon bg-warning text-white"><i class="fa fa-spinner"></i> </div>
                        <div class="content">
                            <span>Cevap Bekleyenler</span>
                            <h5 class="number mb-0">{{$pendingCount}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{route('responded-tickets')}}" class="card">
                    <div class="body top_counter">
                        <div class="icon bg-info text-white"><i class="fa fa-flag"></i> </div>
                        <div class="content">
                            <span>Cevaplananlar</span>
                            <h5 class="number mb-0">{{$respondedCount}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{route('resolved-tickets')}}" class="card">
                    <div class="body top_counter">
                        <div class="icon bg-success text-white"><i class="fa fa-check"></i> </div>
                        <div class="content">
                            <span>Tamamlananlar</span>
                            <h5 class="number mb-0">{{$resolvedCount}}</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-custom2 table-hover">
                        <thead>
                        <tr>
                            <th colspan="3">Detaylar</th>
                            <th colspan="5">Aktivite</th>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>Başlık</th>
                            <th>Öncelik</th>
                            <th>Açılma Tarihi</th>
                            <th>Son İşlem</th>
                            <th>Durum</th>
                            <th class="text-center">Yanıtlar</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($allTickets as $ticket)

                            <tr>
                                <td><a href="#">#{{$ticket->id}}</a></td>
                                <td><span>{{$ticket->title}}</span></td>
                                <td>
                                    <span class="badge @if($ticket->priority == 1) badge-default @elseif($ticket->priority == 2) badge-info @elseif($ticket->priority == 3) badge-danger @endif">
                                        @if($ticket->priority == 1)
                                            Düşük
                                        @elseif($ticket->priority == 2)
                                            Orta
                                        @elseif($ticket->priority == 3)
                                            Yüksek
                                        @endif
                                    </span>
                                </td>
                                <td><span>{{\App\Helpers\General::calculateDateDiff(date("Y-m-d H:i:s"),$ticket->created_at)}}</span></td>
                                <td><span>{{\App\Helpers\General::calculateDateDiff(date("Y-m-d H:i:s"),$ticket->updated_at)}}</span></td>
                                <td>
                                    <span class="badge @if($ticket->status == "pending") badge-warning @elseif($ticket->status == "responded") badge-info @elseif($ticket->status == "resolved") badge-success @endif">
                                        @if($ticket->status == "pending")
                                            İşlem Bekliyor
                                        @elseif($ticket->status == "responded")
                                            Cevaplandı
                                        @elseif($ticket->status == "resolved")
                                            Çözüdlü
                                        @endif
                                    </span>
                                </td>
                                <td class="text-center">{{\App\Models\TicketMessagesTableModel::where('ticket_id',$ticket->id)->count()}}</td>
                                <td><a href="{{route('show-ticket',$ticket->id)}}" class="btn btn-outline-info">Yanıtla</a></td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                    @if(count($allTickets) > 0)
                        @if($page == 1)
                            <ul class="pagination mt-2">
                                <li class="page-item"><a style="color:#e9ecef" class="page-link" href="javascript:void(0);">Önceki</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{$page}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route($type.'-tickets',$page + 1)}}">{{$page + 1}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route($type.'-tickets',$page + 2)}}">{{$page + 2}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route($type.'-tickets',$page + 1)}}">Sonraki</a></li>
                            </ul>
                        @else
                            <ul class="pagination mt-2">
                                <li class="page-item"><a class="page-link" href="{{route($type.'-tickets',$page -1)}}">Önceki</a></li>
                                <li class="page-item"><a class="page-link" href="{{route($type.'-tickets',$page - 1)}}">{{$page - 1}}</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{$page}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route($type.'-tickets',$page + 1)}}">{{$page + 1}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route($type.'-tickets',$page + 1)}}">Sonraki</a></li>
                            </ul>
                        @endif
                    @endif
                </div>
            </div>
        </div>

    @endif

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">

@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

@stop
