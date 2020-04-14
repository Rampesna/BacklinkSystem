@extends('Layouts.master')
@section('site_title', 'Backlink Satış')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))
@section('content')

    @if(isset($allPosts))

        <div class="modal fade" id="postDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Silmek İstediğinize Emin misiniz?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button id="modal-btn-no" type="button" class="btn btn-secondary" data-dismiss="modal">Hayır
                        </button>
                        <button id="btnYesPost" type="submit" class="btn btn-primary">Evet</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="allPosts" class="table table-custom2 table-hover">
                        <thead>
                        <tr>
                            <th>Tarih</th>
                            <th>Başlık</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($allPosts as $post)

                            <tr>
                                <td>{{strftime("%Y-%m-%d %H:%M:%S",strtotime($post->created_at))}}</td>
                                <td><span>{{$post->title}}</span></td>
                                <td class="float-right mr-3">
                                    <a href="{{route('edit-post',\Illuminate\Support\Facades\Crypt::encrypt($post->id))}}" class="btn btn-success">Düzenle</a>
                                    <a data-id="{{\Illuminate\Support\Facades\Crypt::encrypt($post->id)}}"
                                       data-whatever="{{\Illuminate\Support\Facades\Crypt::encrypt($post->id)}}" href="#"
                                       class="btn btn-warning confirm-delete"
                                       data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;">Sil</a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                    @if(count($allPosts) > 0)
                        @if($page == 1)
                            @if(count($allPosts) > 10)
                                <ul class="pagination mt-2">
                                    <li class="page-item"><a style="color:#e9ecef" class="page-link" href="javascript:void(0);">Önceki</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{$page}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('all-posts',$page + 1)}}">{{$page + 1}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('all-posts',$page + 2)}}">{{$page + 2}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('all-posts',$page + 1)}}">Sonraki</a></li>
                                </ul>
                            @endif
                        @else
                            <ul class="pagination mt-2">
                                <li class="page-item"><a class="page-link" href="{{route('all-posts',$page - 1)}}">Önceki</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('all-posts',$page - 1)}}">{{$page - 1}}</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{$page}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('all-posts',$page + 1)}}">{{$page + 1}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('all-posts',$page + 1)}}">Sonraki</a></li>
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

    <script>
        $('#postDeleteModal').on('show', function () {
            var id = $(this).data('id'),
                removeBtn = $(this).find('.danger');
        })

        $('#allPosts').on('click', '.confirm-delete', function (e) {
            e.preventDefault();

            var id = $(this).data('id');
            $('#postDeleteModal').data('id', id).modal('show');
        });

        $('#btnYesPost').click(function () {
            // handle deletion here
            var id = $('#postDeleteModal').data('id');
            window.location.href = "/admin-blog/delete-post/" + id;
            $('[data-id=' + id + ']').remove();
            $('#postDeleteModal').modal('hide');
        });
    </script>
@stop

