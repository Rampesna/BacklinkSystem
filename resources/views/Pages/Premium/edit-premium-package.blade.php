@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif

    @if(isset($package))
        <form action="{{route('update-premium-package')}}" method="post" class="row clearfix">
            {{csrf_field()}}
            <input type="hidden" name="package_id" value="{{$package->id}}">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-custom spacing5">
                            <thead>
                            <tr>
                                <th>Paket Adı</th>
                                <th>Premium Site Sayısı</th>
                                <th>Keyword Sayısı <small><i>( En fazla 5 Verilebilir )</i></small></th>
                                <th>Günlük Update İzni</th>
                                <th>Rakip Analizi</th>
                                <th>Fiyat</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td><input class="form-control" type="text" name="name" value="{{$package->name}}"></td>
                                <td><input class="form-control" type="text" name="allowed_premium_site" value="{{$package->allowed_premium_site}}"></td>
                                <td>
                                    <input class="form-control" type="text" name="allowed_keyword_count" value="{{$package->allowed_keyword_count}}">
                                </td>
                                <td><input class="form-control" type="text" name="daily_refreshing_count" value="{{$package->daily_refreshing_count}}"></td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input name="is_enemy_analysis" type="checkbox" @if($package->is_enemy_analysis == 1) checked @endif>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td><input class="form-control" type="text" name="price" value="{{$package->price}}"></td>
                                <td>
                                    <button type="submit" class="btn btn-success">Güncelle</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
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
