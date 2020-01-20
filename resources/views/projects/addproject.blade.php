@extends('layout.master')
@section('parentPageTitle', 'Project')
@section('title', 'Project Add')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Project Name *">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <select class="form-control show-tick">
                                <option>Select Client Name</option>
                                <option>Core Technolab Pvt.</option>
                                <option>vPro Infoweb LLC.</option>
                                <option>M2 Solution Pvt. Ltd.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Start date *">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="End date *">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <select class="form-control show-tick">
                                <option>Select Priority</option>
                                <option>High</option>
                                <option>Medium</option>
                                <option>Low</option>
                            </select>
                        </div>
                    </div>                                
                </div>
                <div class="row clearfix">
                    <div class="col-md-3 col-sm-12">
                        <label>Select Rate in Doller</label>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Rate *">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label>Type</label>
                        <div class="form-group">
                            <select class="form-control show-tick">
                                <option>Select Type</option>
                                <option>Hourly</option>
                                <option>Fixed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label>Select Team Lead</label>
                        <div class="form-group">                                        
                            <select class="form-control show-tick">
                                <option>Select</option>
                                <option>Marshall Nichols</option>
                                <option>Susie Willis</option>
                                <option>Hossein Shams</option>
                                <option>Fidel Tonn</option>
                                <option>Frank Camly</option>
                                <option>Debra Stewart</option>
                                <option>Tim Hank</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label>Selet Team</label>
                        <div class="form-group">                                        
                            <select id="multiselect3-all" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="multiselect-all">Select All</option>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-12">
                        <input type="file" class="dropify">
                        <div class="mt-3"></div>
                    </div>                                
                    <div class="col-sm-12">
                        <div class="summernote">
                            Hello there,
                            <br/>
                            <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                            <p>Please try <b>paste some texts</b> here</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Create</button>
                            <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/vendor/dropify/js/dropify.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>
<script>
    $('#multiselect3-all').multiselect({
        includeSelectAllOption: true,
    });
</script>
@stop