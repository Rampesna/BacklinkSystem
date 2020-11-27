@extends('Layouts.master')
@section('site_title', 'Backlink Satış')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table id="allAccounts" class="table table-hover js-basic-example dataTable table-custom spacing5">
                            <thead>
                            <tr>
                                <th>Paket Bilgisi</th>
                                <th>Paket Bitiş Tarihi</th>
                                <th>Ad Soyad</th>
                                <th>Kullanıcı Adı</th>
                                <th>E-posta</th>
                                <th>Telefon</th>
                                <th>Kredi</th>
                                <th>Premium Siteler</th>
                                <th>Düzenle</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($allAccounts as $account)
                            <tr>
                                @php($premiumSale = \App\Models\PremiumSalesTableModel::where('user_id',$account->id)->where('is_active',1)->orderBy('updated_at','DESC')->first())
                                @php($premiumPackage = \App\Models\PremiumPackagesTableModel::find($premiumSale->package_id))
                                <td>{{ $premiumPackage->name }}</td>
                                <td @if(\Illuminate\Support\Carbon::create($premiumSale->expire_date)->diffInMinutes(\Illuminate\Support\Carbon::now(), false) < 0) style="color: green" @else style="color: red" @endif>{{strftime("%d %B %Y - %H:%M",strtotime($premiumSale->expire_date))}}</td>
                                <td>{{$account->name_surname}}</td>
                                <td>{{$account->username}}</td>
                                <td>{{$account->email}}</td>
                                <td>{{"+90 (".substr($account->phone,0,3).") ".substr($account->phone,3,3)." ".substr($account->phone,6,4)}}</td>
                                <td style="color: #00aa00">{{$account->balance}} ₺</td>
                                <td style="color: #00aa00"><a href="{{ route('account-premium-sites',\Illuminate\Support\Facades\Crypt::encrypt($account->id)) }}" class="btn btn-info"> Premium Siteler </a></td>
                                <td>
                                    <a href="{{route('disable-premium',\Illuminate\Support\Facades\Crypt::encrypt($account->id))}}" class="btn btn-warning text-white">Premiumu Sonlandır</a>
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
                    "order": [[ 0, "desc" ]],

                    /*
                    buttons: [
                        'copy', 'excel', 'pdf', 'print'
                    ],
                    */
                    responsive: true
                });
            </script>

    <script>
        $('#accountDeleteModal').on('show', function () {
            var id = $(this).data('id'),
                removeBtn = $(this).find('.danger');
        })

        $('#allAccounts').on('click', '.confirm-delete', function (e) {
            e.preventDefault();

            var id = $(this).data('id');
            $('#accountDeleteModal').data('id', id).modal('show');
        });

        $('#allAccounts').on('click', '.linkControl', function (e) {
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

        $('#btnYesAccount').click(function () {
            // handle deletion here
            var id = $('#accountDeleteModal').data('id');
            window.location.href = "/account/delete-account/" + id;
            $('[data-id=' + id + ']').remove();
            $('#accountDeleteModal').modal('hide');
        });
    </script>
@stop
