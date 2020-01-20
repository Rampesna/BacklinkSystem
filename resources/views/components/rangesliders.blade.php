@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Range Sliders')


@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>Start without params</b>
                    <input type="text" id="range_01" value="" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>Set min value, max value and start point</b>
                    <input type="text" id="range_02" value="" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>Set type to double and specify range, also showing grid and adding prefix "$"</b>
                    <input type="text" id="range_03" value="" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>Set up range with negative values</b>
                    <input type="text" id="range_04" value="" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>Using step 250</b>
                    <input type="text" id="range_05" value="" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>Set up range with fractional values, using fractional step</b>
                    <input type="text" id="range_06" value="" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>Set up you own numbers</b>
                    <input type="text" id="range_07" value="" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>Using any strings as your values</b>
                    <input type="text" id="range_08" value="" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>One more example with strings</b>
                    <input type="text" id="range_09" value="" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="irs-demo"><b>No prettify. Big numbers are ugly and unreadable</b>
                    <input type="text" id="range_10" value="" />
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/rangeslider/css/ion.rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/rangeslider/css/ion.rangeSlider.skinModern.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/rangeslider/js/ion.rangeSlider.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/range-sliders.js') }}"></script>
@stop