@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


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
                                    <th>Adult</th>
                                    <th>Düzenle</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($allLinks as $link)
                                    <tr>
                                        <td>{{$link->url}}</td>
                                        <td>{{$link->alexa_global}}</td>
                                        <td>{{$link->alexa_country}}</td>
                                        <td>{{$link->google_index_count}}</td>
                                        <td>{{$link->sites_linking_in}}</td>
                                        <td>{{$link->da_value}}</td>
                                        <td>{{$link->pa_value}}</td>
                                        <td>{{strtoupper($link->type)}}</td>
                                        <td>
                                            @if($link->is_adult == 1)
                                                <i style="color: #00aa00" class="fa fa-check"></i>
                                            @else
                                                <i style="color: #8f1f00" class="fa fa-close"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('edit-link',["id" => $link->id,"url" => \App\Helpers\General::trimUrl($link->url)])}}"><i style="color: #00A6C7" class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                            <a data-id="{{$link->id}}"
                                               data-whatever="{{$link->url}}" href="#"
                                               class="fa fa-trash confirm-delete"
                                               data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;"></a>&nbsp;&nbsp;
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
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>


    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script>
        $('#allLinks').DataTable({
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

        $('#btnYesLink').click(function () {
            // handle deletion here
            var id = $('#linkDeleteModal').data('id');
            window.location.href = "/links/delete-link/" + id;
            $('[data-id=' + id + ']').remove();
            $('#linkDeleteModal').modal('hide');
        });
    </script>
@stop
