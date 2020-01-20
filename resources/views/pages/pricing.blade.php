@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Pricing List')


@section('content')
<div class="row clearfix">
    <div class="col-lg-4 cool-md-4 col-sm-12">
        <div class="card">
            <ul class="pricing body">
                <li class="plan-img"><img class="img-fluid rounded-circle" src="../assets/images/plan-1.svg" alt="" /></li>
                <li class="price">
                    <h3><span>$</span> 99 <small>/ mo</small></h3>
                    <span>Freelance</span>
                </li>
                <li>1 GB of space</li>
                <li>Support at $25/hour</li>
                <li>Limited cloud access</li>                         
                <li class="plan-btn"><button class="btn btn-round btn-outline-secondary">Choose plan</button></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 cool-md-4 col-sm-12">
        <div class="card">
            <ul class="pricing body active">
                <li class="plan-img"><img class="img-fluid rounded-circle" src="../assets/images/plan-2.svg" alt="" /></li>
                <li class="price">
                    <h3><span>$</span> 199 <small>/ mo</small></h3>
                    <span>Business</span>
                </li>
                <li>5 GB of space</li>
                <li>Support at $10/hour</li>
                <li>Full cloud access</li>                         
                <li class="plan-btn"><button class="btn btn-round btn-primary">Choose plan</button></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 cool-md-4 col-sm-12">
        <div class="card">
            <ul class="pricing body">
                <li class="plan-img"><img class="img-fluid rounded-circle" src="../assets/images/plan-3.svg" alt="" /></li>
                <li class="price">
                    <h3><span>$</span> 299 <small>/ mo</small></h3>
                    <span>Enterprise</span>
                </li>
                <li>15 GB of space</li>
                <li>Support at $5/hour</li>
                <li>Full cloud access</li>                         
                <li class="plan-btn"><button class="btn btn-round btn-outline-secondary">Choose plan</button></li>
            </ul>
        </div>
    </div>
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop