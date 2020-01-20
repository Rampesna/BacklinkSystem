@extends('layout.master')
@section('parentPageTitle', 'Project')
@section('title', 'Clients')


@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Clinet Name">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Project">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Search</a>
                        <a href="javascript:void(0);" class="btn btn-sm btn-success" title="">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card c_grid c_yellow">
            <div class="body text-center ribbon">
                <div class="ribbon-box green">New</div>
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">View Profile</button>
                <button class="btn btn-default btn-sm">Message</button>
                <div class="row text-center mt-4">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Project</label>
                        <h4 class="font-20">07</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Profit </label>
                        <h4 class="font-20">$2,510</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card c_grid c_pink">
            <div class="body text-center ribbon">
                <div class="ribbon-box indigo">India</div>
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar3.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Terry Carter</h6>
                <span>Michelle@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">View Profile</button>
                <button class="btn btn-default btn-sm">Message</button>
                <div class="row text-center mt-4">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Project</label>
                        <h4 class="font-20">14</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Profit</label>
                        <h4 class="font-20">$7,510</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card c_grid c_cyan">
            <div class="body text-center">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar4.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">View Profile</button>
                <button class="btn btn-default btn-sm">Message</button>
                <div class="row text-center mt-4">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Project</label>
                        <h4 class="font-20">08</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Profit</label>
                        <h4 class="font-20">$5,510</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card c_grid c_blue">
            <div class="body text-center">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar6.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">View Profile</button>
                <button class="btn btn-default btn-sm">Message</button>
                <div class="row text-center mt-4">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Project</label>
                        <h4 class="font-20">05</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Profit</label>
                        <h4 class="font-20">$1,071</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card c_grid c_red">
            <div class="body text-center ribbon">
                <div class="ribbon-box orange">Gold</div>
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar5.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">View Profile</button>
                <button class="btn btn-default btn-sm">Message</button>
                <div class="row text-center mt-4">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Project</label>
                        <h4 class="font-20">31</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Profit</label>
                        <h4 class="font-20">$45,510</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card c_grid c_green">
            <div class="body text-center">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Denise Alvarado</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">View Profile</button>
                <button class="btn btn-default btn-sm">Message</button>
                <div class="row text-center mt-4">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Project</label>
                        <h4 class="font-20">31</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Profit</label>
                        <h4 class="font-20">$45,510</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card c_grid c_indigo">
            <div class="body text-center ribbon">
                <div class="ribbon-box pink">USA</div>
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Jason Porter</h6>
                <span>Carol@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">View Profile</button>
                <button class="btn btn-default btn-sm">Message</button>
                <div class="row text-center mt-4">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Project</label>
                        <h4 class="font-20">22</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Profit</label>
                        <h4 class="font-20">$12,510</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card c_grid c_cyan">
            <div class="body text-center">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Terry Carter</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-flickr"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dropbox"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-apple"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">View Profile</button>
                <button class="btn btn-default btn-sm">Message</button>
                <div class="row text-center mt-4">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Project</label>
                        <h4 class="font-20">12</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Profit</label>
                        <h4 class="font-20">$1,840</h4>
                    </div>
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