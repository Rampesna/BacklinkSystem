@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

@php($userTypeControl = \Illuminate\Support\Facades\Auth::user())
@if($userTypeControl->username == "demo")
    @if(isset($allLinks))
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
                                    <th>Eklenme Türü</th>
                                    <th>Adult</th>
                                    <th>İşlem</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($allLinks as $link)
                                    <tr>
                                        <td>
                                            {!! "<i class='small'>Demo Hesap Siteleri Göremez!</i>" !!}
                                        </td>
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
                                            {!! "<i class='small'>Demo Hesap İle İşlem Yapılamaz!</i>" !!}
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
@else
    @if($userTypeControl->is_admin == 1)
        <audio controls preload="none">
            <source src="{{asset('assets/notification.mp3')}}" type="audio/mpeg">
        </audio>
        <div class="row clearfix">
            <div class="col-3">
                <div class="card">
                    <div class="body ribbon">
                        <a href="{{route('all-accounts')}}" class="my_sort_cut text-muted">
                            <i class="icon-user"></i>
                            <span>Müşteriler</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="body ribbon">
                        <a href="{{route('all-links')}}" class="my_sort_cut text-muted">
                            <i class="icon-link"></i>
                            <span>Linkler</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="body ribbon">
                        <div id="waitingNewCredits" class="ribbon-box orange">Yeni</div>
                        <a href="{{route('credit-appeals')}}" class="my_sort_cut text-muted">
                            <i class="icon-credit-card"></i>
                            <span>Kredi Başvuruları</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="body ribbon">
                        <div id="waitingNewTickets" class="ribbon-box info">Yeni</div>
                        <a href="{{route('all-tickets')}}" class="my_sort_cut text-muted">
                            <i class="icon-envelope"></i>
                            <span>Destek Talepleri</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card text-white bg-green">
                    <div class="card-header text-center">Bugün Satın Alınan Krediler</div>
                    <div class="card-body">
                        <div class="pb-4 m-0 text-center h1 text-success">₺ {{ number_format($todayPurchasedCreditAmount,2, ',', '.') }}</div>
                        <div class="d-flex">
                            <small class="text-muted">Düne Göre Değişim</small>
                            <div class="ml-auto"><i class="fa fa-caret-right text-warning"></i> 0.00%</div>
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-info">
                    <div class="card-header text-center">Bugün Satılan Linkler</div>
                    <div class="card-body">
                        <div class="pb-4 m-0 text-center h1 text-info">₺ {{ number_format($todayPurchasedLinksAmount,2, ',', '.') }}</div>
                        <div class="d-flex">
                            <small class="text-muted">Düne Göre Değişim</small>
                            <div class="ml-auto"><i class="fa fa-caret-right text-warning"></i> 0.00%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="body ribbon">
                        <div class="row text-center">
                            <div class="col-lg-4 col-sm-12 border-right pb-4 pt-4">
                                <label class="mb-0">Toplam Müşteri Sayısı</label>
                                <h4 class="font-30 font-weight-bold text-col-blue">{{$customerCount}}</h4>
                            </div>
                            <div class="col-lg-4 col-sm-12 border-right pb-4 pt-4">
                                <label class="mb-0">Toplam Satılan Link Sayısı</label>
                                <h4 class="font-30 font-weight-bold text-col-blue">{{$allPurchasedLinksCount}}</h4>
                            </div>
                            <div class="col-lg-4 col-sm-12 pb-4 pt-4">
                                <label class="mb-0">Satılabilir Link Sayısı</label>
                                <h4 class="font-30 font-weight-bold text-col-blue">{{$linksCount}}</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <h5>En Çok Satılan Linkler</h5>
                        </div>
                        @php($counter = 0)
                        @foreach($mostPurchasedLinksList as $bestLink)
                            @if($counter == 0)
                                @php($color = "progress-bar-success")
                            @elseif($counter == 1)
                                @php($color = "progress-bar-warning")
                            @elseif($counter == 2)
                                @php($color = "progress-bar-info")
                            @elseif($counter == 3)
                                @php($color = "progress-bar-danger")
                            @else
                                @php($color = "bg-indigo")
                            @endif
                            <div class="mb-4 mt-3">
                                <label class="d-block">{{$bestLink["url"]}} | <small><i>( {{$bestLink["count"]}} Adet Satıldı )</i></small><span class="float-right">{{$bestLink["percent"]}}%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar {{$color}}" role="progressbar" aria-valuenow="{{$bestLink["percent"]}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$bestLink["percent"]}}%;"></div>
                                </div>
                            </div>
                            @php($counter++)
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">

            </div>
        </div>
    @else
        <div class="row clearfix">
            <div class="col-3">
                <div class="card">
                    <div class="body ribbon">
                        <a href="{{route('index')}}" class="my_sort_cut text-muted">
                            <i class="icon-user"></i>
                            <span>Profilim</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="body ribbon">
                        <a href="{{route('my-all-tickets')}}" class="my_sort_cut text-muted">
                            <i class="icon-envelope"></i>
                            <span>Destek Taleplerim</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="body ribbon">
                        <a href="{{route('customer-all-links')}}" class="my_sort_cut text-muted">
                            <i class="icon-link"></i>
                            <span>Satın Alınabilir Linkler</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="body ribbon">
                        <a href="{{route('my-links')}}" class="my_sort_cut text-muted">
                            <i class="icon-key"></i>
                            <span>Linklerim</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-3">
                <div class="card text-white bg-info">
                    <div class="card-header text-center">Satın Aldığım Tüm Kredilerin Toplamı</div>
                    <div class="card-body">
                        <div class="pb-4 m-0 text-center h1 text-info">₺ {{ number_format($allMyPurchasedCredits,2, ',', '.') }}</div>
                    </div>
                </div>
                <div class="card text-white bg-orange">
                    <div class="card-header text-center">Kalan Kredim</div>
                    <div class="card-body">
                        <div class="pb-4 m-0 text-center h1 text-orange">₺ {{ number_format($leftCredit,2, ',', '.') }}</div>
                    </div>
                </div>
            </div>
            <div class="col-3">

            </div>
            <div class="col-3">

            </div>
            <div class="col-3">
                <div class="card">
                    <div class="body top_counter">
                        <div class="icon bg-info text-white"><i class="fa fa-link"></i> </div>
                        <div class="content">
                            <span>Alınan Toplam Link Sayısı</span>
                            <h5 class="number mb-0">{{$purchasedLinksCount}}</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body top_counter">
                        <div class="icon bg-danger text-white"><i class="fa fa-turkish-lira"></i> </div>
                        <div class="content">
                            <span>Linklere Harcanan Toplam Kredi</span>
                            <h5 class="number mb-0">{{$purchasedLinksTotalAmount}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">

            <div class="col-lg-3 colm-md-3 col-sm-12">

            </div>
        </div>
    @endif
@endif


@stop

@section('custom-header')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>

    @if($userTypeControl->is_admin == 1)
        <script>
            $(document).ready(function() {
                $('audio').hide();
                @php($creditsCount = \App\Models\SalesTableModel::where('status','waiting')->count())
                @if($creditsCount > 0)
                    $("#waitingNewCredits").show();
                    $("#waitingNewCredits").html({{$creditsCount." Yeni"}});
                @else
                    $("#waitingNewCredits").hide();
                    $("#waitingNewCredits").html("");
                @endif

                @php($ticketsCount = \App\Models\TicketsTableModel::where('status','pending')->count())
                @if($ticketsCount > 0)
                    $("#waitingNewTickets").show();
                    $("#waitingNewTickets").html({{$ticketsCount." Yeni"}});
                @else
                    $("#waitingNewTickets").hide();
                    $("#waitingNewTickets").html("");
                @endif

                setInterval(function(){
                    $.ajax({
                        type: "get",
                        url: "{{route('waiting-tickets-control')}}",
                        success: function(result) {
                            if(result > 0){
                                var audio = $('audio');
                                audio[0].play();
                                $("#waitingNewTickets").show();
                                $("#waitingNewTickets").html(result + " Yeni");
                            }else{
                                $("#waitingNewTickets").hide();
                                $("#waitingNewTickets").html("");
                            }
                        },
                        error: function(result) {
                            $("#waitingNewTickets").hide();
                            $("#waitingNewTickets").html("");
                        }
                    });

                    $.ajax({
                        type: "get",
                        url: "{{route('waiting-credits-control')}}",
                        success: function(result) {
                            if(result > 0){
                                var audio = $('audio');
                                audio[0].play();
                                $("#waitingNewCredits").show(result + " Yeni");
                                $("#waitingNewCredits").html(result + " Yeni");
                            }else{
                                $("#waitingNewCredits").hide(result + " Yeni");
                                $("#waitingNewCredits").html("");
                            }
                        },
                        error: function(result) {
                            $("#waitingNewCredits").hide(result + " Yeni");
                            $("#waitingNewCredits").html("");
                        }
                    });
                }, 5000);
            });
        </script>
    @endif

@stop

