@extends('layout.master')
@section('parentPageTitle', 'HR ')
@section('title', 'Accounts')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <ul class="nav nav-tabs3 table-nav">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Invoices">Invoices</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Payments">Payments</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Expenses">Expenses</a></li>                
            </ul>
            <div class="tab-content mt-0">
                <div class="tab-pane show active" id="Invoices">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr>
                                    <th>Invoice Number</th>
                                    <th>Clients</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th class="w60">Amount</th>
                                    <th class="w60">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#LA-5218</td>
                                    <td>vPro tec LLC.</td>
                                    <td>07 March, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$4,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-1212</td>
                                    <td>BT Technology</td>
                                    <td>25 Jun, 2018</td>
                                    <td><img src="../assets/images/mastercard.png" class="rounded w40" alt="mastercard"></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$5,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-0222</td>
                                    <td>More Infoweb Pvt.</td>
                                    <td>12 July, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$2,000</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-0312</td>
                                    <td>RETO Tech LLC.</td>
                                    <td>13 July, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$10,000</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-5656</td>
                                    <td>SDRAPP Pvt.</td>
                                    <td>27 July, 2018</td>
                                    <td><img src="../assets/images/visa-card.png" class="rounded w40" alt="visa card"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$1,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-4515</td>
                                    <td>Kdash Infoweb LLC.</td>
                                    <td>07 March, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$4,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#LA-7845</td>
                                    <td>BT infoweb</td>
                                    <td>25 Jun, 2018</td>
                                    <td><img src="../assets/images/mastercard.png" class="rounded w40" alt="mastercard"></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$5,205</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                        <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="Payments">
                    <div class="table-responsive invoice_list">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Clients Name</th>
                                    <th>Project Name</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MP 4515</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                            <div class="ml-3">
                                                <a href="{{route('pages.invoicedetails')}}" title="">Zoe Baker</a>
                                                <p class="mb-0">zoe.baker@example.com</p>
                                            </div>
                                        </div>                                        
                                    </td>
                                    <td>UPlo - Bootstrap 4 </td>
                                    <td>07 March, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td>$4,205</td>
                                </tr>
                                <tr>
                                    <td>LK 1515</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>SS</span></div>
                                            <div class="ml-3">
                                                <a href="{{route('pages.invoicedetails')}}" title="">South Shyanne</a>
                                                <p class="mb-0">south.shyanne@example.com</p>
                                            </div>
                                        </div>                                        
                                    </td>
                                    <td>Tito Wordpress</td>
                                    <td>25 Jun, 2018</td>
                                    <td><img src="../assets/images/mastercard.png" class="rounded w40" alt="mastercard"></td>
                                    <td>$5,205</td>
                                </tr>
                                <tr>
                                    <td>SS 6323</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>SS</span></div>
                                            <div class="ml-3">
                                                <a href="{{route('pages.invoicedetails')}}" title="">South Shyanne</a>
                                                <p class="mb-0">south.shyanne@example.com</p>
                                            </div>
                                        </div>                                        
                                    </td>
                                    <td>Hotel Management</td>
                                    <td>12 July, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td>$2,000</td>
                                </tr>
                                <tr>
                                    <td>PQ 8585</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                            <div class="ml-3">
                                                <a href="{{route('pages.invoicedetails')}}" title="">Zoe Baker</a>
                                                <p class="mb-0">zoe.baker@example.com</p>
                                            </div>
                                        </div>                                        
                                    </td>
                                    <td>Bootstrap 4 Angular5 Admin</td>
                                    <td>13 July, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td>$10,000</td>
                                </tr>
                                <tr>
                                    <td>WD 4455</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                            <div class="ml-3">
                                                <a href="{{route('pages.invoicedetails')}}" title="">Zoe Baker</a>
                                                <p class="mb-0">zoe.baker@example.com</p>
                                            </div>
                                        </div>                                        
                                    </td>
                                    <td>Angular Dashboard</td>
                                    <td>27 July, 2018</td>
                                    <td><img src="../assets/images/visa-card.png" class="rounded w40" alt="visa card"></td>
                                    <td>$1,205</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="Expenses">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Order by</th>
                                    <th>From</th>
                                    <th>Date</th>
                                    <th>Paid By</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HP Laptop</td>
                                    <td>Marshall Nichols</td>
                                    <td>Paytem</td>
                                    <td>07 March, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$205</td>
                                </tr>
                                <tr>
                                    <td>iMack Desktop</td>
                                    <td>Marshall Nichols</td>
                                    <td>ebay USA</td>
                                    <td>22 July, 2017</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$355</td>
                                </tr>
                                <tr>
                                    <td>Logitech USB Mouse, Keyboard</td>
                                    <td>Marshall Nichols</td>
                                    <td>Amazon</td>
                                    <td>28 July, 2018</td>
                                    <td><img src="../assets/images/paypal.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$40</td>
                                </tr>
                                <tr>
                                    <td>MacBook Pro Air</td>
                                    <td>Debra Stewart</td>
                                    <td>Amazon</td>
                                    <td>17 Jun, 2018</td>
                                    <td><img src="../assets/images/mastercard.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$800</td>
                                </tr>
                                <tr>
                                    <td>Dell Monitor 28 inch</td>
                                    <td>Ava Alexander</td>
                                    <td>Flipkart UK</td>
                                    <td>21 Jun, 2018</td>
                                    <td><img src="../assets/images/mastercard.png" class="rounded w40" alt="paypal"></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>$205</td>
                                </tr>                                
                            </tbody>
                        </table>
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