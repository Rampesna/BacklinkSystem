@extends('layout.master')
@section('parentPageTitle', 'Table')
@section('title', 'Table Filter')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="text-left">
                <button type="button" class="btn btn-sm mb-1 btn-filter bg-default" data-target="all">All</button>
                <button type="button" class="btn btn-sm mb-1 btn-filter bg-green" data-target="approved">Approved</button>
                <button type="button" class="btn btn-sm mb-1 btn-filter bg-orange" data-target="suspended">Suspended</button>
                <button type="button" class="btn btn-sm mb-1 btn-filter bg-azura" data-target="pending">Pending</button>
                <button type="button" class="btn btn-sm mb-1 btn-filter bg-blush" data-target="blocked">Blocked</button>
            </div>
            <table class="table table-hover table-custom spacing8 mb-0">
                <tbody>
                    <tr data-status="approved">
                        <td class="w60">
                            <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                        </td>
                        <td>
                            <a href="javascript:void(0);" title="">Project 1</a>
                            <p class="mb-0">Scott Ortega</p>
                        </td>
                        <td>
                            <span>Lorem Ipsum is dummy text of the and typesetting industry.</span>
                        </td>
                        <td>11,200</td>
                        <td>$83</td>
                        <td><strong>$22,520</strong></td>
                    </tr>
                    <tr data-status="suspended">
                        <td class="w60">
                            <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                        </td>
                        <td>
                            <a href="javascript:void(0);" title="">Project 2</a>
                            <p class="mb-0">Louis Little</p>
                        </td>
                        <td>
                            <span>Lorem Ipsum is simply text of the printing and typesetting industry.</span>
                        </td>
                        <td>11,200</td>
                        <td>$66</td>
                        <td><strong>$13,205</strong></td>
                    </tr>
                    <tr data-status="blocked">
                        <td class="w60">
                            <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                        </td>
                        <td>
                            <a href="javascript:void(0);" title="">Project 3</a>
                            <p class="mb-0">Mike</p>
                        </td>                                    
                        <td>
                            <span>Lorem is simply dummy text of the printing and typesetting industry.</span>
                        </td>
                        <td>12,080</td>
                        <td>$93</td>
                        <td><strong>$17,700</strong></td>
                    </tr>
                    <tr data-status="approved">
                        <td class="w60">
                            <img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                        </td>
                        <td>
                            <a href="javascript:void(0);" title="">Project 4</a>
                            <p class="mb-0">Lori Kelley</p>
                        </td>
                        <td>
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                        </td>
                        <td>18,200</td>
                        <td>$178</td>
                        <td><strong>$17,700</strong></td>
                    </tr>
                    <tr data-status="pending">
                        <td class="w60">
                            <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 rounded">
                        </td>
                        <td>
                            <a href="javascript:void(0);" title="">Project 5</a>
                            <p class="mb-0">David McCoy</p>
                        </td>
                        <td>
                            <span>Lorem Ipsum is simply dummy text of the printing and industry.</span>
                        </td>
                        <td>12,080</td>
                        <td>$93</td>
                        <td><strong>$17,700</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/table-filter.js') }}"></script>
@stop