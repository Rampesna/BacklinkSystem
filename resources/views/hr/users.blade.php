@extends('layout.master')
@section('parentPageTitle', 'HR ')
@section('title', 'Users')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Users">Users</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addUser">Add User</a></li>        
            </ul>
            <div class="tab-content mt-0">
                <div class="tab-pane show active" id="Users">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr>
                                    <th class="w60">Name</th>
                                    <th></th>
                                    <th></th>
                                    <th>Created Date</th>
                                    <th>Role</th>
                                    <th class="w100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="width45">
                                        <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0">Marshall Nichols</h6>
                                        <span>marshall-n@gmail.com</span>
                                    </td>
                                    <td><span class="badge badge-danger">Super Admin</span></td>
                                    <td>24 Jun, 2015</td>
                                    <td>CEO and Founder</td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <h6 class="mb-0">Susie Willis</h6>
                                        <span>sussie-w@gmail.com</span>
                                    </td>
                                    <td><span class="badge badge-info">Admin</span></td>
                                    <td>28 Jun, 2015</td>
                                    <td>Team Lead</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <h6 class="mb-0">Debra Stewart</h6>
                                        <span>debra@gmail.com</span>
                                    </td>
                                    <td><span class="badge badge-info">Admin</span></td>
                                    <td>21 July, 2015</td>
                                    <td>Team Lead</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                    </td>
                                    <td>
                                        <h6 class="mb-0">Erin Gonzales</h6>
                                        <span>Erinonzales@gmail.com</span>
                                    </td>
                                    <td><span class="badge badge-default">Employee</span></td>
                                    <td>21 July, 2015</td>
                                    <td>Web Developer</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avtar-pic w35 bg-blue" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0">Ava Alexander</h6>
                                        <span>alexander@gmail.com</span>
                                    </td>
                                    <td><span class="badge badge-success">HR Admin</span></td>
                                    <td>21 July, 2015</td>
                                    <td>HR</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>                
                    </div>
                </div>
                <div class="tab-pane" id="addUser">
                    <div class="body mt-2">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email ID *">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile No">
                                </div>
                            </div>                            

                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Employee ID *">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Username *">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <option>Select Role Type</option>
                                        <option>Super Admin</option>
                                        <option>Admin</option>
                                        <option>Employee</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <h6>Module Permission</h6>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Read</th>
                                                <th>Write</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Super Admin</td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                        <span></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Admin</td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                        <span></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Employee</td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                        <span></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HR Admin</td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="fancy-checkbox">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                        <span></span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-primary">Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}">

@stop

@section('page-script')
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/dialogs.js') }}"></script>
@stop