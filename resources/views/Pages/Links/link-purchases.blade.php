@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')



    @if(isset($linkPurchases))


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
                    <label><a target="_blank" href="https://{{$link->url}}">{{$link->url}}</a> - Sitesine Alınan Linkler</label>
                    <hr>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="allLinks" class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Kullanıcı Adı</th>
                                    <th>Site URL</th>
                                    <th>Kelime</th>
                                    <th>Düzenle</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($linkPurchases as $purchase)
                                    <tr>
                                        <td></td>
                                        <td>{{\App\Models\UsersTableModel::select('username')->where('id',$purchase->user_id)->first()->username}}</td>
                                        <td>{{\App\Models\UserSitesTableModel::select('url')->where('id',$purchase->site_id)->first()->url}}</td>
                                        <td>{{$purchase->keyword}}</td>
                                        <td>
                                            <i style="color: #00A6C7" class="fa fa-eye"></i>
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
