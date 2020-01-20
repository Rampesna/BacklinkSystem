@extends('layout.master')
@section('parentPageTitle', 'Job ')
@section('title', 'Resumes')


@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label>Search</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label>Hourly Rate</label>
                        <div class="multiselect_div">
                            <select id="multiselect3-all" name="multiselect3[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="multiselect-all">All rates</option>
                                <option value="1">$0 - $50</option>
                                <option value="2">$50 - $100</option>
                                <option value="3">$100 - $200</option>
                                <option value="4">$200 - $500</option>
                                <option value="5">$500 +</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <label>Academic Degree</label>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected="">All degrees</option>
                                <option value="1">Associate degree</option>
                                <option value="2">Bachelor's degree</option>
                                <option value="3">Master's degree</option>
                                <option value="4">Doctoral degree</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <label>Order</label>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected="">Relevance</option>
                                <option value="1">Highest rate first</option>
                                <option value="2">Lowest rate first</option>
                                <option value="3">Highest degree first</option>
                                <option value="4">Lowest degree first</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <label>&nbsp;</label>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-block" title="">Filter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card c_grid c_yellow">
            <div class="body text-center p-4">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>Web Developer</span>
                <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#">Java</a></li>
                    <li><a class="p-3" target="_blank" href="#">CSS</a></li>
                    <li><a class="p-3" target="_blank" href="#">HTML</a></li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><i class="fa fa-dollar"></i> 55 / hour</div>
                    <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                </div>
            </div>                        
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card c_grid c_indigo">
            <div class="body text-center p-4">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Jason Porter</h6>
                <span>Carol@info.com</span>
                <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#">Creativity</a></li>
                    <li><a class="p-3" target="_blank" href="#">UIUX</a></li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><i class="fa fa-dollar"></i> 55 / hour</div>
                    <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card c_grid c_pink">
            <div class="body text-center p-4">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar3.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">David Wallace</h6>
                <span>Michelle@info.com</span>
                <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#">Swift</a></li>
                    <li><a class="p-3" target="_blank" href="#">Xcode</a></li>
                    <li><a class="p-3" target="_blank" href="#">Objective-C</a></li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><i class="fa fa-dollar"></i> 55 / hour</div>
                    <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card c_grid c_cyan">
            <div class="body text-center p-4">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar4.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#">Android</a></li>
                    <li><a class="p-3" target="_blank" href="#">Playstor</a></li>
                    <li><a class="p-3" target="_blank" href="#">Perl</a></li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><i class="fa fa-dollar"></i> 55 / hour</div>
                    <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card c_grid c_red">
            <div class="body text-center p-4">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar5.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#">Negotiation</a></li>
                    <li><a class="p-3" target="_blank" href="#">Writing</a></li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><i class="fa fa-dollar"></i> 55 / hour</div>
                    <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card c_grid c_blue">
            <div class="body text-center p-4">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar6.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#">HTML</a></li>
                    <li><a class="p-3" target="_blank" href="#">CSS</a></li>
                    <li><a class="p-3" target="_blank" href="#">SCSS</a></li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><i class="fa fa-dollar"></i> 55 / hour</div>
                    <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card c_grid c_green">
            <div class="body text-center p-4">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Sean Black</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#">PHP</a></li>
                    <li><a class="p-3" target="_blank" href="#">Wordpress</a></li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><i class="fa fa-dollar"></i> 55 / hour</div>
                    <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card c_grid c_cyan">
            <div class="body text-center p-4">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">David Wallace</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#">C++</a></li>
                    <li><a class="p-3" target="_blank" href="#">C#</a></li>
                    <li><a class="p-3" target="_blank" href="#">SQL Server</a></li>
                    <li><a class="p-3" target="_blank" href="#">HTML</a></li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><i class="fa fa-dollar"></i> 55 / hour</div>
                    <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script>
$('#multiselect3-all').multiselect({
    includeSelectAllOption: true,
});
</script>
@stop