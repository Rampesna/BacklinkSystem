@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Helper Class')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Text Align <small>You can use classes which names are <code>.align-left, .align-center, .align-right, .align-justify</code></small></h2>
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
                <div class="row clearfix">
                    <div class="col-md-3">
                        <p class="align-left"><b>Align Left</b></p>
                        <div class="align-left">incididunt ut labore et dolore magna aliqua. Utonsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-center"><b>Align Center</b></p>
                        <div class="align-center"> Lorem ipsum dolor sit amet, consectetur  laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-right"><b>Align Right</b></p>
                        <div class="align-right"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-justify"><b>Align Justify</b></p>
                        <div class="align-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. aliquip excillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Float Classes</h2>
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
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap" width="150">Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap"><code>.float-left</code></td>
                                        <td>Element to the left (float:left).</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.float-right</code></td>
                                        <td>Element to the right(float:right).</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.clearfix</code></td>
                                        <td>To Clear floats.(clreafix)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="table-responsive">                                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap" width="150">Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap"><code>.displayblock</code></td>
                                        <td>Element to Show (display: block)</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.displaynone</code></td>
                                        <td>Element to hide (display: none)</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.inlineblock</code></td>
                                        <td>Element to inline (display: inline-block)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Margin Padding Spaces <small>You can use classes which names are <code>.m-t-10, .m-t--10, .m-r-5, .p-t-10, .p-b-5</code></small></h2>
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
                <p><b>Margins</b></p>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">T</span>op <span class="text-danger font700">10</span>px → <code>.m-t-10</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">T</span>op <span class="text-danger font700">0</span>px → <code>.m-t-0</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">T</span>op <span class="text-danger font700">-10</span>px → <code>.m-t--10</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">L</span>eft <span class="text-danger font700">35</span>px → <code>.m-l-35</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">L</span>eft <span class="text-danger font700">0</span>px → <code>.m-l-0</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">L</span>eft <span class="text-danger font700">-35</span>px → <code>.m-l--35</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">B</span>ottom <span class="text-danger font700">15</span>px → <code>.m-b-15</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">B</span>ottom <span class="text-danger font700">0</span>px → <code>.m-b-0</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">B</span>ottom <span class="text-danger font700">-20</span>px → <code>.m-b--20</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">R</span>ight <span class="text-danger font700">30</span>px → <code>.m-r-30</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">R</span>ight <span class="text-danger font700">0</span>px → <code>.m-r-0</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">M</span>argin <span class="text-danger font700">R</span>ight <span class="text-danger font700">-30</span>px → <code>.m-r--30</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">ALL M</span>argin <span class="text-danger font700">0</span>px → <code>.margin-0</code></div>
                </div>
            </div>
            <div class="body">
                <p><b>Paddings</b></p>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">P</span>adding <span class="text-danger font700">T</span>op <span class="text-danger font700">10</span>px → <code>.p-t-10</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">P</span>adding <span class="text-danger font700">T</span>op <span class="text-danger font700">0</span>px → <code>.p-t-0</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">P</span>adding <span class="text-danger font700">L</span>eft <span class="text-danger font700">35</span>px → <code>.p-l-35</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">P</span>adding <span class="text-danger font700">L</span>eft <span class="text-danger font700">0</span>px → <code>.p-l-0</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">P</span>adding <span class="text-danger font700">B</span>ottom <span class="text-danger font700">15</span>px → <code>.p-b-15</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">P</span>adding <span class="text-danger font700">B</span>ottom <span class="text-danger font700">0</span>px → <code>.p-b-0</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">P</span>adding <span class="text-danger font700">R</span>ight <span class="text-danger font700">30</span>px → <code>.p-r-30</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">P</span>adding <span class="text-danger font700">R</span>ight <span class="text-danger font700">0</span>px → <code>.p-r-0</code></div>
                    <div class="col-lg-4 col-md-6"><span class="text-danger font700">ALL P</span>adding <span class="text-danger font700">0</span>px → <code>.padding-0</code></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Grid options</h2>
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
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">
                                Extra small<br>
                                <small>&lt;576px</small>
                            </th>
                            <th class="text-center">
                                Small<br>
                                <small>≥576px</small>
                            </th>
                            <th class="text-center">
                                Medium<br>
                                <small>≥768px</small>
                            </th>
                            <th class="text-center">
                                Large<br>
                                <small>≥992px</small>
                            </th>
                            <th class="text-center">
                                Extra large<br>
                                <small>≥1200px</small>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-nowrap" scope="row">Max container width</th>
                            <td>None (auto)</td>
                            <td>540px</td>
                            <td>720px</td>
                            <td>960px</td>
                            <td>1140px</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Class prefix</th>
                            <td><code>.col-</code></td>
                            <td><code>.col-sm-</code></td>
                            <td><code>.col-md-</code></td>
                            <td><code>.col-lg-</code></td>
                            <td><code>.col-xl-</code></td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row"># of columns</th>
                            <td colspan="5">12</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Gutter width</th>
                            <td colspan="5">30px (15px on each side of a column)</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Nestable</th>
                            <td colspan="5">Yes</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Column ordering</th>
                            <td colspan="5">Yes</td>
                        </tr>
                    </tbody>
                </table>
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