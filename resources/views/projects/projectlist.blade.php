@extends('layout.master')
@section('parentPageTitle', 'Project')
@section('title', 'Project List')


@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Owner">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Milestone">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Status">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Priority">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-block" title="">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover table-custom spacing8">
                <thead>
                    <tr>
                        <th>Owner</th>
                        <th>Milestone</th>                                    
                        <th>Status</th>
                        <th class="w100">Work</th>
                        <th class="w100">Duration</th>
                        <th>Priority</th>
                        <th class="w200">Task</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../assets/images/xs/avatar1.jpg" alt="Avatar" class="w30 rounded mr-2"> <span>Isidore Dilao</span></td>
                        <td><h6 class="mb-0">Account receivable</h6></td>
                        <td><span class="badge badge-danger">Issue Found</span></td>
                        <td><span>30:00</span></td>
                        <td>30:0 hrs</td>
                        <td><span class="text-warning">Medium</span></td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="74" aria-valuenow="74" style="width: 0%;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/images/xs/avatar2.jpg" alt="Avatar" class="w30 rounded mr-2"> <span>Maricel Villalon</span></td>
                        <td><h6 class="mb-0">Account receivable</h6></td>
                        <td><span class="badge badge-primary">Open</span></td>
                        <td><span>68:00</span></td>
                        <td>105:0 hrs</td>
                        <td><span class="text-danger">High</span></td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="23" aria-valuenow="23" style="width: 0%;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/images/xs/avatar3.jpg" alt="Avatar" class="w30 rounded mr-2"> <span>Michelle Schultz</span></td>
                        <td><h6 class="mb-0">Approval site</h6></td>
                        <td><span class="badge badge-primary">Open</span></td>
                        <td><span>74:00</span></td>
                        <td>89:0 hrs</td>
                        <td><span>None</span></td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="55" aria-valuenow="55" style="width: 0%;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/images/xs/avatar4.jpg" alt="Avatar" class="w30 rounded mr-2"> <span>Jason Porter</span></td>
                        <td><h6 class="mb-0">Final touch up</h6></td>
                        <td><span class="badge badge-info">Issue Level 1</span></td>
                        <td><span>30:00</span></td>
                        <td>30:0 hrs</td>
                        <td><span>None</span></td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="23" aria-valuenow="23" style="width: 0%;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/images/xs/avatar5.jpg" alt="Avatar" class="w30 rounded mr-2"> <span>Annelyn Mercado</span></td>
                        <td><h6 class="mb-0">Account receivable</h6></td>
                        <td><span class="badge badge-danger">Issue Found</span></td>
                        <td><span>30:00</span></td>
                        <td>30:0 hrs</td>
                        <td><span>None</span></td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="31" aria-valuenow="31" style="width: 0%;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/images/xs/avatar6.jpg" alt="Avatar" class="w30 rounded mr-2"> <span>Denise Alvarado</span></td>
                        <td><h6 class="mb-0">Basement slab preparation</h6></td>
                        <td><span class="badge badge-primary">Open</span></td>
                        <td><span>88:00</span></td>
                        <td>88:0 hrs</td>
                        <td><span>None</span></td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="89" aria-valuenow="89" style="width: 0%;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/images/xs/avatar7.jpg" alt="Avatar" class="w30 rounded mr-2"> <span>Scott Ortega</span></td>
                        <td><h6 class="mb-0">Account receivable</h6></td>
                        <td><span class="badge badge-warning">Issue Level 2</span></td>
                        <td><span>56:00</span></td>
                        <td>125:0 hrs</td>
                        <td><span class="text-warning">Medium</span></td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="23" aria-valuenow="23" style="width: 0%;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../assets/images/xs/avatar8.jpg" alt="Avatar" class="w30 rounded mr-2"> <span>Terry Carter</span></td>
                        <td><h6 class="mb-0">Account receivable</h6></td>
                        <td><span class="badge badge-danger">Issue Found</span></td>
                        <td><span>30:00</span></td>
                        <td>30:0 hrs</td>
                        <td><span>None</span></td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="23" aria-valuenow="23" style="width: 0%;"></div>
                            </div>
                        </td>
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