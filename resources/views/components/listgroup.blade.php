@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'List Group')


@section('content')
<div class="row clealfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Basic example</h2>
            </div>
            <div class="body">
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Active items</h2>
            </div>
            <div class="body">
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item active">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Disabled items</h2>
            </div>
            <div class="body">
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item disabled">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Links and buttons</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <h6>With Anchor</h6>
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action active">
                                Cras justo odio
                            </a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action">Morbi leo risus</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action disabled">Porta ac consectetur ac</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action">Vestibulum at eros</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h6>With button</h6>
                            <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active">
                            Cras justo odio
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item list-group-item-action disabled">Morbi leo risus</button>
                            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item list-group-item-action">Vestibulum at eros</button>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Flush example</h2>
            </div>
            <div class="body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>With badges</h2>
            </div>
            <div class="body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio<span class="badge badge-info">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in<span class="badge badge-primary">2</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus<span class="badge badge-warning">1</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio<span class="badge badge-danger">14</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in<span class="badge badge-success">2</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Custom content</h2>
            </div>
            <div class="body">
                <div class="list-group">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                </div>
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