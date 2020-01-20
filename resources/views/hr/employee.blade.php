@extends('layout.master')
@section('parentPageTitle', 'HR ')
@section('title', 'Employee')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <ul class="nav nav-tabs2">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#e_add">Add</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#e_list">All Employee</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#e_leave">Leave Request</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="e_add">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Employee ID">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email ID">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Start date *">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Role">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3 mb-5">
                                    <input type="file" class="dropify">
                                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Facebook">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Twitter">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Linkedin">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="instagram">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary">ADD</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="e_list">
                    <div class="table-responsive">
                        <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Employee ID</th>
                                    <th>Phone</th>
                                    <th>Join Date</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                                    </td>
                                    <td>
                                        <div class="font-15">Marshall Nichols</div>
                                        <span class="text-muted">marshall-n@gmail.com</span>
                                    </td>
                                    <td><span>LA-0215</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>24 Jun, 2015</td>
                                    <td>Web Designer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <div class="font-15">Susie Willis</div>
                                        <span class="text-muted">sussie-w@gmail.com</span>
                                    </td>
                                    <td><span>LA-0216</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>28 Jun, 2015</td>
                                    <td>Web Developer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                                    </td>
                                    <td>
                                        <div class="font-15">Debra Stewart</div>
                                        <span class="text-muted">debra@gmail.com</span>
                                    </td>
                                    <td><span>LA-0218</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>21 July, 2015</td>
                                    <td>Web Developer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <div class="font-15">Francisco Vasquez</div>
                                        <span class="text-muted">francisv@gmail.com</span>
                                    </td>
                                    <td><span>LA-0222</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>18 Jan, 2016</td>
                                    <td>Team Leader</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <div class="font-15">Jane Hunt</div>
                                        <span class="text-muted">jane-hunt@gmail.com</span>
                                    </td>
                                    <td><span>LA-0232</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>08 Mar, 2016</td>
                                    <td>Android Developer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <div class="font-15">Darryl Day</div>
                                        <span class="text-muted">darryl.day@gmail.com</span>
                                    </td>
                                    <td><span>LA-0233</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>13 Nov, 2016</td>
                                    <td>IOS Developer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <div class="avtar-pic w35 bg-blue" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                                    </td>
                                    <td>
                                        <div class="font-15">Marshall Nichols</div>
                                        <span class="text-muted">marshall-n@gmail.com</span>
                                    </td>
                                    <td><span>LA-0215</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>24 Jun, 2015</td>
                                    <td>Web Designer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <div class="avtar-pic w35 bg-indigo" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                                    </td>
                                    <td>
                                        <div class="font-15">Susie Willis</div>
                                        <span class="text-muted">sussie-w@gmail.com</span>
                                    </td>
                                    <td><span>LA-0216</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>28 Jun, 2015</td>
                                    <td>Web Developer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                        <img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <div class="font-15">Darryl Day</div>
                                        <span class="text-muted">darryl.day@gmail.com</span>
                                    </td>
                                    <td><span>LA-0233</span></td>
                                    <td><span>+ 264-625-2583</span></td>
                                    <td>13 Nov, 2016</td>
                                    <td>IOS Developer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="e_leave">
                    <div class="table-responsive">
                        <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Employee ID</th>
                                    <th>Leave Type</th>
                                    <th>Date</th>
                                    <th>Reason</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="width45">                                           
                                        <div class="avtar-pic w35 bg-cyan" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>OP</span></div>
                                    </td>
                                    <td>
                                        <div class="font-15">Marshall Nichols</div>                                            
                                    </td>
                                    <td><span>LA-8150</span></td>
                                    <td><span>Casual Leave</span></td>
                                    <td>24 July, 2019 to 26 July, 2019</td>
                                    <td>Going to Family Function</td>
                                    <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Approved"><i class="fa fa-check text-success"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td class="width45">                                           
                                        <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>GC</span></div>
                                    </td>
                                    <td>
                                        <div class="font-15">Gary Camara</div>                                            
                                    </td>
                                    <td><span>LA-8795</span></td>
                                    <td><span>Medical Leave</span></td>
                                    <td>20 July, 2019 to 26 July, 2019</td>
                                    <td>Going to Development</td>
                                    <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Approved"><i class="fa fa-check text-success"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width45">                                           
                                        <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <div class="font-15">Maryam Amiri</div>                                            
                                    </td>
                                    <td><span>LA-0258</span></td>
                                    <td><span>Casual Leave</span></td>
                                    <td>21 July, 2019 to 26 July, 2019</td>
                                    <td>Attend Birthday party</td>
                                    <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Approved"><i class="fa fa-check text-success"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width45">                                           
                                        <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <div class="font-15">Frank Camly</div>                                            
                                    </td>
                                    <td><span>LA-1515</span></td>
                                    <td><span>Casual Leave</span></td>
                                    <td>11 Aug, 2019 to 21 Aug, 2019</td>
                                    <td>Going to Holiday</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Approved"><i class="fa fa-check text-success"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
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
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
<style>
.dataTables_length{display: none;}
</style>

@stop

@section('page-script')
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/dropify/js/dropify.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/dialogs.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<script>
    $('.dataTable').dataTable({searching: false});
</script>
@stop