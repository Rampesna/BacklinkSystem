@extends('layout.master')
@section('parentPageTitle', 'Job ')
@section('title', 'Applicants')


@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <label>Search</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label>Status</label>
                        <div class="multiselect_div">
                            <select id="multiselect3-all" name="multiselect3[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="multiselect-all">STATUS</option>
                                <option value="All Statuses">All Statuses</option>
                                <option value="New">New</option>
                                <option value="Contacted">Contacted</option>
                                <option value="Interviewed">Interviewed</option>
                                <option value="Hired">Hired</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label>Order</label>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected="">Newest first</option>
                                <option value="1">Oldest first</option>
                                <option value="2">Low salary first</option>
                                <option value="3">High salary first</option>
                                <option value="3">Sort by name</option>
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
        <div class="table-responsive">
            <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                <tbody>
                    <tr>
                        <td class="w60">
                            <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">
                                <span>GH</span>
                            </div>
                        </td>
                        <td>
                            <div class="font-15">Google Inc.</div>
                            <span class="text-muted">Full-stack developer</span>
                        </td>
                        <td>$60 per hour</td>
                        <td><span class="badge badge-success text-uppercase">Full-time</span></td>
                        <td><span>123 6th St. Melbourne, FL 32904</span></td>
                        <td class="text-right">Applied on: <strong>04 Jan, 2019</strong></td>
                    </tr>
                    <tr>
                        <td class="w60">
                            <img class="avtar-pic w35" src="../assets/images/xs/avatar1.jpg" alt="">
                        </td>
                        <td>
                            <div class="font-15">FaceBook Inc.</div>
                            <span class="text-muted">Marketing</span>
                        </td>
                        <td>$57 per hour</td>
                        <td><span class="badge badge-warning text-uppercase">Part-time</span></td>
                        <td><span>44 Shirley Ave. IL 60185</span></td>
                        <td class="text-right">Applied on: <strong>12 Jan, 2019</strong></td>
                    </tr>
                    <tr>
                        <td class="w60">
                            <img class="avtar-pic w35" src="../assets/images/xs/avatar2.jpg" alt="">
                        </td>
                        <td>
                            <div class="font-15">FaceBook Inc.</div>
                            <span class="text-muted">Full-stack developer</span>
                        </td>
                        <td>$43 per hour</td>
                        <td><span class="badge badge-success text-uppercase">Full-time</span></td>
                        <td><span>44 Shirley Ave. IL 60185</span></td>
                        <td class="text-right">Applied on: <strong>15 Jan, 2019</strong></td>
                    </tr>
                    <tr>
                        <td class="w60">
                            <img class="avtar-pic w35" src="../assets/images/xs/avatar3.jpg" alt="">
                        </td>
                        <td>
                            <div class="font-15">FaceBook Inc.</div>
                            <span class="text-muted">Web Application Developer</span>
                        </td>
                        <td>$55 per hour</td>
                        <td><span class="badge badge-success text-uppercase">Full-time</span></td>
                        <td><span>514 S. Magnolia St. Orlando</span></td>
                        <td class="text-right">Applied on: <strong>18 Jan, 2019</strong></td>
                    </tr>
                    <tr>
                        <td class="w60">
                            <div class="avtar-pic w35 bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">
                                <span>KT</span>
                            </div>
                        </td>
                        <td>
                            <div class="font-15">FaceBook Inc.</div>
                            <span class="text-muted">Designer</span>
                        </td>
                        <td>$43 per hour</td>
                        <td><span class="badge badge-warning text-uppercase">Part-time</span></td>
                        <td><span>44 Shirley Ave. IL 60185</span></td>
                        <td class="text-right">Applied on: <strong>24 Jan, 2019</strong></td>
                    </tr>
                    <tr>
                        <td class="w60">
                            <img class="avtar-pic w35" src="../assets/images/xs/avatar5.jpg" alt="">
                        </td>
                        <td>
                            <div class="font-15">iQuar Inc.</div>
                            <span class="text-muted">Sr. SQL Server Developer</span>
                        </td>
                        <td>$33 per hour</td>
                        <td><span class="badge badge-success text-uppercase">Full-time</span></td>
                        <td><span>44 Shirley Ave. IL 60185</span></td>
                        <td class="text-right">Applied on: <strong>05 Feb, 2019</strong></td>
                    </tr>
                    <tr>
                        <td class="w60">
                            <img class="avtar-pic w35" src="../assets/images/xs/avatar6.jpg" alt="">
                        </td>
                        <td>
                            <div class="font-15">Linkdin Inc.</div>
                            <span class="text-muted">Full-stack developer</span>
                        </td>
                        <td>$39 per hour</td>
                        <td><span class="badge badge-success text-uppercase">Full-time</span></td>
                        <td><span>44 Shirley Ave. IL 60185</span></td>
                        <td class="text-right">Applied on: <strong>11 March, 2019</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <ul class="pagination mt-2">
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
        </ul>
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