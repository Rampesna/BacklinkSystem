@extends('layout.master')
@section('parentPageTitle', 'HR ')
@section('title', 'Activities')


@section('content')
<div class="row clearfix">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body">
                <ul class="timeline timeline-split">
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Feb 15, 2018</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Parramatta WordPress Meetup</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Feb 23, 2018</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Share Location and Address our new office</h3>
                            <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>                       
                    </li>                    
                    <li class="timeline-item period">
                        <div class="timeline-info"></div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h2 class="timeline-title">March 2019</h2>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 02, 2018</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Santa Cruz WordPress Monthly Meetup</h3>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact</p>
                            <ul class="list-unstyled team-info sm margin-0">
                                <li><img src="../assets/images/xs/avatar10.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li class="ml-2"><span>10k +</span></li>
                            </ul>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 08, 2018</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Id-Ul-Fitr Function in Office</h3>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact</p>                           
                            <div id="lightgallery" class="row row-xs clearfix lightGallery">
                                <div class="col-6 mb-2"><a class="light-link" href="../assets/images/image-gallery/1.jpg"><img class="img-fluid rounded" src="../assets/images/image-gallery/1.jpg" alt=""></a></div>
                                <div class="col-6 mb-2"><a class="light-link" href="../assets/images/image-gallery/2.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/2.jpg" alt=""></a></div>
                                <div class="col-4"><a class="light-link" href="../assets/images/image-gallery/3.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/3.jpg" alt=""></a></div>
                                <div class="col-4"><a class="light-link" href="../assets/images/image-gallery/4.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/4.jpg" alt=""></a></div>
                                <div class="col-4"><a class="light-link" href="../assets/images/image-gallery/5.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/5.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 23, 2018</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Women’s Javascript Study Group</h3>                            
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                            <div class="alert alert-info alert-dismissible mb-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-info-circle"></i> The system is running well
                            </div>
                        </div>
                    </li>
                </ul>
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
                <h2>Event Calendar</h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-azura text-white rounded-circle">15</div>
                    <div class="ml-4">
                        <span>Feb 2019</span>
                        <h4 class="mb-0 font-weight-medium">Saturday</h4>
                    </div>
                </div>
                <table class="table table-calendar mb-0 mt-5">
                    <tbody>
                        <tr>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                            <th>Su</th>
                        </tr>
                        <tr>
                            <td class="text-muted">27</td>
                            <td class="text-muted">28</td>
                            <td class="text-muted">29</td>
                            <td class="text-muted">30</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)" class="table-calendar-link">4</a></td>
                            <td>5</td>
                            <td><a href="javascript:void(0)" class="table-calendar-link">6</a></td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td><a href="javascript:void(0)" class="table-calendar-link">12</a></td>
                            <td>13</td>
                            <td>14</td>
                            <td><a href="javascript:void(0)">15</a></td>
                            <td>16</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td><a href="javascript:void(0)" class="table-calendar-link">19</a></td>
                            <td><a href="javascript:void(0)" class="table-calendar-link">20</a></td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td class="text-muted">1</td>
                        </tr>
                    </tbody>
                </table>
            </div>                        
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/light-gallery/css/lightgallery.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/lightgallery.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/medias/image-gallery.js') }}"></script>
@stop