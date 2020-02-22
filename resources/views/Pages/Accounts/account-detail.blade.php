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
    </style>
@endsection

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="body">
                    <ul class="nav nav-tabs3">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-new2">Müşterinin Bilgileri</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-new2">Müşterinin Siteleri</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Contact-new2">Müşterinin Satın Aldığı Linkler</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="Home-new2">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-6">
                                                <form action="{{route('set-account-activated')}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="account_id" value="{{$account->id}}">
                                                    <button @if($account->is_activated == 1) disabled @endif class="btn btn-block btn-outline-warning">Maili Onayla @if($account->is_activated == 1) <small><i>(Zaten Onaylı Hesap)</i></small> @endif</button>
                                                </form>
                                            </div>
                                            <div class="col-6">
                                                @if($account->is_banned == 1)
                                                    <form action="{{route('set-account-not-banned')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="account_id" value="{{$account->id}}">
                                                        <button class="btn btn-block btn-outline-success">Hesabın Banını Aç</button>
                                                    </form>
                                                @else
                                                    <form action="{{route('set-account-banned')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="account_id" value="{{$account->id}}">
                                                        <button class="btn btn-block btn-outline-danger">Hesabı Banla</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="body text-center">
                                            <img class="img-thumbnail rounded-circle" src="{{asset('assets/images/user.png')}}" alt="">
                                            <h6 class="mt-3">{{ucwords($account->name_surname)}}</h6>
                                            <div class="text-center text-muted">{{"@".$account->username}}</div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <div class="row clearfix">
                                                <div class="col-4">
                                                    <div><span class="text-muted"><strong>E-posta Adresi : </strong>{{$account->email}}</span></div>
                                                </div>
                                                <div class="col-4">
                                                    <div><span class="text-muted"><strong>Telefon : </strong>{{\App\Helpers\General::phoneNumberReconstitute($account->phone)}}</span></div>
                                                </div>
                                                <div class="col-4">
                                                    <div><span class="text-muted"><strong>Hesap Durumu :
                                                            @if($account->is_activated == 0)
                                                                <span style="color: orange">Mail Onayı Bekliyor</span>
                                                            @elseif($account->is_activated == 1 && $account->is_banned == 1)
                                                                <span style="color: red">Hesap Banlandı</span>
                                                            @else
                                                                <span style="color: green">Aktif Hesap</span>
                                                            @endif
                                                            </strong>
                                                        </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">
                                    <div class="card text-white bg-info">
                                        <div class="card-header text-center">Satın Alınan Toplam Kredi</div>
                                        <div class="card-body">
                                            <div class="pb-4 m-0 text-center h1 text-info">₺ {{ number_format($purchasedCredit,2, ',', '.') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card text-white bg-warning">
                                        <div class="card-header text-center">Harcanan Toplam Kredi</div>
                                        <div class="card-body">
                                            <div class="pb-4 m-0 text-center h1 text-warning">₺ {{ number_format($spentCredit,2, ',', '.') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card text-white bg-success">
                                        <div class="card-header text-center">Kalan Kredi</div>
                                        <div class="card-body">
                                            <div class="pb-4 m-0 text-center h1 text-success">₺ {{ number_format($remainedCredit,2, ',', '.') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Profile-new2">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="allSites" class="table header-border table-hover table-custom spacing7">
                                        <thead>
                                        <tr>
                                            <th class="col-8"><strong>Site URL</strong></th>
                                            <th class="col-4 text-center"><strong>Düzenle</strong></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($accountSites as $site)
                                            <tr>
                                                <td class="col-8">{{$site->url}}</td>
                                                <td class="col-4 text-center">
                                                    <a href="{{route('edit-user-site',$site->id)}}" class="btn btn-outline-warning">Düzenle</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Contact-new2">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="allSites" class="table header-border table-hover table-custom spacing7">
                                        <thead>
                                        <tr>
                                            <th><strong>Link Alınan Site</strong></th>
                                            <th><strong>Alınan Link URL</strong></th>
                                            <th><strong>Kelimeler</strong></th>
                                            <th class="text-center"><strong>Eklenme Durumu</strong></th>
                                            <th class="text-center"><strong>Link Durumu</strong></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($accountLinks as $link)
                                            <tr>
                                                <td>{{\App\Models\UserSitesTableModel::select('url')->where('id',$link->site_id)->first()->url}}</td>
                                                <td><a class="text-info" target="_blank" href="http://{{\App\Models\LinksTableModel::select('url')->where('id',$link->link_id)->first()->url}}">{{\App\Models\LinksTableModel::select('url')->where('id',$link->link_id)->first()->url}}</a></td>
                                                <td>{{$link->keyword}}</td>
                                                <td class="text-center">
                                                    @if($link->is_added == "1")
                                                        <span style="color: green">Eklendi</span>
                                                    @else
                                                        <span style="color: orange">Bekliyor</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <button purchase="{{$link->id}}" class="btn btn-outline-info purchaseControl">Kontrol Et</button>
                                                    <i style="color: orange" id="loading_{{$link->id}}" class="fa fa-spinner rotating"></i>
                                                    <i id="purchase_i_id_{{$link->id}}" class="fa fa-lg"></i>
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

                    /*
                    buttons: [
                        'copy', 'excel', 'pdf', 'print'
                    ],
                    */
                    responsive: true
                });
            </script>

    <script>
        $(document).ready(function() {
            $('.rotating').hide();
            $(".purchaseControl").click(function(e) {
                $(this).hide();
                var p_id = $(this).attr('purchase');
                $.ajax({
                    type: "get",
                    url: "{{route('link-control')}}",
                    data: {
                        purchase_id: $(this).attr('purchase'),
                    },
                    beforeSend: loadStart,
                    complete: loadStop,
                    success: function(result) {
                        if(result == "true"){
                            $("#purchase_i_id_"+p_id).addClass('fa-check');
                            $("#purchase_i_id_"+p_id).css({"color": "green"})
                        }else{
                            $("#purchase_i_id_"+p_id).addClass('fa-close');
                            $("#purchase_i_id_"+p_id).css({"color": "red"})
                        }
                    },
                    error: function(result) {
                        $("#purchase_i_id_"+p_id).addClass('fa-close');
                        $("#purchase_i_id_"+p_id).css({"color": "red"})
                    }
                });

                function loadStart() {
                    $('#loading_'+p_id).show();
                }
                function loadStop() {
                    $('#loading_' + p_id).hide();
                }
            });
        });
    </script>
@stop
