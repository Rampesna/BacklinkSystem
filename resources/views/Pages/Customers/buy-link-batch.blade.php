@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif


    <form class="row clearfix" method="post" action="{{route('buy-link-batch-post')}}">
        {{csrf_field()}}
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                <div class="body">

                    <input type="hidden" name="link_id" value="{{$link->id}}">

                    @foreach($mySites as $site)
                        @if(\App\Models\PurchasedLinksTableModel::where('link_id',$link->id)->where('site_id',$site->id)->count() == 0)
                        <div class="row">
                            <div class="col-1">
                                <div class="form-group">
                                    <input name="siteid{{ $site->id }}" type="checkbox" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <label>{{ $site->url }}</label>
                            </div>
                            <div class="col-4">
                                <label>İstediğiniz Kelimeler (<small><i>Her Kelimeden Sonra Enter'a Basın</i></small>)</label>
                                <div style="color: white" class="input-group demo-tagsinput-area">
                                    <input name="keywordsid{{ $site->id }}" type="text" class="form-control" data-role="tagsinput" value="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Backlink Alınan Site</label>
                                    <input disabled value="{{$link->url}}" type="text" name="link_id" class="form-control bg-dark" required>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach

                    <input type="submit" value="Satın Al" class="btn btn-block btn-outline-success">
                </div>
            </div>
        </div>

    </form>

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

@stop
