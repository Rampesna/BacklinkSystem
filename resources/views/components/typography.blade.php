@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Typography')


@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Bootstrap Headings</h2>
            </div>
            <div class="body">
                <h1>H1. Heading</h1>
                <h2>H2. Heading</h2>
                <h3>H3. Heading</h3>
                <h4>H4. Heading</h4>
                <h5>H5. Heading</h5>
                <h6>H6. Heading</h6>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Emphasis</h2>
            </div>
            <div class="body">
                <p><small>This line of text is meant to be treated as fine print.</small> Ipsum, hic, iste, nihil dolor enim illum laborum <strong>rendered as bold text</strong> delectus beatae obcaecati voluptatum debitis molestias
                    nam? <em>rendered as italicized text</em>.</p>
                <p class="m-b-lg">Malorum gubergren mediocritatem in qui, indoctum torquatos ne per, virtute perfecto tincidunt ea quo. Consequatur expedita sit aspernatur fugit impedit nobis!</p>
                <p class="text-left">Left aligned text.</p>
                <p class="text-center">Center aligned text.</p>
                <p class="text-right">Right aligned text.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Unordered list</h2>
            </div>
            <div class="body">
                <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>
                        Nulla volutpat aliquam velit
                        <ul>
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                        </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Everything</h2>
            </div>
            <div class="body">
                <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit</li>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Text Style</h2>
            </div>
            <div class="body">
                <p class="text-muted"><code>.text-muted</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-primary"><code>.text-primary</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-success"><code>.text-success</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-info"><code>.text-info</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-warning"><code>.text-warning</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-danger"><code>.text-danger</code> Convey meaning through color with a handful of emphasis utility classes.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Other Style</h2>
            </div>
            <div class="body">
                <p>You can use the mark tag to
                    <mark>highlight</mark> text.</p>
                <p>
                    <del>This line of text is meant to be treated as deleted text.</del>
                </p>
                <p class="text-lowercase"><code>.text-lowercase</code> Lowercased text.</p>
                <p class="text-uppercase"><code class="text-lowercase">.text-uppercase</code> Uppercased text.</p>
                <p class="text-capitalize"><code class="text-lowercase">.text-capitalized</code> Capitalized text.</p>                            
                <p>Make a paragraph stand out by adding <code>.lead</code></p>
                <p class="lead">Objectively re-engineer maintainable total linkage after proactive intellectual capital. Dynamically evolve best-of-breed e-services for user-centric customer.</p>                            
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