@extends('layout.master')
@section('parentPageTitle', 'Table')
@section('title', 'Editable Table')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <p>You can edit any columns except header/footer</p>
                <table id="mainTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Cost</th>
                            <th>Profit</th>
                            <th>Fun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Car</td>
                            <td>100</td>
                            <td>200</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Bike</td>
                            <td>330</td>
                            <td>240</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Plane</td>
                            <td>430</td>
                            <td>540</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Yacht</td>
                            <td>100</td>
                            <td>200</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Segway</td>
                            <td>330</td>
                            <td>240</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th><strong>TOTAL</strong></th>
                            <th>1290</th>
                            <th>1420</th>
                            <th>5</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/editable-table/mindmup-editabletable.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/editable-table.js') }}"></script>
@stop