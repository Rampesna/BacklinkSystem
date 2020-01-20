@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'colors')


@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Colors</h2>
            </div>
            <div class="body">
                <p class="text-primary">.text-primary</p>
                <p class="text-secondary">.text-secondary</p>
                <p class="text-success">.text-success</p>
                <p class="text-danger">.text-danger</p>
                <p class="text-warning">.text-warning</p>
                <p class="text-info">.text-info</p>
                <p class="text-light bg-dark">.text-light</p>
                <p class="text-dark">.text-dark</p>
                <p class="text-muted">.text-muted</p>
                <p class="text-white bg-dark">.text-white</p>
                <p class="text-black-50">.text-black-50</p>
                <p class="text-white-50 bg-dark">.text-white-50</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Contextual text Colors</h2>
            </div>
            <div class="body">
                <p>classes also work well on anchors with the provided hover and focus states. <strong>Note that the <code class="highlighter-rouge">.text-white</code> and <code class="highlighter-rouge">.text-muted</code> class has no link styling.</strong></p>
                <p><a href="javascript:void(0);" class="text-primary">Primary link</a></p>
                <p><a href="javascript:void(0);" class="text-secondary">Secondary link</a></p>
                <p><a href="javascript:void(0);" class="text-success">Success link</a></p>
                <p><a href="javascript:void(0);" class="text-danger">Danger link</a></p>
                <p><a href="javascript:void(0);" class="text-warning">Warning link</a></p>
                <p><a href="javascript:void(0);" class="text-info">Info link</a></p>
                <p><a href="javascript:void(0);" class="text-light bg-dark">Light link</a></p>
                <p><a href="javascript:void(0);" class="text-dark">Dark link</a></p>
                <p><a href="javascript:void(0);" class="text-muted">Muted link</a></p>
                <p><a href="javascript:void(0);" class="text-white bg-dark">White link</a></p>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Background color</h2>
            </div>
            <div class="body">
                <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes. Background utilities <strong>do not set <code class="highlighter-rouge">color</code></strong>, so in some cases you’ll want to use <code class="highlighter-rouge">.text-*</code> utilities.</p>
                <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
                <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
                <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
                <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
                <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
                <div class="p-3 mb-2 bg-info text-white">.bg-info</div>
                <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
                <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
                <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
                <div class="p-3 mb-2 bg-transparent text-dark">.bg-transparent</div>
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