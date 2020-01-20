@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Hospital Management')


@section('content')
<div class="row clearfix">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <h6><i class="fa fa-hospital-o"></i> Total Beds</h6>
                <div class="card-value text-danger float-left mr-3 pr-2 border-right">200</div>
                <div class="font-12">Delux Room <span class="float-right">55</span></div>
                <div class="font-12">General Ward <span class="float-right">105</span></div>
                <div class="font-12">VIP Room <span class="float-right">40</span></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <h6><i class="fa fa-users"></i> Total Patients</h6>
                <div class="card-value text-info float-left mr-3 pr-2 border-right">150</div>
                <div class="font-12">Brain Tumor <span class="float-right">35</span></div>
                <div class="font-12">Viral Infection <span class="float-right">105</span></div>
                <div class="font-12">Cancer <span class="float-right">10</span></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <h6><i class="fa fa-hospital-o"></i> Total Beds</h6>
                <div class="card-value text-green float-left mr-3 pr-2 border-right">175</div>
                <div class="font-12">Delux Room <span class="float-right">55</span></div>
                <div class="font-12">General Ward <span class="float-right">105</span></div>
                <div class="font-12">VIP Room <span class="float-right">40</span></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <h6><i class="fa fa-hospital-o"></i> Total Beds</h6>
                <div class="card-value text-orange float-left mr-3 pr-2 border-right">135</div>
                <div class="font-12">Delux Room <span class="float-right">55</span></div>
                <div class="font-12">General Ward <span class="float-right">105</span></div>
                <div class="font-12">VIP Room <span class="float-right">40</span></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Admitted Patient</h3>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="input-group mb-3">
                            <input data-provide="datepicker" data-date-autoclose="true" placeholder="From Date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">                                    
                        <div class="input-group mb-3">
                            <input data-provide="datepicker" data-date-autoclose="true" placeholder="To Date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <button class="btn btn-info btn-block" type="button">Search</button>
                    </div>
                </div>
                <div id="admitted-patient" class="mt-4" style="height: 300px"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Patient Discharged & Readmitted</h2>
            </div>
            <div class="body">
                <div id="chart-bar-rotated" style="height: 375px"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>By Gender</h2>
            </div>
            <div class="body ribbon">
                <div class="ribbon-box cyan">2019</div>
                <div class="d-flex bd-highlight mb-3 text-center">
                    <div class="flex-fill bd-highlight">
                        <label class="mb-0 text-muted">Male</label>
                        <h5>6,000</h5>
                    </div>
                    <div class="flex-fill bd-highlight">
                        <label class="mb-0 text-muted">Female</label>
                        <h5>4,000</h5>
                    </div>
                </div>
                <div id="chart-donut" style="height: 300px"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Patients by Division</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-custom2 table-hover">
                    <thead>
                        <tr>
                            <th colspan="3">Division</th>
                            <th colspan="2">Activity</th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Male</th>
                            <th>Female</th>
                            <th>InPatient</th>
                            <th>OutPatient</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span>Surgery</span></td>
                            <td><span>25</span></td>
                            <td><span>11</span></td>
                            <td>2,025 <span class="text-green">8.5%</span></td>
                            <td>1,250 <span class="text-red">13.25%</span></td>
                        </tr>
                        <tr>
                            <td><span>Gynaecology</span></td>
                            <td><span>43</span></td>
                            <td><span>29</span></td>
                            <td>521 <span class="text-green">18.3%</span></td>
                            <td>842 <span class="text-red">23.4%</span></td>
                        </tr>
                        <tr>
                            <td><span>Dermatology</span></td>
                            <td><span>89</span></td>
                            <td><span>56</span></td>
                            <td>2,028 <span class="text-red">19.7%</span></td>
                            <td>1,800 <span class="text-red">13.2%</span></td>
                        </tr>
                        <tr>
                            <td><span>Neurology</span></td>
                            <td><span>15</span></td>
                            <td><span>35</span></td>
                            <td>1,801 <span class="text-green">8.4%</span></td>
                            <td>1,251 <span class="text-red">10.9%</span></td>
                        </tr>
                        <tr>
                            <td><span>Oncology</span></td>
                            <td><span>61</span></td>
                            <td><span>21</span></td>
                            <td>2,714 <span class="text-green">8.7%</span></td>
                            <td>890 <span class="text-green">23.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>Orthopaedics</span></td>
                            <td><span>85</span></td>
                            <td><span>23</span></td>
                            <td>1,205 <span class="text-green">8.5%</span></td>
                            <td>523 <span class="text-green">13.8%</span></td>
                        </tr>
                        <tr>
                            <td><span>Cardiology</span></td>
                            <td><span>38</span></td>
                            <td><span>18</span></td>
                            <td>3,890 <span class="text-green">8.9%</span></td>
                            <td>872 <span class="text-red">17.4%</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index8.js') }}"></script>
@stop