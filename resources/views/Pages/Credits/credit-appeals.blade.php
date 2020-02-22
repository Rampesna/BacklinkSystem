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
                                <th>Kullanıcı Adı</th>
                                <th>Ödeme Gelen Ad Soyad</th>
                                <th>Ödeme Gelen IBAN</th>
                                <th>İstenen Kredi</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($getAppeals as $appeal)
                            <tr>
                                <td>{{\App\Models\UsersTableModel::select('username')->where('id',$appeal->user_id)->first()->username}}</td>
                                <td>{{$appeal->name_surname}}</td>
                                <td>{{$appeal->iban}}</td>
                                <td style="color: #00aa00">{{$appeal->amount}} ₺</td>
                                <td>
                                    <a class="btn btn-outline-success" href="#" onclick="event.preventDefault(); document.getElementById('acceptAppeal').submit();">Onayla</a>
                                    <a class="btn btn-outline-danger" href="#" onclick="event.preventDefault(); document.getElementById('declineAppeal').submit();">Reddet</a>
                                    <form id="acceptAppeal" action="{{ route('accept-appeal') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{$appeal->user_id}}">
                                        <input type="hidden" name="appeal_id" value="{{$appeal->id}}">
                                    </form>
                                    <form id="declineAppeal" action="{{ route('decline-appeal') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="appeal_id" value="{{$appeal->id}}">
                                    </form>

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
                        zeroRecords: "Aktif Kredi Başvurusu Yok",
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
