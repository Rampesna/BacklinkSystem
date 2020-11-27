@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif

    @if(isset($returnArray) && $returnArray["status"] == true)
        <form action="{{route('add-site-post')}}" method="post" class="row clearfix">
            {{csrf_field()}}
            <input type="hidden" name="site_url" value="{{$returnArray["url"]}}">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Sitenin Durumu</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom spacing5">
                            <thead>
                            <tr>
                                <th>Erişim</th>
                                <th>WWW</th>
                                <th>&nbsp;</th>
                                <th>Durum</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>
                                    <select name="http_status" class="custom-select">
                                        <option value="0">http</option>
                                        <option value="1">https</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="is_www" class="custom-select">
                                        <option value="1">Var</option>
                                        <option value="0">Yok</option>
                                    </select>
                                </td>
                                <td>{{$returnArray["url"]}}</td>
                                <td>Eklenebilir</td>
                                <td><input type="submit" value="Siteyi Ekle" class="btn btn-success btn-block"></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </form>
    @else
        <form class="row clearfix" method="post" action="{{route('add-site-control')}}">
            {{csrf_field()}}
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                    <div class="body">

                        <div class="form-group">
                            <label>Sitenizin URL'ini Girin</label>
                            <input type="text" maxlength="160" name="site_url" class="form-control" required>
                        </div>

                        <input type="submit" value="Kontrol Et" class="btn btn-block btn-outline-success">
                    </div>
                </div>
            </div>

        </form>
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
