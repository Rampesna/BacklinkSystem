@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')



    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table id="allAccounts" class="table table-hover js-basic-example dataTable table-custom spacing5">
                            <thead>
                            <tr>
                                <th>Kredi Başvuru Tarihi</th>
                                <th>Kullanıcı Adı</th>
                                <th>Ödeme Gelen Ad Soyad</th>
                                <th>Ödeme Gelen IBAN</th>
                                <th>İstenen Kredi</th>
                                <th>Kredi Reddedilme Tarihi</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($declinedCredits as $sale)
                            <tr>
                                <td>{{strftime("%Y - %m - %d , %H:%M:%S",strtotime($sale->created_at))}}</td>
                                <td>{{\App\Models\UsersTableModel::select('username')->where('id',$sale->user_id)->first()->username}}</td>
                                <td>{{$sale->name_surname}}</td>
                                <td>{{$sale->iban}}</td>
                                <td><strong>₺ {{$sale->amount}}</strong></td>
                                <td>{{strftime("%Y - %m - %d , %H:%M:%S",strtotime($sale->updated_at))}}</td>
                                <td>
                                    <i style="color: #8f1f00" class="fa fa-close fa-lg"></i>
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
                $('#allAccounts').DataTable({
                    language: {
                        info: "_TOTAL_ Kayıttan _START_ - _END_ Arasındaki Kayıtlar Gösteriliyor.",
                        infoEmpty: "Gösterilecek Hiç Kayıt Yok.",
                        loadingRecords: "Kayıtlar Yükleniyor.",
                        zeroRecords: "Reddedilen Kredi Yok",
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
