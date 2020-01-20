@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title2', 'Invoices')
@section('title', 'Details')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <h6>South Shyanne</h6>
                <p> 795 Folsom Ave, Suite 546 San Francisco, CA 54656</p>
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6">
                        <p class="m-b-0"><strong>Order Date: </strong> AUG 15, 2018</p>
                        <p><strong>Order ID: </strong> C09</p>                                    
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5 mb-5">
                                <thead>
                                    <tr>
                                        <th>#</th>                                                        
                                        <th>Item</th>
                                        <th style="width: 120px;">Quantity</th>
                                        <th class="hidden-sm-down" style="width: 80px;">Cost</th>
                                        <th style="width: 80px; text-align: right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span>iPhoneX 128GB</span>
                                            <p class="hidden-sm-down mb-0 text-muted"> Lorem Ipsum has been the industry's standard.</p>
                                        </td>                                                    
                                        <td>01</td>
                                        <td class="hidden-sm-down">$380</td>
                                        <td class="text-right">$380</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <span>Nokia 6.1 64GB</span>
                                            <p class="hidden-sm-down mb-0 text-muted">simply dummy text of the printing and typesetting industry. </p>
                                        </td>
                                        <td>5</td>
                                        <td class="hidden-sm-down">$50</td>
                                        <td class="text-right">$250</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <span>OnePlus6 64GB Red</span>
                                            <p class="hidden-sm-down mb-0 text-muted">simply dummy text of the printing and typesetting industry. </p>
                                        </td>
                                        <td>1</td>
                                        <td class="hidden-sm-down">$120</td>
                                        <td class="text-right">$120</td>
                                    </tr>                                                
                                </tbody>
                                <tfoot>
                                    <td colspan="4"></td>
                                    <td class="text-right">
                                        <span>Total: <strong class="text-success">$750.00</strong></span>
                                    </td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <span><strong>Note:</strong> Ipsum is simply dummy text of the printing and typesetting industry.</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-info"><i class="icon-printer"></i> Print</button>
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