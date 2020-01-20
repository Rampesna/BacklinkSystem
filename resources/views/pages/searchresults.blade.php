@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Search Result')


@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search here...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
                <strong> About <span class="text-orange">12,284</span> result ( 0.17 seconds)</strong>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-custom spacing8">
                <tbody>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 1 industry</a>
                        </td>
                        <td>
                            <span>Lorem Ipsum is dummy text of the and typesetting industry.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">1 minutes ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 2 distracted</a>
                        </td>
                        <td>
                            <span>It is a long established fact that a reader will be distracted.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">10 minutes ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 3 passages</a>
                        </td>
                        <td>
                            <span>here are many variations of passages of Lorem Ipsum.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">11 minutes ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 4 belief</a>
                        </td>
                        <td>
                            <span>Contrary to popular belief, Lorem Ipsum is not simply random.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">13 minutes ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 5 literature</a>
                        </td>
                        <td>
                            <span>It has roots in a piece of classical Latin literature.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">1 day ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 6 typesetting </a>
                        </td>
                        <td>
                            <span>making this the first true generator on the Internet.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">1 Week ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 7 industry</a>
                        </td>
                        <td>
                            <span>Lorem Ipsum is dummy text of the and typesetting industry.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">1 hours ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 8 distracted</a>
                        </td>
                        <td>
                            <span>It is a long established fact that a reader will be distracted.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">1 hours ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 9 passages</a>
                        </td>
                        <td>
                            <span>here are many variations of passages of Lorem Ipsum.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">1 hours ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="javascript:void(0);" title="">Project 10 belief</a>
                        </td>
                        <td>
                            <span>Contrary to popular belief, Lorem Ipsum is not simply random.</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted">1 hours ago</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop