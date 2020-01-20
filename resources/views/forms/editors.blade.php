@extends('layout.master')
@section('parentPageTitle', 'Form ')
@section('title', 'CKEditor')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <textarea id="ckeditor">
                    <h2>WYSIWYG Editor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                    <h3>Lacinia</h3>
                    <ul>
                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                        <li>Praesent non lacinia mi.</li>
                        <li>Mauris a ante neque.</li>
                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                    </ul>
                    <h3>Pellentesque adipiscing</h3>
                    <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                </textarea>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/editors.js') }}"></script>
@stop