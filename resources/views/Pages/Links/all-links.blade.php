@extends('Layouts.master')
@section('site_title', 'Backlink Satış')

@section('custom-header')
    <style>
        @-webkit-keyframes rotating /* Safari and Chrome */ {
            from {
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes rotating {
            from {
                -ms-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -ms-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -webkit-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .rotating {
            -webkit-animation: rotating 2s linear infinite;
            -moz-animation: rotating 2s linear infinite;
            -ms-animation: rotating 2s linear infinite;
            -o-animation: rotating 2s linear infinite;
            animation: rotating 2s linear infinite;
        }
        .dataTables_filter {
            float: right !important;
        }
    </style>
@endsection

@section('content')



    @if(isset($allLinks))

        <div class="modal fade" id="linkDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Silmek İstediğinize Emin misiniz?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button id="modal-btn-no" type="button" class="btn btn-secondary" data-dismiss="modal">Hayır
                        </button>
                        <button id="btnYesLink" type="submit" class="btn btn-primary">Evet</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <a href="{{route('add-link')}}" class="btn btn-info btn-block bg-dark">Yeni Link Ekle</a>
                    <hr>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="allLinks" class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Global Alexa</th>
                                    <th>Ülke Alexa</th>
                                    <th>Index Sayısı</th>
                                    <th>Linking In</th>
                                    <th>DA</th>
                                    <th>PA</th>
                                    <th>Tür</th>
                                    <th>Eklenme Türü</th>
                                    <th>Adult</th>
                                    <th>Fiyatı</th>
                                    <th>Düzenle</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($allLinks as $link)
                                    <tr>
                                        <td><a href="{{route('link-purchases',$link->id)}}">{{$link->url}}</a></td>
                                        <td>{{$link->alexa_global}}</td>
                                        <td>{{$link->alexa_country}}</td>
                                        <td>{{$link->google_index_count}}</td>
                                        <td>{{$link->sites_linking_in}}</td>
                                        <td>{{$link->da_value}}</td>
                                        <td>{{$link->pa_value}}</td>
                                        <td>{{strtoupper($link->type)}}</td>
                                        <td>
                                            @if($link->add_type == 1)
                                                Otomatik
                                            @else
                                                Manuel
                                            @endif
                                        </td>
                                        <td>
                                            @if($link->is_adult == 1)
                                                <i style="color: #00aa00" class="fa fa-check"></i>
                                            @else
                                                <i style="color: #8f1f00" class="fa fa-close"></i>
                                            @endif
                                        </td>
                                        <td>
                                            {{$link->price}} ₺
                                        </td>
                                        <td>
                                            <a href="{{route('edit-link',["id" => $link->id,"url" => \App\Helpers\General::trimUrl($link->url)])}}"><i style="color: #00A6C7" class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                            <a data-id="{{$link->id}}"
                                               data-whatever="{{$link->url}}" href="#"
                                               class="fa fa-trash confirm-delete"
                                               data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;"></a>&nbsp;&nbsp;
                                        </td>
                                        <td class="text-center">
                                            @if($link->add_type == 1)
                                                <button link="{{$link->id}}" class="btn btn-outline-info linkControl">Kontrol Et</button>
                                                <i style="color: orange" id="loading_{{$link->id}}" class="fa fa-spinner rotating"></i>
                                                <i id="link_i_id_{{$link->id}}" class="fa fa-lg"></i>
                                            @elseif($link->add_type == 0)
                                                <button disabled link="{{$link->id}}" class="btn btn-outline-secondary linkControl">Kontrol Et</button>
                                                <i style="color: orange" id="loading_{{$link->id}}" class="fa fa-spinner rotating"></i>
                                                <i id="link_i_id_{{$link->id}}" class="fa fa-lg"></i>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    @endif

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>


    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script>
        var table = $('#allLinks').DataTable({
            language: {
                info: "_TOTAL_ Kayıttan _START_ - _END_ Arasındaki Kayıtlar Gösteriliyor.",
                infoEmpty: "Gösterilecek Hiç Kayıt Yok.",
                loadingRecords: "Kayıtlar Yükleniyor.",
                zeroRecords: "Tablo Boş",
                search: "Arama:",
                infoFiltered: "(Toplam _MAX_ Kayıttan Filtrelenenler)",
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
            responsive: true,
            select : true
        });

        table.rows().every( function () {
            this.$('.rotating').hide();
        } );

    </script>

    <script>
        $('#linkDeleteModal').on('show', function () {
            var id = $(this).data('id'),
                removeBtn = $(this).find('.danger');
        })

        $('#allLinks').on('click', '.confirm-delete', function (e) {
            e.preventDefault();

            var id = $(this).data('id');
            $('#linkDeleteModal').data('id', id).modal('show');
        });

        $('#allLinks').on('click', '.linkControl', function (e) {
            e.preventDefault();
            $(this).hide();
            var link_id = $(this).attr('link');
            $.ajax({
                type: "get",
                url: "{{route('link-admin-control')}}",
                data: {
                    link_id: $(this).attr('link'),
                },
                beforeSend: loadStart,
                complete: loadStop,
                success: function(result) {
                    if(result == "true"){
                        $("#link_i_id_"+link_id).addClass('fa-check');
                        $("#link_i_id_"+link_id).css({"color": "green"})
                    }else{
                        $("#link_i_id_"+link_id).addClass('fa-close');
                        $("#link_i_id_"+link_id).css({"color": "red"})
                    }
                },
                error: function(result) {
                    $("#link_i_id_"+link_id).addClass('fa-close');
                    $("#link_i_id_"+link_id).css({"color": "red"})
                }
            });

            function loadStart() {
                $('#loading_'+link_id).show();
            }
            function loadStop() {
                $('#loading_' + link_id).hide();
            }
        });

        $('#btnYesLink').click(function () {
            // handle deletion here
            var id = $('#linkDeleteModal').data('id');
            window.location.href = "/links/delete-link/" + id;
            $('[data-id=' + id + ']').remove();
            $('#linkDeleteModal').modal('hide');
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.rotating').hide();
            $(".linkControl").click(function(e) {
                $(this).hide();
                var link_id = $(this).attr('link');
                $.ajax({
                    type: "get",
                    url: "{{route('link-admin-control')}}",
                    data: {
                        link_id: $(this).attr('link'),
                    },
                    beforeSend: loadStart,
                    complete: loadStop,
                    success: function(result) {
                        if(result == "true"){
                            $("#link_i_id_"+link_id).addClass('fa-check');
                            $("#link_i_id_"+link_id).css({"color": "green"})
                        }else{
                            $("#link_i_id_"+link_id).addClass('fa-close');
                            $("#link_i_id_"+link_id).css({"color": "red"})
                        }
                    },
                    error: function(result) {
                        $("#link_i_id_"+link_id).addClass('fa-close');
                        $("#link_i_id_"+link_id).css({"color": "red"})
                    }
                });

                function loadStart() {
                    $('#loading_'+link_id).show();
                }
                function loadStop() {
                    $('#loading_' + link_id).hide();
                }
            });
        });
    </script>
@stop
