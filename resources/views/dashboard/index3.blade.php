@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Cryptocurrency')


@section('content')
<div class="row clearfix">
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-auto">
                        <div class="stamp">
                            <img src="../assets/images/coin/BTC.svg" class="w40" alt="Bitcoin" />
                        </div>
                    </div>
                    <div class="col text-right">
                        <div class="text-muted">Bitcoin</div>
                        <div class="h4 m-0">0.098140$</div>
                    </div>
                </div>
            </div>
            <div class="card-chart-bg pt-4">
                <div id="chart-bg-users-4" style="height: 60px"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-auto">
                        <div class="stamp">
                            <img src="../assets/images/coin/LTC.svg" class="w40" alt="Litecoin" />
                        </div>
                    </div>
                    <div class="col text-right">
                        <div class="text-muted">Litecoin</div>
                        <div class="h4 m-0">0.198052$</div>
                    </div>
                </div>                            
            </div>
            <div class="card-chart-bg pt-4">
                <div id="chart-bg-users-1" style="height: 60px"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-auto">
                        <div class="stamp">
                            <img src="../assets/images/coin/ETH.svg" class="w40" alt="Ethereum" />
                        </div>
                    </div>
                    <div class="col text-right">
                        <div class="text-muted">Ethereum</div>
                        <div class="h4 m-0">0.017062$</div>
                    </div>
                </div>
            </div>
            <div class="card-chart-bg pt-4">
                <div id="chart-bg-users-2" style="height: 60px"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-auto">
                        <div class="stamp">
                            <img src="../assets/images/coin/neo.svg" class="w40" alt="Cardano" />
                        </div>
                    </div>
                    <div class="col text-right">
                        <div class="text-muted">Cardano</div>
                        <div class="h4 m-0">0.101532$</div>
                    </div>
                </div>
            </div>
            <div class="card-chart-bg pt-4">
                <div id="chart-bg-users-3" style="height: 60px"></div>
            </div>
        </div>
    </div>                
</div>

<div class="row clearfix">
    <div class="col-12">
        <form class="card" action="" method="post">
            <div class="body">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-label">ICO Token</label>
                            <input type="email" class="form-control" placeholder="23097">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-label">ETH</label>
                            <input type="email" class="form-control" placeholder="2">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Select</label>
                            <select class="custom-select">
                                <option selected="">ETH</option>
                                <option value="1">BTC</option>
                                <option value="2">LTC</option>
                                <option value="3">USDT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Wallet address</label>
                            <input type="email" class="form-control" placeholder="0OXD38D9EEB5B93E1D3862727635E9">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="form-group">
                            <label class="form-label">&nbsp;</label>
                            <button type="submit" class="btn btn-success btn-block">Buy now</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>My Watchlist </h2>
            </div>
            <table class="table table-hover table-custom spacing5 m-t--5 mb-0">
                <tbody>
                    <tr>
                        <td class="font-weight-bold">Apple</td>
                        <td class="text-right">984.52 <span class="text-success">(0.25%) <i class="fa fa-caret-up"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Google</td>
                        <td class="text-right">956.3 <span class="text-danger">(-0.15%) <i class="fa fa-caret-down"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">DMKT</td>
                        <td class="text-right">89.74 <span class="text-success">(0.85%) <i class="fa fa-caret-up"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">TMLS</td>
                        <td class="text-right">210.04 <span class="text-success">(0.65%) <i class="fa fa-caret-up"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">TMLS</td>
                        <td class="text-right">210.04 <span class="text-success">(0.65%) <i class="fa fa-caret-up"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">YOUS</td>
                        <td class="text-right">218.47 <span class="text-danger">(-0.42%) <i class="fa fa-caret-down"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">TCS</td>
                        <td class="text-right">48.75 <span class="text-danger">(-0.63%) <i class="fa fa-caret-down"></i></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Monthly Overview</h3>
                <ul class="header-dropdown dropdown">                                
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="chart-temperature" style="height: 315px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Transaction List</h3>
                <ul class="header-dropdown dropdown">                                
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="nav nav-tabs3">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Buy-new2">Buy</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Sell-new2">Sell</a></li>
            </ul>
            <div class="tab-content mt-0">
                <div class="tab-pane active show" id="Buy-new2">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <tbody>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/BTC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Bitcoin</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 BTC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/ETH.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Ethereum Classic</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td><strong>0.108762 ETC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/ETC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Ethereum</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 ETH</strong></td>
                                    <td class="w100 text-info"><strong>$11,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/neo.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">NEO</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 NEO</strong></td>
                                    <td class="w100 text-info"><strong>$3,102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>                                    
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/LTC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Litecoin</p></td>
                                    <td><span>11:20AM 7 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-danger">Stopped</span></td>
                                    <td><strong>0.108762 LTC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/qtum.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Qtum</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 QTUM</strong></td>
                                    <td class="w100 text-info"><strong>$3,102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/XRP.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Tether</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 USDT</strong></td>
                                    <td class="w100 text-info"><strong>$102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="Sell-new2">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <tbody>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/BTC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Bitcoin</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 BTC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>                                            
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/ETC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Ethereum</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 ETH</strong></td>
                                    <td class="w100 text-info"><strong>$11,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>                                            
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/qtum.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Qtum</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 QTUM</strong></td>
                                    <td class="w100 text-info"><strong>$3,102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/XRP.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Tether</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 USDT</strong></td>
                                    <td class="w100 text-info"><strong>$102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/ETH.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Ethereum Classic</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td><strong>0.108762 ETC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/neo.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">NEO</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 NEO</strong></td>
                                    <td class="w100 text-info"><strong>$3,102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>                                    
                                <tr>
                                    <td class="w60"><img src="../assets/images/coin/LTC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Litecoin</p></td>
                                    <td><span>11:20AM 7 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-danger">Stopped</span></td>
                                    <td><strong>0.108762 LTC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index3.js') }}"></script>
@stop