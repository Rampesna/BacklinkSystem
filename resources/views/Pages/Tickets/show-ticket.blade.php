@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')
    <form action="{{route('resolve-ticket')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
        <button class="btn btn-success btn-block bg-dark">Çözüldü Olarak İşaretle</button>
    </form>
    <hr>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Destek Talebi Detayları</h2>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <small class="text-muted">Kullanıcı: </small>
                        <p  class="mb-0">
                            {{ucwords($ticketUser->name_surname)}}
                            <br>
                            <small>{{ "@".$ticketUser->username }}</small>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <small class="text-muted">Başlık: </small>
                        <p class="mb-0">{{$ticket->title}}</p>
                    </li>
                    <li class="list-group-item">
                        <small class="text-muted">Açıklama: </small>
                        <p  class="mb-0">{{$ticket->description}}</p>
                    </li>
                    <li class="list-group-item">
                        <small class="text-muted">Açılma Tarihi: </small>
                        <p  class="mb-0">{{\App\Helpers\General::calculateDateDiff(date("Y-m-d H:i:s"),$ticket->created_at)}}</p>
                    </li>
                    <li class="list-group-item">
                        <small class="text-muted">Durum: </small>
                        <span class="badge @if($ticket->status == "pending") badge-warning @elseif($ticket->status == "responded") badge-info @elseif($ticket->status == "resolved") badge-success @endif">
                                @if($ticket->status == "pending")
                                İşlem Bekliyor
                            @elseif($ticket->status == "responded")
                                Cevaplandı
                            @elseif($ticket->status == "resolved")
                                Çözüdlü
                            @endif
                            </span>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="header">
                    <h2>Yanıtla</h2>
                </div>
                <form action="{{route('ticket-answer')}}" method="post" class="body">
                    {{csrf_field()}}
                    <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
                    <textarea rows="10" required name="message" class="summernote"></textarea>
                    <hr>
                    <input class="btn btn-info btn-block" type="submit" value="Yanıtla">
                </form>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Konuşma Geçmişi</h2>
                    <ul class="header-dropdown dropdown">
                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    </ul>
                </div>
                <div class="body">
                    <ul class="timeline">
                        @if(count($ticketMessages) > 0)
                            @foreach($ticketMessages as $message)
                                <li class="timeline-item">
                                    <div class="timeline-info">
                                        <span>{{strftime("%F, %R",strtotime($message->created_at))}}</span>
                                    </div>
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h3 class="timeline-title">
                                            @php($messageUser = \App\Models\UsersTableModel::find($message->user_id))
                                            @if($messageUser->is_admin == 1)
                                                <strong class="text-orange">{{"@".$messageUser->username}}</strong>
                                            @else
                                                <strong class="text-info">{{"@".$messageUser->username}}</strong>
                                            @endif
                                        </h3>
                                        <p>{!! $message->message !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <li class="timeline-item">
                                Henüz Hiç Cevap Yok
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>


    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script>
        $('#allTickets').DataTable({
            language: {
                info: "_TOTAL_ Kayıttan _START_ - _END_ Arasındaki Kayıtlar Gösteriliyor.",
                infoEmpty: "Gösterilecek Hiç Kayıt Yok.",
                loadingRecords: "Kayıtlar Yükleniyor.",
                zeroRecords: "Tablo Boş",
                search: "Arama:",
                infoFiltered: "(Yoplam _MAX_ Kayıttan Filtrelenenler)",
                lengthMenu: "Sayfa Başı _MENU_ Kayıt Göster",
                /*
                buttons: {
                    copyTitle: "Panoya Kopyalandı.",
                    copySuccess:"Panoya %d Satır Kopyalandı",
                    copy: "Kopyala",
                    print: "Yazdır",
                },
    */
                paginate: {
                    first: "İlk",
                    previous: "Önceki",
                    next: "Sonraki",
                    last: "Son"
                },
            },
            dom: 'frtipl',

            /*
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ],
            */
            responsive: true
        });
    </script>

@stop
