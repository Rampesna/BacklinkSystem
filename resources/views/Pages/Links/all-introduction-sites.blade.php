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



    @if(isset($sites))

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
                    <a href="{{route('add-introduction-site')}}" class="btn btn-info btn-block bg-dark">Yeni Site Ekle</a>
                    <hr>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="allLinks" class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                <tr>
                                    <th>URL</th>
                                    <th>Global Alexa</th>
                                    <th>Ülke Alexa</th>
                                    <th>Eklenme Türü</th>
                                    <th>Fiyatı</th>
                                    <th class="text-right"></th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($sites as $site)
                                    <tr>
                                        <td><a class="text-primary">{{ $site->url }}</a></td>
                                        <td>{{$site->alexa_global}}</td>
                                        <td>{{$site->alexa_country}}</td>
                                        <td>
                                            @if($site->auto == 1)
                                                Otomatik
                                            @else
                                                Manuel
                                            @endif
                                        </td>
                                        <td>
                                            {{$site->price}} ₺
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('delete-introduction-site', ['id' => $site->id]) }}"><i class="fa fa-trash"></i></a>
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
