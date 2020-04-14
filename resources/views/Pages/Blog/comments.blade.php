@extends('Layouts.master')
@section('site_title', 'Backlink Satış')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))
@section('content')

    @if(isset($allComments))

        <div class="modal fade" id="commentDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <button id="btnYesComment" type="submit" class="btn btn-primary">Evet</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="allComments" class="table table-custom2 table-hover">
                        <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>E-posta</th>
                            <th>Yorum</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($allComments as $comment)

                            <form action="{{route('confirm-comment')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                <tr>
                                    <td>{{$comment->name_surname}}</td>
                                    <td>{{$comment->email}}</td>
                                    <td><textarea required name="edited_comment" class="form-control">{{$comment->content}}</textarea></td>
                                    <td class="float-right mr-3">
                                        <button type="submit" class="btn btn-success">Onayla</button>
                                        <a data-id="{{\Illuminate\Support\Facades\Crypt::encrypt($comment->id)}}"
                                           data-whatever="{{\Illuminate\Support\Facades\Crypt::encrypt($comment->id)}}" href="#"
                                           class="btn btn-warning confirm-delete"
                                           data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;">Sil</a>
                                    </td>
                                </tr>
                            </form>


                        @endforeach

                        </tbody>
                    </table>
                    @if(count($allComments) > 0)
                        @if($page == 1)
                            @if(count($allComments) > 10)
                                <ul class="pagination mt-2">
                                    <li class="page-item"><a style="color:#e9ecef" class="page-link" href="javascript:void(0);">Önceki</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{$page}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('waiting-comments',$page + 1)}}">{{$page + 1}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('waiting-comments',$page + 2)}}">{{$page + 2}}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{route('waiting-comments',$page + 1)}}">Sonraki</a></li>
                                </ul>
                            @endif
                        @else
                            <ul class="pagination mt-2">
                                <li class="page-item"><a class="page-link" href="{{route('waiting-comments',$page - 1)}}">Önceki</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('waiting-comments',$page - 1)}}">{{$page - 1}}</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{$page}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('waiting-comments',$page + 1)}}">{{$page + 1}}</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('waiting-comments',$page + 1)}}">Sonraki</a></li>
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
        $('#commentDeleteModal').on('show', function () {
            var id = $(this).data('id'),
                removeBtn = $(this).find('.danger');
        })

        $('#allComments').on('click', '.confirm-delete', function (e) {
            e.preventDefault();

            var id = $(this).data('id');
            $('#commentDeleteModal').data('id', id).modal('show');
        });

        $('#btnYesComment').click(function () {
            // handle deletion here
            var id = $('#commentDeleteModal').data('id');
            window.location.href = "/admin-blog/delete-comment/" + id;
            $('[data-id=' + id + ']').remove();
            $('#commentDeleteModal').modal('hide');
        });
    </script>
@stop

