@extends('layout.master')
@section('parentPageTitle', 'Table')
@section('title', 'Color Table')


@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Table Dark<small>Add Class <code>.table-dark .table-striped</code></small></h2>
                <ul class="header-dropdown dropdown">
                    
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table m-b-0 table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Table head Light<small>Add Class <code>.thead-light</code></small></h2>
                <ul class="header-dropdown dropdown">
                    
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table m-b-0">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>            
</div>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Solid Color background <small>Add Class <code>.bg-pink</code></small></h2>
                <ul class="header-dropdown dropdown">
                    
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Class name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-blue text-light">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>.bg-blue</td>
                            </tr>
                            <tr class="bg-cyan text-light">
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>.bg-cyan</td>
                            </tr>
                            <tr class="bg-orange text-light">
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>.bg-orange</td>
                            </tr>
                            <tr class="bg-pink text-light">
                                <th scope="row">4</th>
                                <td>Larry</td>
                                <td>Jellybean</td>
                                <td>.bg-pink</td>
                            </tr>
                            <tr class="bg-purple text-light">
                                <th scope="row">5</th>
                                <td>Larry</td>
                                <td>Kikat</td>
                                <td>.bg-purple</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="m-t-30">First Column background</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Class name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-blue text-light">1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>.bg-blue</td>
                            </tr>
                            <tr>
                                <td class="bg-cyan text-light">2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>.bg-cyan</td>
                            </tr>
                            <tr>
                                <td class="bg-orange text-light">3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>.bg-orange</td>
                            </tr>
                            <tr>
                                <td class="bg-pink text-light">4</td>
                                <td>Larry</td>
                                <td>Jellybean</td>
                                <td>.bg-pink</td>
                            </tr>
                            <tr>
                                <td class="bg-purple text-light">5</td>
                                <td>Larry</td>
                                <td>Kikat</td>
                                <td>.bg-purple</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Bootstrap 4 Table background <small>The contextual classes that can be used are:</small></h2>
                <ul class="header-dropdown dropdown">
                    
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><code class="w3-codespan">.table-primary</code></td>
                            <td>Blue: Indicates an important action</td>
                        </tr>
                        <tr>
                            <td><code class="w3-codespan">.table-success</code></td>
                            <td>Green: Indicates a successful or positive action</td>
                        </tr>
                        <tr>
                            <td><code class="w3-codespan">.table-danger</code></td>
                            <td>Red: Indicates a dangerous or potentially negative action</td>
                        </tr>
                        <tr>
                            <td><code class="w3-codespan">.table-info</code></td>
                            <td>Light blue: Indicates a neutral informative change or action</td>
                        </tr>
                        <tr>
                            <td><code class="w3-codespan">.table-warning</code></td>
                            <td>Orange: Indicates a warning that might need attention</td>
                        </tr>
                        <tr>
                            <td><code class="w3-codespan">.table-active</code></td>
                            <td>Grey: Applies the hover color to the table row or table cell</td>
                        </tr>
                        <tr>
                            <td><code class="w3-codespan">.table-secondary</code></td>
                            <td>Grey: Indicates a slightly less important action</td>
                        </tr>
                        <tr>
                            <td><code class="w3-codespan">.table-light</code></td>
                            <td>Light grey table or table row background</td>
                        </tr>
                        <tr>
                            <td><code class="w3-codespan">.table-dark</code></td>
                            <td>Dark grey table or table row background</td>
                        </tr>
                        </tbody>
                    </table>
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