@extends('Layouts.master')
@section('site_title', 'Backlink Satış')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))
@section('content')

    @if(isset($logs))

        <div class="row clearfix">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="allCategories" class="table table-custom2 table-hover">
                        <thead>
                        <tr>
                            <th>Tarih</th>
                            <th>Kullanıcı Adı</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($logs as $log)

                            <tr>
                                <td>{{@strftime("%Y-%m-%d %H:%M:%S",strtotime(@$log->created_at))}}</td>
                                <td>{{@$log->username}}</td>
                                <td><textarea class="form-control bg-dark" disabled>{{$log->detail}}</textarea></td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                    @if($logsCount > 0)
                        @if($page == 1)
                            @if($logsCount > 10)
                                <ul class="pagination mt-2">
                                    <li class="page-item"><a style="color:#e9ecef" class="page-link" href="javascript:void(0);">Önceki</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{$page}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('customer-logs',$page + 1)}}">{{$page + 1}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('customer-logs',$page + 2)}}">{{$page + 2}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('customer-logs',$page + 1)}}">Sonraki</a></li>
                                </ul>
                            @endif
                        @else
                            <ul class="pagination mt-2">
                                <li class="page-item"><a class="page-link" href="{{route('customer-logs',$page - 1)}}">Önceki</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('customer-logs',$page - 1)}}">{{$page - 1}}</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{$page}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('customer-logs',$page + 1)}}">{{$page + 1}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('customer-logs',$page + 1)}}">Sonraki</a></li>
                            </ul>
                        @endif
                    @endif
                </div>
            </div>
        </div>

    @endif

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

@stop

