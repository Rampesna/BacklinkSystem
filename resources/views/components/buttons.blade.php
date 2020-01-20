@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Buttons UI')


@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter mb-0">
                        <thead>
                            <tr>
                                <th class="w-15">Button</th>
                                <th>class=""</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button class="btn btn-default btn-block" type="button">Default</button></td>
                                <td><code>btn btn-default</code></td>
                                <td>Standard gray button with gradient</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-primary btn-block" type="button">Primary</button></td>
                                <td><code>btn btn-primary</code></td>
                                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-info btn-block" type="button">Info</button></td>
                                <td><code>btn btn-info</code></td>
                                <td>Used as an alternative to the default styles</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-success btn-block" type="button">Success</button></td>
                                <td><code>btn btn-success</code></td>
                                <td>Indicates a successful or positive action</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-warning btn-block" type="button">Warning</button></td>
                                <td><code>btn btn-warning</code></td>
                                <td>Indicates caution should be taken with this action</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-danger btn-block" type="button">Danger</button></td>
                                <td><code>btn btn-danger</code></td>
                                <td>Indicates a dangerous or potentially negative action</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-link btn-block" type="button">Link</button></td>
                                <td><code>btn btn-link</code></td>
                                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter mb-0">
                        <thead>
                            <tr>
                                <th class="w-15">Button</th>
                                <th>class=""</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button class="btn btn-default btn-block btn-round" type="button">Default</button></td>
                                <td><code>btn btn-default btn-round</code></td>
                                <td>Standard gray button with gradient</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-primary btn-block btn-round" type="button">Primary</button></td>
                                <td><code>btn btn-primary btn-round</code></td>
                                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-info btn-block btn-round" type="button">Info</button></td>
                                <td><code>btn btn-info btn-round</code></td>
                                <td>Used as an alternative to the default styles</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-success btn-block btn-round" type="button">Success</button></td>
                                <td><code>btn btn-success btn-round</code></td>
                                <td>Indicates a successful or positive action</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-warning btn-block btn-round" type="button">Warning</button></td>
                                <td><code>btn btn-warning btn-round</code></td>
                                <td>Indicates caution should be taken with this action</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-danger btn-block btn-round" type="button">Danger</button></td>
                                <td><code>btn btn-danger btn-round</code></td>
                                <td>Indicates a dangerous or potentially negative action</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-link btn-block btn-round" type="button">Link</button></td>
                                <td><code>btn btn-link btn-round</code></td>
                                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter mb-0">
                        <thead>
                            <tr>
                                <th class="w-15">Button</th>
                                <th>class=""</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button class="btn btn-outline-default btn-block" type="button">Default</button></td>
                                <td><code>btn btn-outline-default</code></td>
                                <td>Standard gray button with gradient</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-outline-primary btn-block" type="button">Primary</button></td>
                                <td><code>btn btn-outline-primary</code></td>
                                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-outline-info btn-block" type="button">Info</button></td>
                                <td><code>btn btn-outline-info</code></td>
                                <td>Used as an alternative to the default styles</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-outline-success btn-block" type="button">Success</button></td>
                                <td><code>btn btn-outline-success</code></td>
                                <td>Indicates a successful or positive action</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-outline-warning btn-block" type="button">Warning</button></td>
                                <td><code>btn btn-outline-warning</code></td>
                                <td>Indicates caution should be taken with this action</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-outline-danger btn-block" type="button">Danger</button></td>
                                <td><code>btn btn-outline-danger</code></td>
                                <td>Indicates a dangerous or potentially negative action</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <h6>Disabled State</h6>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-primary .disabled</code><br>
                        <button type="button" class="btn btn-primary disabled">Primary</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-default .disabled</code><br>
                        <button type="button" class="btn btn-default disabled">Secondary</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-success .disabled</code><br>
                        <button type="button" class="btn btn-success disabled">Success</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-danger .disabled</code><br>
                        <button type="button" class="btn btn-danger disabled">Danger</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-warning .disabled</code><br>
                        <button type="button" class="btn btn-warning disabled">Warning</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-info .disabled</code><br>
                        <button type="button" class="btn btn-info disabled">Info</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-light .disabled</code><br>
                        <button type="button" class="btn btn-light disabled">Light</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-dark .disabled</code><br>
                        <button type="button" class="btn btn-dark disabled">Dark</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-2">
                        <code>.btn .btn-link .disabled</code><br>
                        <button type="button" class="btn btn-link disabled">Link</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Button tags</h2>
            </div>
            <div class="body">
                <a class="btn btn-primary" href="javascript:void(0);" role="button">Link</a>
                <button class="btn btn-primary" type="submit">Button</button>
                <input class="btn btn-primary" type="button" value="Input">
                <input class="btn btn-primary" type="submit" value="Submit">
                <input class="btn btn-primary" type="reset" value="Reset">
            </div>
        </div>
    </div>                
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Button group</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <h6>Button toolbar</h6>
                        <div class="btn-toolbar mb-3">
                            <div class="btn-group mr-2">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>
                                <button type="button" class="btn btn-default">3</button>
                            </div>
                            <div class="btn-group mr-2">
                                <button type="button" class="btn btn-default">4</button>
                                <button type="button" class="btn btn-default">5</button>
                                <button type="button" class="btn btn-default">6</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-default">8</button>
                            </div>
                        </div>
                        <hr>
                        <div class="btn-toolbar mb-3">
                            <div class="btn-group mr-2">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">@</div>
                                </div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Nesting</h6>
                        <div class="btn-group mb-3">
                            <button type="button" class="btn btn-default">1</button>
                            <button type="button" class="btn btn-default">2</button>
                            
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Different Sizing</h6>
                        <div class="btn-group btn-group-lg">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                        <br><br>
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                    </div>
                </div>                            
            </div>
        </div>
        <div class="card">
            <div class="body">
                <button type="button" class="btn btn-default mb-2"><i class="fa fa-plus-square"></i> <span>Default</span></button>
                <button type="button" class="btn btn-primary mb-2"><i class="fa fa-refresh"></i> <span>Primary</span></button>
                <button type="button" class="btn btn-info mb-2"><i class="fa fa-info-circle"></i> <span>Info</span></button>
                <button type="button" class="btn btn-primary mb-2" disabled="disabled"><i class="fa fa-refresh fa-spin"></i> <span>Refreshing...</span></button>
                <button type="button" class="btn btn-success mb-2"><i class="fa fa-check-circle"></i> <span>Success</span></button>
                <button type="button" class="btn btn-warning mb-2"><i class="fa fa-warning"></i> <span>Warning</span></button>
                <button type="button" class="btn btn-danger mb-2"><i class="fa fa-trash-o"></i> <span>Danger</span></button>
                <button type="button" class="btn btn-primary mb-2" disabled="disabled"><i class="fa fa-spinner fa-spin"></i> <span>Loading...</span></button>
                <button type="button" class="btn btn-danger mb-2"><i class="fa fa-heart"></i> <span>Love</span></button>
                <button type="button" class="btn btn-danger mb-2"><span>Love</span> <i class="fa fa-heart"></i></button>
                <button type="button" class="btn btn-danger mb-2"><span class="sr-only">Love</span> <i class="fa fa-heart"></i></button>
                <button type="button" class="btn btn-default mb-2" title="Refresh"><span class="sr-only">Refresh</span> <i class="fa fa-refresh"></i></button>
                <button type="button" class="btn btn-default mb-2" title="Copy"><span class="sr-only">Copy</span> <i class="fa fa-files-o"></i></button>
                <button type="button" class="btn btn-success mb-2" title="Save"><span class="sr-only">Save</span> <i class="fa fa-save"></i></button>
                <button type="button" class="btn btn-danger mb-2" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
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