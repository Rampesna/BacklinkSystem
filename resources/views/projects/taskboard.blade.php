@extends('layout.master')
@section('parentPageTitle', 'Project ')
@section('title', 'Taskboard')


@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card text-white bg-info">
            <div class="card-header">Planned <span class="float-right">02</span></div>
            <div class="card-body taskboard planned_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Themeforest update</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 18 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 5</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 11</a></li>
                                    <li class="ml-3 bd-highlight">
                                        <ul class="list-unstyled sm team-info margin-0">
                                            <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="2">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Sites to review</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 28 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 2</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 8</a></li>
                                </ul>
                            </div>
                        </li>                                   
                    </ol>
                </div>
                <button class="btn btn-primary btn-block" type="button">ADD NEW</button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card text-white bg-orange">
            <div class="card-header">In progress <span class="float-right">04</span></div>
            <div class="card-body taskboard progress_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="2">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Sites to review</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 28 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 2</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 8</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Client Followup</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>It is a long established fact that a reader.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 05 Feb</span></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Client Followup</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>It is a long established fact that a reader.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 05 Feb</span></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="2">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Sites to review</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 28 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 2</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 8</a></li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                </div>
                <button class="btn btn-primary btn-block" type="button">ADD NEW</button>  
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card text-white bg-green">
            <div class="card-header">Complete <span class="float-right">03</span></div>
            <div class="card-body taskboard completed_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Themeforest update</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 18 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 5</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 11</a></li>
                                    <li class="ml-3 bd-highlight">
                                        <ul class="list-unstyled sm team-info margin-0">
                                            <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="2">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Sites to review</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 28 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 2</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 8</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Client Followup</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>It is a long established fact that a reader.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 05 Feb</span></li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                </div>
                <button class="btn btn-primary btn-block" type="button">ADD NEW</button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card text-white bg-red">
            <div class="card-header">In Complete <span class="float-right">02</span></div>
            <div class="card-body taskboard incompleted_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Themeforest update</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 18 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 5</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 11</a></li>
                                    <li class="ml-3 bd-highlight">
                                        <ul class="list-unstyled sm team-info margin-0">
                                            <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div>Client Followup</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>It is a long established fact that a reader.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-clock-o"></i> 05 Feb</span></li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                </div>
                <button class="btn btn-primary btn-block" type="button">ADD NEW</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/nestable/jquery-nestable.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/nestable/jquery.nestable.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/sortable-nestable.js') }}"></script>
@stop