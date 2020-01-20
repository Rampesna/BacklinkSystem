@extends('layout.master')
@section('parentPageTitle', 'Project')
@section('title', 'Todo List')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover table-custom spacing5">
                    <thead>
                        <tr>
                            <th><a href="javascript:void(0);" class="btn btn-info btn-sm">Add New</a></th>
                            <th class="w60 text-right">Due</th>
                            <th class="w100">Priority</th>
                            <th class="w60"><i class="icon-user"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked="">
                                    <span>Product Event at New York</span>
                                </label>
                            </td>
                            <td class="text-right">Feb 12-2019</td>
                            <td><span class="badge badge-danger ml-0 mr-0">HIGH</span></td>
                            <td>
                                <div class="avtar-pic w30 bg-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>SS</span></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Product Event for new product</span>
                                </label>
                            </td>
                            <td class="text-right">Feb 18-2019</td>
                            <td><span class="badge badge-warning ml-0 mr-0">MED</span></td>
                            <td>
                                <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w30 rounded" data-original-title="Avatar Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked="">
                                    <span>Meeting with Team</span>
                                </label>
                            </td>
                            <td class="text-right">March 02-2019</td>
                            <td><span class="badge badge-success ml-0 mr-0">High</span></td>
                            <td>
                                <div class="avtar-pic w30 bg-indigo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>JK</span></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked="">
                                    <span>Product Event for new product</span>
                                </label>
                            </td>
                            <td class="text-right">March 20-2019</td>
                            <td><span class="badge badge-warning ml-0 mr-0">MED</span></td>
                            <td>
                                <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w30 rounded" data-original-title="Avatar Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Product Event for new product</span>
                                </label>
                            </td>
                            <td class="text-right">March 28-2019</td>
                            <td><span class="badge badge-success ml-0 mr-0">LOW</span></td>
                            <td>
                                <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w30 rounded" data-original-title="Avatar Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Campaign performance tracking</span>
                                </label>
                            </td>
                            <td class="text-right">Apr 1</td>
                            <td><span class="badge badge-danger ml-0 mr-0">HIGH</span></td>
                            <td>
                                <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w30 rounded" data-original-title="Avatar Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked="">
                                    <span>Campaign Launch!</span>
                                </label>
                            </td>
                            <td class="text-right">May 08</td>
                            <td><span class="badge badge-warning ml-0 mr-0">MED</span></td>
                            <td>
                                <div class="avtar-pic w30 bg-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>SP</span></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop