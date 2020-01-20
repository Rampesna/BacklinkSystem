@extends('layout.master')
@section('parentPageTitle', 'HR ')
@section('title', 'Departments')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <ul class="nav nav-tabs2">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#e_departments">Departments</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#e_add">Add</a></li>                
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="e_add">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Departments Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Departments Head">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">                                    
                                    <input type="number" class="form-control" placeholder="No of Employee">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary">ADD</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane show active" id="e_departments">
                    <div class="table-responsive">
                        <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Department Name</th>
                                    <th>Department Head</th>
                                    <th>Total Employee</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td><div class="font-15">Web Development</div></td>
                                    <td>John Smith</td>
                                    <td>102</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td><div class="font-15">Marketing</div></td>
                                    <td>Maryam Amiri</td>
                                    <td>13</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td><div class="font-15">App Development</div></td>
                                    <td>Frank Camly</td>
                                    <td>21</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td><div class="font-15">Support</div></td>
                                    <td>Gary Camara</td>
                                    <td>84</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td><div class="font-15">Accounts</div></td>
                                    <td>Fidel Tonn</td>
                                    <td>11</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td><div class="font-15">PHP Open Source</div></td>
                                    <td>Maryam Amiri</td>
                                    <td>37</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td><div class="font-15">Design and Printing</div></td>
                                    <td>Maryam Amiri</td>
                                    <td>17</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></button>
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
<style>
.dataTables_length{display: none;}
</style>
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/dialogs.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<script>
    $('.dataTable').dataTable({searching: false});
</script>
@stop