@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Media Object')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <div class="media mleft">
                    <div class="media-left"><a href="javascript:void(0);"><img class="media-object rounded" src="../assets/images/sm/avatar1.jpg" width="64" height="64" alt=""></a></div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                        in faucibus.
                    </div>
                </div>
                <div class="media mleft">
                    <div class="media-left"><a href="javascript:void(0);"><img alt="" class="media-object rounded" src="../assets/images/sm/avatar2.jpg" width="64" height="64"></a></div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                        in faucibus.
                        <div class="media m-t-20">
                            <div class="media-left"><a href="javascript:void(0);"><img alt="" class="media-object rounded" src="../assets/images/sm/avatar3.jpg" width="64" height="64"></a></div>
                            <div class="media-body">
                                <h4 class="media-heading">Nested media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla
                                vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
                                in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                fringilla. Donec lacinia congue felis in faucibus. </div>
                        </div>
                    </div>
                </div>
                <div class="media mright">
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. </div>
                    <div class="media-right"><a href="javascript:void(0);"><img alt="" class="media-object rounded" src="../assets/images/sm/avatar4.jpg" width="64" height="64"></a></div>
                </div>
                <div class="media mleft">
                    <div class="media-left"><a href="javascript:void(0);"><img alt="" class="media-object rounded" src="../assets/images/sm/avatar2.jpg" width="64" height="64"></a></div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. </div>
                    <div class="media-right"><a href="javascript:void(0);"><img class="media-object rounded" src="../assets/images/sm/avatar3.jpg" width="64" height="64"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Media Alignment</h2>
            </div>
            <div class="body">
                <div class="bs-example" data-example-id="media-alignment">
                    <div class="media">
                        <div class="media-left"><a href="javascript:void(0);"><img alt="" class="media-object rounded" src="../assets/images/sm/avatar4.jpg" width="64" height="64"></a></div>
                        <div class="media-body">
                            <h4 class="media-heading">Top aligned media</h4>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in faucibus. </p>
                            <p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle"><a href="javascript:void(0);"><img alt="" class="media-object rounded" src="../assets/images/sm/avatar1.jpg" width="64" height="64"></a></div>
                        <div class="media-body">
                            <h4 class="media-heading">Middle aligned media</h4>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in faucibus. </p>
                            <p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-bottom"><a href="javascript:void(0);"><img alt="" class="media-object rounded" src="../assets/images/sm/avatar2.jpg" width="64" height="64"></a></div>
                        <div class="media-body">
                            <h4 class="media-heading">Bottom aligned media</h4>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in faucibus. </p>
                            <p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                        </div>
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