@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Bootstrap UI')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Toggle Switch</h2>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    What is a toggle button in Microsoft Word?
                    <div class="float-right">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    What is toggle button in Android?
                    <div class="float-right">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    What is the purpose of a toggle switch?
                    <div class="float-right">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    What is meant by toggle key?
                    <div class="float-right">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>                
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Labels</h2>                        
            </div>
            <div class="body">                        
                <p>We restyled the default options for labels and we added the filled class, that can be used in any combination.</p>
                <span class="badge badge-default">Default</span>
                <span class="badge badge-primary">Primary</span>
                <span class="badge badge-success">Success</span>
                <span class="badge badge-info">Info</span>
                <span class="badge badge-warning">Warning</span>
                <span class="badge badge-danger">Danger</span>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Accordion</h2>
            </div>
            <div class="accordion" id="accordion">
                <div>
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-demo" aria-expanded="true" aria-controls="collapseOne">
                            Q: How to use SCSS variables to build custom color <span class="float-right badge  badge-primary">23</span>
                            </button>
                        </h5>
                    </div>                                
                    <div id="collapseOne-demo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo-demo" aria-expanded="false" aria-controls="collapseTwo">
                            Q: Four questions to ask about your DevOps strategy <span class="float-right badge  badge-success">8</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo-demo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree-demo" aria-expanded="false" aria-controls="collapseThree">
                        Q: A comparison of microservices and functional programming concepts <span class="float-right badge  badge-danger">13</span>
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree-demo" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Accordion with link</h2>
            </div>
            <div class="body">
                <p>
                    <a class="btn btn-primary btn-round" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Link with href
                    </a>
                    <button class="btn btn-primary btn-round" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Button with data-target
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>

            <div class="body">
                <div>
                    <h6>Multiple targets Accordion</h6>
                    <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                    </p>
                    <div class="row clearfix">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Accordion style two with backgorund</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <ul class="accordion2">
                            <li class="accordion-item is-active">
                                <h3 class="accordion-thumb"><span>Lorem ipsum</span></h3>
                                <p class="accordion-panel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Placeat, quibusdam! Voluptate nobis, beatae
                                    tempora praesentium, illum quis illo, maiores quod
                                    similique placeat, saepe mollitia dolor officiis
                                    aspernatur deleniti debitis commodi!
                                </p>
                            </li>
                            
                            <li class="accordion-item">
                                <h3 class="accordion-thumb"><span>Dolor sit amet</span></h3>
                                <p class="accordion-panel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Reprehenderit quos, accusamus! Enim labore totam
                                    dicta quibusdam? Eveniet quis asperiores reprehenderit
                                    eaque atque in iure voluptate, explicabo, placeat, id
                                    earum architecto!
                                </p>
                            </li>
                            
                            <li class="accordion-item">
                                <h3 class="accordion-thumb"><span>Consectetur adipisicing elit</span></h3>
                                <p class="accordion-panel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Reprehenderit quos, accusamus! Enim labore
                                    totam dicta quibusdam? Eveniet quis asperiores
                                    reprehenderit eaque atque in iure voluptate,
                                    explicabo, placeat, id earum architecto!
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="accordion2">
                            <li class="accordion-item bg-blue text-light is-active">
                                <h3 class="accordion-thumb"><span>Lorem ipsum</span></h3>
                                <p class="accordion-panel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Placeat, quibusdam! Voluptate nobis, beatae
                                    tempora praesentium, illum quis illo, maiores quod
                                    similique placeat, saepe mollitia dolor officiis
                                    aspernatur deleniti debitis commodi!
                                </p>
                            </li>
                            
                            <li class="accordion-item bg-pink text-light">
                                <h3 class="accordion-thumb"><span>Dolor sit amet</span></h3>
                                <p class="accordion-panel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Reprehenderit quos, accusamus! Enim labore totam
                                    dicta quibusdam? Eveniet quis asperiores reprehenderit
                                    eaque atque in iure voluptate, explicabo, placeat, id
                                    earum architecto!
                                </p>
                            </li>
                            
                            <li class="accordion-item bg-indigo text-light">
                                <h3 class="accordion-thumb"><span>Consectetur adipisicing elit</span></h3>
                                <p class="accordion-panel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Reprehenderit quos, accusamus! Enim labore
                                    totam dicta quibusdam? Eveniet quis asperiores
                                    reprehenderit eaque atque in iure voluptate,
                                    explicabo, placeat, id earum architecto!
                                </p>
                            </li>
                        </ul>
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
                <h2>Pagination</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-sm-12">
                        <h6>Default</h6>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h6>Working with icons</h6>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h6>Disabled and active states</h6>
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Tooltips</h2>
            </div>
            <div class="body">
                <div class="demo-button">
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on the right">Tooltip on the right</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on the left">Tooltip on the left</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on the top">Tooltip on the top</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on the bottom">Tooltip on the bottom</button>
                </div>
                <hr>
                <h6>Popovers</h6>
                <div class="demo-button">
                    <button type="button" class="btn btn-sm btn-default" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover on Click</button>
                    <button type="button" class="btn btn-sm btn-default" data-toggle="popover" data-trigger="hover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover on Hover</button>
                    <button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Popover on left</button>
                    <button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Popover on right</button>
                    <button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Popover on top</button>
                    <button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Popover on bottom</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Alert Messages with Link</h2>
            </div>
            <div class="body">
                <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                <div class="alert alert-secondary" role="alert">A simple secondary alert—check it out!</div>
                <div class="alert alert-success" role="alert">A simple success alert—check it out!</div>
                <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
                
                <div class="alert alert-warning" role="alert">
                A simple warning alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-info" role="alert">
                A simple info alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-light" role="alert">
                A simple light alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-dark" role="alert">
                A simple dark alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Alert Messages With Icon</h2>
            </div>
            <div class="body">
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-info-circle"></i> The system is running well
                </div>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-check-circle"></i> Your settings have been succesfully saved
                </div>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-warning"></i> Warning, check your permission settings
                </div>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-times-circle"></i> Your account has been suspended
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

<script>
    $(function() {
        // (Optional) Active an item if it has the class "is-active"	
        $(".accordion2 > .accordion-item.is-active").children(".accordion-panel").slideDown();
        
        $(".accordion2 > .accordion-item").click(function() {
            // Cancel the siblings
            $(this).siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
            // Toggle the item
            $(this).toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
        });
    });
</script>
@stop