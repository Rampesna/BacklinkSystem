@extends('layout.master')
@section('parentPageTitle', 'Extra')
@section('title', 'News')


@section('content')
<div class="news">
    <div class="row clearfix">
        <div class="col-12">
            <div class="card-group m-b-30">
                <div class="card n_category">
                    <span class="sub_n_category bg-orange">Music</span>
                    <img class="card-img-top" src="../assets/images/news/news1.jpg" alt="Card image cap">
                    <div class="body">
                        <h5 class="card-title"><a href="javascript:void(0);">The Madonna 80s Mastermix</a></h5>
                        <p class="card-text">This is a wider card supporting This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-red">Tops</span>
                    <img class="card-img-top" src="../assets/images/news/news2.jpg" alt="Card image cap">
                    <div class="body">
                        <h5 class="card-title"><a href="javascript:void(0);">The story behind a giant ship</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 7 mins ago</small>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category p_right bg-purple">Food</span>
                    <img class="card-img-top" src="../assets/images/news/news4.jpg" alt="Card image cap">
                    <div class="body">
                        <h5 class="card-title"><a href="javascript:void(0);">Ten films to watch in Sept...    </a></h5>
                        <p class="card-text">This is a wider card with supportin content than  height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 8 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card-columns">
                <div class="card">
                    <div id="slider1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../assets/images/image-gallery/8.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/images/image-gallery/9.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/images/image-gallery/1.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <h5 class="card-title"><a href="javascript:void(0);">Card title that wraps to a new line</a></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                    </div>
                </div>                        
                <div class="card n_category">
                    <span class="sub_n_category bg-green">Photograph</span>
                    <img class="card-img-top" src="../assets/images/image-gallery/15.jpg" alt="Card image cap">
                    <div class="body">
                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                    </div>
                </div>
                <div class="card n_category text-center">
                    <span class="sub_n_category bg-cyan">Travel</span>
                    <img class="card-img" src="../assets/images/news/news6.jpg" alt="Card image">
                    <div class="body">
                        <h5 class="card-title"><a href="javascript:void(0);">Wimbledon champion Kerber out of US Open</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <img class="card-img-top mb-3 rounded" src="../assets/images/news/news10.jpg" alt="Card image cap">
                        <h5 class="card-title"><a href="javascript:void(0);">Where can I get some?</a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 1 week ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="1700">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="javascript:void(0);" class="btn btn-primary">Readmore</a>
                                </div>
                                <div class="carousel-item">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="javascript:void(0);" class="btn btn-primary">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-pink">Fashion</span>
                    <img class="card-img-top" src="../assets/images/news/news9.jpg" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="javascript:void(0);">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="../assets/images/image-gallery/1.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Amazon Fashion</h5>
                        <p class="card-text">Your new look for the new season | Top brands | 30 days return</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-red">Tech</span>
                    <img class="card-img-top" src="../assets/images/image-gallery/10.jpg" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="javascript:void(0);">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                <div class="card text-white bg-success">
                    <div class="body">
                        <h5 class="card-title">Where does it come from?</h5>
                        <p class="card-text">Lana Del Rey postpones Israel performance Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../assets/images/news/news5.jpg" alt="Card image cap">
                    <div class="body">
                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-pink">Fashion</span>
                    <img class="card-img-top" src="../assets/images/news/news8.jpg" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="javascript:void(0);">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                    <div class="card n_category text-center">
                        <span class="sub_n_category bg-indigo">Style</span>
                    <img class="card-img" src="../assets/images/news/news7.jpg" alt="Card image">
                    <div class="body">
                        <h5 class="card-title"><a href="javascript:void(0);">Wimbledon champion Kerber out of US Open</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="../assets/images/news/news3.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title"><a href="javascript:void(0);">Amazon Fashion</a></h5>
                        <p class="card-text">Your new look for the new season | Top brands | 30 days return</p>
                        <p class="card-text">Last updated 3 mins ago</p>
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