@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Testimonials')


@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="card-columns testimonials">
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar1.jpg" alt=""> Michelle Green</small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar2.jpg" alt=""> Jason Porter</small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar3.jpg" alt=""> Terry Carter</small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar4.jpg" alt=""> Denise Alvarado</small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar5.jpg" alt=""> Jason Porter</small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar1.jpg" alt=""> Michelle Green</small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>he standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar6.jpg" alt=""> Terry Carter</small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar2.jpg" alt=""> Jason Porter</small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <blockquote class="blockquote mb-0">
                        <p><i class="fa fa-quote-left"></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted"><img class="avatar sm rounded-circle mr-1" src="../assets/images/sm/avatar3.jpg" alt=""> Terry Carter</small>
                        </footer>
                    </blockquote>
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