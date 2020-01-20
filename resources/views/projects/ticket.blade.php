@extends('layout.master')
@section('parentPageTitle', 'Project')
@section('title', 'Ticket List')


@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body top_counter">
                <div class="icon bg-warning text-white"><i class="fa fa-ticket"></i> </div>
                <div class="content">
                    <span>Total Tickets</span>
                    <h5 class="number mb-0">251</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body top_counter">
                <div class="icon bg-info text-white"><i class="fa fa-tags"></i> </div>
                <div class="content">
                    <span>Responded</span>
                    <h5 class="number mb-0">62</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body top_counter">
                <div class="icon bg-success text-white"><i class="fa fa-thumbs-o-up"></i> </div>
                <div class="content">
                    <span>Resolve</span>
                    <h5 class="number mb-0">102</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body top_counter">
                <div class="icon bg-danger text-white"><i class="fa fa-thumbs-o-down"></i> </div>
                <div class="content">
                    <span>Pending</span>
                    <h5 class="number mb-0">32</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="id">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Priority">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Department">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Agent">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-block" title="">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-custom2 table-hover">
                <thead>
                    <tr>
                        <th colspan="5">Ticket Detail</th>
                        <th colspan="3">Activity</th>
                    </tr>
                    <tr>
                        <th class="w30">&nbsp;</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Priority</th>
                        <th>Department</th>
                        <th>Agent</th>
                        <th>Date</th>
                        <th>Activity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-5258</a></td>
                        <td><span>It is a long established fact that a reader</span></td>
                        <td><span class="badge badge-default">lower</span></td>
                        <td><span>Pre-Sales</span></td>
                        <td><span>Archie Cantones</span></td>
                        <td><span>6 hours ago</span></td>
                        <td>No reply yet</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-8793</a></td>
                        <td><span>Measures your Current Assets / Current</span></td>
                        <td><span class="badge badge-danger">High</span></td>
                        <td><span>Pre-Sales</span></td>
                        <td><span>Rose Orcullo</span></td>
                        <td><span>9 hours ago</span></td>
                        <td>2 reply</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-2500</a></td>
                        <td><span>There are many variations of passages</span></td>
                        <td><span class="badge badge-info">Medium</span></td>
                        <td><span>Pre-Sales</span></td>
                        <td><span>Charize Cericoz</span></td>
                        <td><span>10 hours ago</span></td>
                        <td>1 reply</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-9465</a></td>
                        <td><span>Measures your Current Assets / Current</span></td>
                        <td><span class="badge badge-default">lower</span></td>
                        <td><span>Payment</span></td>
                        <td><span>Billie Ko</span></td>
                        <td><span>23-01-2019</span></td>
                        <td>No reply yet</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-1515</a></td>
                        <td><span>Contrary to popular belief, Lorem Ipsum</span></td>
                        <td><span class="badge badge-info">Medium</span></td>
                        <td><span>Sales</span></td>
                        <td><span>Hamza Macasindil</span></td>
                        <td><span>22-01-2019</span></td>
                        <td>No reply yet</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-2589</a></td>
                        <td><span>It uses a dictionary of over 200 Latin</span></td>
                        <td><span class="badge badge-info">Medium</span></td>
                        <td><span>Technical</span></td>
                        <td><span>Dyanne Aceron</span></td>
                        <td><span>28-01-2019</span></td>
                        <td>5 reply</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-8793</a></td>
                        <td><span>Measures your Current Assets / Current</span></td>
                        <td><span class="badge badge-danger">High</span></td>
                        <td><span>Pre-Sales</span></td>
                        <td><span>Rose Orcullo</span></td>
                        <td><span>9 hours ago</span></td>
                        <td>2 reply</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-2500</a></td>
                        <td><span>There are many variations of passages</span></td>
                        <td><span class="badge badge-info">Medium</span></td>
                        <td><span>Pre-Sales</span></td>
                        <td><span>Charize Cericoz</span></td>
                        <td><span>10 hours ago</span></td>
                        <td>1 reply</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-9465</a></td>
                        <td><span>Measures your Current Assets / Current</span></td>
                        <td><span class="badge badge-default">lower</span></td>
                        <td><span>Payment</span></td>
                        <td><span>Billie Ko</span></td>
                        <td><span>23-01-2019</span></td>
                        <td>No reply yet</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fancy-checkbox margin-0">
                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                <span></span>
                            </label>
                        </td>
                        <td><a href="#">ASD-4569</a></td>
                        <td><span>The standard chunk of Lorem Ipsum used</span></td>
                        <td><span class="badge badge-danger">High</span></td>
                        <td><span>Technical</span></td>
                        <td><span>Dyanne Aceron</span></td>
                        <td><span>02-02-2019</span></td>
                        <td>3 reply</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop