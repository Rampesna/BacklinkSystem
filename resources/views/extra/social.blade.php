@extends('layout.master')
@section('parentPageTitle', 'Extra')
@section('title', 'Social')


@section('content')
<div class="social">
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="profile-header d-flex justify-content-between justify-content-center">
                    <div class="d-flex">
                        <div class="mr-3">
                            <img src="../assets/images/user.png" class="rounded" alt="">
                        </div>
                        <div class="details">
                            <h5 class="mb-0">Louis Pierce</h5>
                            <span class="text-light">Ui UX Designer</span>
                            <p class="mb-0"><span>Posts: <strong>321</strong></span> <span>Followers: <strong>4,230</strong></span> <span>Following: <strong>560</strong></span></p>
                        </div>                                
                    </div>
                    <div>
                        <button class="btn btn-primary btn-sm">Follow</button>
                        <button class="btn btn-success btn-sm">Message</button>
                    </div>
                </div>
                <ul class="nav nav-tabs3 mt-2">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Feed">Feeds</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Activity">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Friends">Friends</a></li>
                </ul>
            </div>                    
        </div>
        <div class="tab-content col-md-12">
            <div class="tab-pane vivify fadeIn delay-100 active show" id="Feed">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="body">
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
                                    <button class="btn btn-primary">Post</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="d-flex mb-3">
                                    <div class="icon bg-transparent">
                                        <img src="../assets/images/user-small.png" class="rounded mr-3 w40" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Louis Pierce</h6>
                                        <small>Sept 01, 2018</small>
                                    </div>
                                </div>                            
                                <div class="content">
                                    <img class="img-fluid rounded" src="../assets/images/image-gallery/2.jpg" alt="img">
                                    <h5 class="mt-3">All photographs are accurate</h5>
                                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0);" class="mr-3"><i class="icon-like"></i> 10K Likes </a>
                                <a href="javascript:void(0);" class="mr-3"><i class="icon-bubbles"></i> 92 Comments </a>
                                <a href="javascript:void(0);" ><i class="icon-share"></i> Share</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="d-flex mb-3">
                                    <div class="icon bg-transparent">
                                        <img src="../assets/images/user-small.png" class="rounded mr-3 w40" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Louis Pierce</h6>
                                        <small>Aug 27, 2018</small>
                                    </div>
                                </div>                            
                                <div class="content">
                                    <div class="row row-xs">
                                        <div class="col-6 mb-2">
                                            <img class="img-fluid rounded" src="../assets/images/image-gallery/3.jpg" alt="img">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <img class="img-fluid rounded" src="../assets/images/image-gallery/4.jpg" alt="img">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded" src="../assets/images/image-gallery/5.jpg" alt="img">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded" src="../assets/images/image-gallery/6.jpg" alt="img">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded" src="../assets/images/image-gallery/7.jpg" alt="img">
                                        </div>
                                    </div>
                                    <h5 class="mt-3">All photographs are accurate</h5>
                                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</span>
                                </div>
                            </div> 
                                <div class="card-footer">
                                <a href="javascript:void(0);" class="mr-3"><i class="icon-like"></i> 10K Likes </a>
                                <a href="javascript:void(0);" class="mr-3"><i class="icon-bubbles"></i> 92 Comments </a>
                                <a href="javascript:void(0);" ><i class="icon-share"></i> Share</a>
                            </div>                               
                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="d-flex mb-3">
                                    <div class="icon bg-transparent">
                                        <img src="../assets/images/user-small.png" class="rounded mr-3 w40" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Louis Pierce</h6>
                                        <small>Sept 01, 2018</small>
                                    </div>
                                </div>
                                <div class="content">
                                    <img class="img-fluid rounded" src="../assets/images/image-gallery/6.jpg" alt="img">
                                    <h5 class="mt-3">All photographs are accurate</h5>
                                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0);" class="mr-3"><i class="icon-like"></i> 10K Likes </a>
                                <a href="javascript:void(0);" class="mr-3"><i class="icon-bubbles"></i> 92 Comments </a>
                                <a href="javascript:void(0);" ><i class="icon-share"></i> Share</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="d-flex mb-3">
                                    <div class="icon bg-transparent">
                                        <img src="../assets/images/user-small.png" class="rounded mr-3 w40" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Louis Pierce</h6>
                                        <small>Aug 27, 2018</small>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="row row-xs">
                                        <div class="col-4">
                                            <img class="img-fluid rounded" src="../assets/images/image-gallery/10.jpg" alt="img">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded" src="../assets/images/image-gallery/11.jpg" alt="img">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded" src="../assets/images/image-gallery/12.jpg" alt="img">
                                        </div>
                                    </div>
                                    <h5 class="mt-3">All photographs are accurate</h5>
                                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</span>
                                </div>
                            </div> 
                                <div class="card-footer">
                                <a href="javascript:void(0);" class="mr-3"><i class="icon-like"></i> 10K Likes </a>
                                <a href="javascript:void(0);" class="mr-3"><i class="icon-bubbles"></i> 92 Comments </a>
                                <a href="javascript:void(0);" ><i class="icon-share"></i> Share</a>
                            </div>                               
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">                                
                        <div class="card">
                            <div class="body">
                                <div class="card-value float-right text-warning"><i class="wi wi-day-cloudy"></i></div>
                                <h3 class="mb-1">18°C</h3>
                                <div>New York, USA</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>My Portfolio Status</h2>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled">
                                    <li class="m-b-15">
                                        <div>Behance</div>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </li>
                                    <li class="m-b-15">
                                        <div>Photoshop</div>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </li>
                                    <li class="m-b-15">
                                        <div>Dribbble</div>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </li>
                                    <li class="m-b-15">
                                        <div>Pinterest</div>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row clearfix w_social3">
                            <div class="col-lg-6 col-6">
                                <div class="card facebook-widget">
                                    <div id="slider2" class="carousel slide" data-ride="carousel" data-interval="2000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-facebook"></i></div>
                                                <div class="content">
                                                    <div class="text">Like</div>
                                                    <div class="number">10K</div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-facebook"></i></div>
                                                <div class="content">
                                                    <div class="text">Comment</div>
                                                    <div class="number">217</div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-facebook"></i></div>
                                                <div class="content">
                                                    <div class="text">Share</div>
                                                    <div class="number">78</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                            
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="card instagram-widget">
                                    <div class="icon"><i class="fa fa-instagram"></i></div>
                                    <div class="content">
                                        <div class="text">Followers</div>
                                        <div class="number">231</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="card google-widget">
                                    <div id="slider2" class="carousel slide vert" data-ride="carousel" data-interval="2000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-google"></i></div>
                                                <div class="content">
                                                    <div class="text">Like</div>
                                                    <div class="number">10K</div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-google"></i></div>
                                                <div class="content">
                                                    <div class="text">Comment</div>
                                                    <div class="number">217</div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-google"></i></div>
                                                <div class="content">
                                                    <div class="text">Share</div>
                                                    <div class="number">78</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="card twitter-widget">
                                    <div id="slider2" class="carousel slide" data-ride="carousel" data-interval="2000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-twitter"></i></div>
                                                <div class="content">
                                                    <div class="text">Followers</div>
                                                    <div class="number">10K</div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-twitter"></i></div>
                                                <div class="content">
                                                    <div class="text">Twitt</div>
                                                    <div class="number">657</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                
                        <div class="card">
                            <div class="header">
                                <h2>Followers</h2>
                            </div>
                            <div class="body">
                                <ul class="right_chat w_followers list-unstyled mb-0">
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                                <div class="media-body">
                                                    <span class="name">@MelissaMcCoy</span>
                                                    <span class="message">Designer, Blogger</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">@Joge Lucky</span>
                                                    <span class="message">Java Developer</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">@JuanMartinez</span>
                                                    <span class="message">CEO, puffintheme</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
                                                <div class="media-body">
                                                    <span class="name">@Folisise Chosielie</span>
                                                    <span class="message">Art director, Movie Cut</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">@LouisHenry</span>
                                                    <span class="message">Writter, Mag Editor</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar10.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">@Folisise Chosielie</span>
                                                    <span class="message">Art director, Movie Cut</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="tab-pane vivify fadeIn delay-100" id="Activity">
                <div class="card">
                    <div class="body">
                        <ul class="timeline">
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>March 12, 2018</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h3 class="timeline-title">Event Title</h3>
                                    <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                        eu pede mollis pretium. Pellentesque ut neque.</p>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>March 23, 2018</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h3 class="timeline-title">Event Title</h3>
                                    <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                        eu pede mollis pretium. Pellentesque ut neque. </p>
                                </div>
                            </li>
                            <li class="timeline-item period">
                                <div class="timeline-info"></div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h2 class="timeline-title">April 2018</h2>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>April 02, 2018</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h3 class="timeline-title">Event Title</h3>
                                    <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                        eu pede mollis pretium. Pellentesque ut neque. </p>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>April 28, 2018</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content pb-0">
                                    <h3 class="timeline-title">Event Title</h3>
                                    <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                        eu pede mollis pretium. Pellentesque ut neque. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane vivify fadeIn delay-100" id="Friends">
                <div class="table-responsive">
                    <table class="table table-hover table-custom spacing5">
                        <thead>
                            <tr> 
                                <th>#</th>
                                <th></th>
                                <th>eMail</th>
                                <th>Address</th>                                        
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w60">
                                    <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                                </td>
                                <td>
                                    <a href="javascript:void(0);" title="">Jason Porter</a>
                                    <p class="mb-0">+ 264-625-5858</p>
                                </td>
                                <td>
                                    <span>jason-porter@example.com</span>
                                </td>
                                <td>
                                    <span>123 6th St. Melbourne, FL 32904</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Follow</button>
                                    <button class="btn btn-success btn-sm">Message</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                                </td>
                                <td>
                                    <a href="javascript:void(0);" title="">Denise Elliott</a>
                                    <p class="mb-0">+ 264-625-4523</p>
                                </td>
                                <td>
                                    <span>denise-elliott@example.com</span>
                                </td>
                                <td>
                                    <span>514 S. Magnolia St. Orlando, FL 32806</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Follow</button>
                                    <button class="btn btn-success btn-sm">Message</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                                </td>
                                <td>
                                    <a href="javascript:void(0);" title="">Rose Coke</a>
                                    <p class="mb-0">+ 264-625-2583</p>
                                </td>
                                <td>
                                    <span>rose-coke@example.com</span>
                                </td>
                                <td>
                                    <span>44 Shirley Ave. West Chicago, IL 60185</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Follow</button>
                                    <button class="btn btn-success btn-sm">Message</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                                </td>
                                <td>
                                    <a href="javascript:void(0);" title="">Grace Knight</a>
                                    <p class="mb-0">+ 264-625-2583</p>
                                </td>
                                <td>
                                    <span>grace-knight@example.com</span>
                                </td>
                                <td>
                                    <span>70 Bowman St. South Windsor, CT 06074</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Follow</button>
                                    <button class="btn btn-success btn-sm">Message</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                                </td>
                                <td>
                                    <a href="javascript:void(0);" title="">Elizabeth Martin</a>
                                    <p class="mb-0">+ 264-625-2341</p>
                                </td>
                                <td>
                                    <span>Elizabeth-Martin@example.com</span>
                                </td>
                                <td>
                                    <span>123 6th St. Melbourne, FL 32904</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Follow</button>
                                    <button class="btn btn-success btn-sm">Message</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                                </td>
                                <td>
                                    <a href="javascript:void(0);" title="">Denise Alvarado</a>
                                    <p class="mb-0">+ 264-625-7262</p>
                                </td>
                                <td>
                                    <span>denise-Alvarado@example.com</span>
                                </td>
                                <td>
                                    <span>514 S. Magnolia St. Orlando, FL 32806</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Follow</button>
                                    <button class="btn btn-success btn-sm">Message</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                                </td>
                                <td>
                                    <a href="javascript:void(0);" title="">Terry Carter</a>
                                    <p class="mb-0">+ 264-625-9283</p>
                                </td>
                                <td>
                                    <span>Carol-coke@example.com</span>
                                </td>
                                <td>
                                    <span>44 Shirley Ave. West Chicago, IL 60185</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Follow</button>
                                    <button class="btn btn-success btn-sm">Message</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <img src="../assets/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                                </td>
                                <td>
                                    <a href="javascript:void(0);" title="">Michelle Schultz</a>
                                    <p class="mb-0">+ 264-625-2233</p>
                                </td>
                                <td>
                                    <span>Michelle-Schultz@example.com</span>
                                </td>
                                <td>
                                    <span>70 Bowman St. South Windsor, CT 06074</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Follow</button>
                                    <button class="btn btn-success btn-sm">Message</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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