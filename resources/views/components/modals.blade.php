@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Modals Popups')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Modals</h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target="#exampleModal">modal with button</button>
                <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target="#exampleModalCenter">Vertically centered</button>

                <!-- larg modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="myLargeModalLabel">Large modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Woohoo, you're reading this text in a modal!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Small modal -->
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="mySmallModalLabel">Small modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Woohoo, you're reading this text in a modal!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal with btn -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Woohoo, you're reading this text in a modal!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-round btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-round btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vertically centered -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Cras mattis consectetur orbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-round btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-round btn-primary">Save changes</button>
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
                <h2>More Modals Example</h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target=".launch-pricing-modal">Launch Pricing modal</button>
                <button type="button" class="btn btn-round btn-light" data-toggle="modal" data-target=".bd-Users-modal-sm">Users Visitors modal</button>
                <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".new-project-modal">Setup New Project</button>
                <button type="button" class="btn btn-round btn-warning" data-toggle="modal" data-target=".feed-post-modal">Feed Post modal</button>
                <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target=".Form-Wizard-modal">Form Wizard modal</button>

                <!-- launch-pricing -->
                <div class="modal fade launch-pricing-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">                                            
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body pricing_page text-center pt-4 mb-4">
                                <h5>Small startup? Big company? We’ve got a plan.</h5>
                                <p class="mb-4">Pricing is based on two things: Number of opened projects, and the number of seats you want for your team. Plans start at $19/month.</p>
                                <div class="row clearfix">
                                    <div class="col-lg-4 cool-md-4 col-sm-12">
                                        <div class="card">
                                            <ul class="pricing body">
                                                <li class="price">
                                                    <h3><span>$</span> 99 <small>/ mo</small></h3>
                                                    <span>Freelance</span>
                                                </li>
                                                <li>1 GB of space</li>
                                                <li>Support at $25/hour</li>
                                                <li>Limited cloud access</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 cool-md-4 col-sm-12">
                                        <div class="card">
                                            <ul class="pricing body active">
                                                <li class="price">
                                                    <h3><span>$</span> 199 <small>/ mo</small></h3>
                                                    <span>Business</span>
                                                </li>
                                                <li>5 GB of space</li>
                                                <li>Support at $10/hour</li>
                                                <li>Full cloud access</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 cool-md-4 col-sm-12">
                                        <div class="card">
                                            <ul class="pricing body">
                                                <li class="price">
                                                    <h3><span>$</span> 299 <small>/ mo</small></h3>
                                                    <span>Enterprise</span>
                                                </li>
                                                <li>15 GB of space</li>
                                                <li>Support at $5/hour</li>
                                                <li>Full cloud access</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p>Have a larger team? <a href="javascript:void(0);">Contact us</a> for information about more enterprise options.</p>
                                        <button class="btn btn-round btn-success">Start your free trial</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Users Visitors -->
                <div class="modal fade bd-Users-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="mySmallModalLabel">Users Visitors</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row text-center">
                                    <div class="col-6 border-right pb-4 pt-4">
                                        <label class="mb-0">New Users</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue">2,025</h4>
                                    </div>
                                    <div class="col-6 pb-4 pt-4">
                                        <label class="mb-0">Return Visitors</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue">1,254</h4>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label class="d-block">New Users <span class="float-right">77%</span></label>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Return Visitors <span class="float-right">50%</span></label>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Engagement <span class="float-right">23%</span></label>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Setup New Project -->
                <div class="modal fade new-project-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Setup New Project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Project Name">
                                </div>
                                <input type="file" class="dropify">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-round btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-round btn-success">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- feed-post-modal -->
                <div class="modal fade feed-post-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="d-flex mb-3">
                                    <div class="icon bg-transparent">
                                        <img src="../assets/images/user-small.png" class="rounded mr-3 w40" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Louis Pierce</h6>
                                        <span>UI director</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                </div>
                                <div class="align-right">
                                    <button class="btn btn-link"><i class="icon-paper-clip text-muted"></i></button>
                                    <button class="btn btn-link"><i class="icon-camera text-muted"></i></button>
                                    <button class="btn btn-link"><i class="icon-pointer text-muted"></i></button>
                                    <button class="btn btn-round btn-warning" data-dismiss="modal">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- launch-pricing -->
                <div class="modal fade Form-Wizard-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Wizard modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pricing_page">
                                <div id="wizard_horizontal">
                                    <h2>First Step</h2>
                                    <section>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas
                                            arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac habitasse platea
                                            dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. Nam tellus
                                            dolor, tristique ac tempus nec, iaculis quis nisi. </p>
                                    </section>
                                    <h2>Second Step</h2>
                                    <section>
                                        <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                                            ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                                            tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                                            nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                                            a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                                            arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                                            velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                                            iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus. </p>
                                    </section>
                                    <h2>Third Step</h2>
                                    <section>
                                        <p> Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                                            condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                                            Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                            Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                            commodo lectus sollicitudin in auctor mauris venenatis. </p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-steps/jquery.steps.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-steps/jquery.steps.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/form-wizard.js') }}"></script>
@stop