@extends('layout.master')
@section('parentPageTitle', 'Form ')
@section('title', 'Advanced Elements')


@section('content')
<!-- Color Pickers -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Color Pickers <small>Taken from <a href="https://github.com/mjolnic/bootstrap-colorpicker/" target="_blank">github.com/mjolnic/bootstrap-colorpicker</a></small></h2>                            
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-6"><b>HEX CODE</b>
                        <div class="input-group colorpicker">                                   
                            <input type="text" class="form-control" value="#00AABB">
                            <div class="input-group-append">
                                <span class="input-group-text"><span class="input-group-addon"><i></i></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"><b>RGB(A) CODE</b>
                        <div class="input-group colorpicker">
                            <input type="text" class="form-control" value="rgba(0,0,0,0.7)">
                            <div class="input-group-append">
                                <span class="input-group-text"><span class="input-group-addon"><i></i></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- datepicker -->
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Date Picker</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <label>Default</label>
                        <div class="input-group mb-3">
                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control">
                        </div>
                        <div>
                            <label>Custom Format (dd/mm/yyyy)</label>
                            <div class="input-group mb-3">                                        
                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
                            </div>
                        </div>
                        <div>
                            <label>Range</label>                                    
                            <div class="input-daterange input-group" data-provide="datepicker">
                                <input type="text" class="input-sm form-control" name="start">
                                <span class="input-group-addon range-to">to</span>
                                <input type="text" class="input-sm form-control" name="end">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label>Inline</label>
                        <div class="inline-datepicker"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Masked Input -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Masked Input with icons <small>Taken from <a href="https://github.com/RobinHerbots/jquery.inputmask" target="_blank">github.com/RobinHerbots/jquery.inputmask</a></small></h2>
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
                <div class="demo-masked-input">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6">
                            <b>Date</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                                </div>
                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Time (24 hour)</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-clock"></i></span>
                                </div>
                                <input type="text" class="form-control time24" placeholder="Ex: 23:59">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Time (12 hour)</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-clock"></i></span>
                                </div>
                                <input type="text" class="form-control time12" placeholder="Ex: 11:59 pm">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Date Time</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Mobile Phone Number</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-mobile-phone"></i></span>
                                </div>
                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Phone Number</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control phone-number" placeholder="Ex: +00 (000) 000-00-00">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Money (Dollar)</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                </div>
                                <input type="text" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                            </div>
                        </div>                               
                        <div class="col-lg-4 col-md-6">
                            <b>IP Address</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-desktop"></i></span>
                                </div>
                                <input type="text" class="form-control ip" placeholder="Ex: 255.255.255.255">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Credit Card</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                </div>
                                <input type="text" class="form-control credit-card" placeholder="Ex: 0000 0000 0000 0000">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Email Address</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                </div>
                                <input type="text" class="form-control email" placeholder="Ex: example@example.com">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <b>Serial Key</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control key" placeholder="Ex: XXX0-XXXX-XX00-0XXX">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Masked Text Inputs</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" id="phone" class="form-control">
                            <span class="help-block">(999) 999-9999</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Phone + Ext</label>
                            <input type="text" id="phone-ex" class="form-control">
                            <span class="help-block">(999) 999-9999? x99999</span>
                        </div>        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="tax-id" class="control-label">Tax ID</label>
                            <input type="text" id="tax-id" class="form-control">
                            <span class="help-block">99-9999999</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="ssn" class="control-label">SSN</label>
                            <input type="text" id="ssn" class="form-control">
                            <span class="help-block">999-99-9999</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="product-key" class="control-label">Product Key</label>
                            <input type="text" id="product-key" class="form-control">
                            <span class="help-block">a*-999-a999</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Multi Select -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Multi Select <small>Taken from <a href="https://github.com/lou/multi-select/" target="_blank">github.com/lou/multi-select</a></small></h2>
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
                <select id="optgroup" class="ms" multiple="multiple">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Multiselect</h2>
            </div>
            <div class="body demo-card">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <label>Default</label>
                        <div class="multiselect_div">
                            <select id="multiselect1" name="multiselect1[]" class="multiselect" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <label>"Select All" Option Enabled</label>
                        <div class="multiselect_div">
                            <select id="multiselect3-all" name="multiselect3[]" class="multiselect multiselect-custom" multiple="multiple">
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
                    <div class="col-lg-4 col-md-12">
                        <label>Options Group</label>
                        <div class="multiselect_div">
                            <select id="multiselect5" name="multiselect5" class="multiselect-custom" multiple="multiple">
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="discrete">Discrete Mathematics</option>
                                    <option value="numerical">Numerical Analysis</option>
                                    <option value="probability">Probability Theory</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="automata">Automata Theory</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <label>Smaller Size</label>
                        <div class="multiselect_div">
                            <select id="multiselect-size" name="multiselect7[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <label>Custom Checkbox</label>
                        <div class="multiselect_div">
                            <select id="multiselect2" name="multiselect2[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <label>Single Selection</label>
                        <div class="multiselect_div">
                            <select id="single-selection" name="single_selection" class="multiselect multiselect-custom">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <label>Filter Enabled</label>
                        <div class="multiselect_div">
                            <select id="multiselect4-filter" name="multiselect4[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="bootstrap">Bootstrap</option>
                                <option value="bootstrap-marketplace">Bootstrap Marketplace</option>
                                <option value="bootstrap-theme">Bootstrap Theme</option>
                                <option value="html">HTML</option>
                                <option value="html-template">HTML Template</option>
                                <option value="wp-marketplace">WordPress Marketplace</option>
                                <option value="wp-plugin">WordPress Plugin</option>
                                <option value="wp-theme">WordPress Theme</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <label>Disabled Options</label>
                        <div class="multiselect_div">
                            <select id="multiselect6" name="multiselect6[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms" disabled="disabled">Mushrooms</option>
                                <option value="pepperoni" disabled="disabled">Pepperoni</option>
                                <option value="onions" disabled="disabled">Onions</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <label>Link (btn-link)</label>
                        <div class="multiselect_div">
                            <select id="multiselect-link" name="multiselect8[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <label>Custom Button Class (btn-primary)</label>
                        <div class="multiselect_div">
                            <select id="multiselect-color" name="multiselect9[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <label>Custom Button Class (btn-success)</label>
                        <div class="multiselect_div">
                            <select id="multiselect-color2" name="multiselect10[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tags Input -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Tags Input <small>Taken from <a href="https://github.com/bootstrap-tagsinput/bootstrap-tagsinput" target="_blank">github.com/bootstrap-tagsinput/bootstrap-tagsinput</a></small></h2>
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
                <div class="input-group demo-tagsinput-area">
                    <input type="text" class="form-control" data-role="tagsinput" value="Washington,Beijing,Cairo">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Input Slider -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Input Slider <small>Taken from <a href="http://refreshless.com/nouislider" target="_blank">refreshless.com/nouislider</a> & <a href="http://materializecss.com" target="_blank">materializecss.com</a></small></h2>
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
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <p><b>Basic Example</b></p>
                        <div id="nouislider_basic_example"></div>
                        <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p><b>Range Example</b></p>
                        <div id="nouislider_range_example"></div>
                        <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
<style>
    .demo-card label{ display: block; position: relative;}
    .demo-card .col-lg-4{ margin-bottom: 30px;}
</style>
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script><!-- Bootstrap Colorpicker Js --> 
<script src="{{ asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script><!-- Input Mask Plugin Js --> 
<script src="{{ asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script><!-- Multi Select Plugin Js -->
<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script><!-- Bootstrap Tags Input Plugin Js --> 
<script src="{{ asset('assets/vendor/nouislider/nouislider.js') }}"></script><!-- noUISlider Plugin Js -->

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
@stop