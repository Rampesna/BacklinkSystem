@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @php($user = \Illuminate\Support\Facades\Auth::user())
    <div class="modal fade" id="siteDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silmek İstediğinize Emin misiniz?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> • Eğer silme işlemini onaylarsanız bu siteniz için almış olduğunuz tüm linkler iptal edilecektir!</p>
                    <small style="color: orangered"><i> • İptal işleminden sonra kesinlikle kredi geri ödemesi </i><strong>Yapılmamaktadır!</strong></small>
                </div>
                <div class="modal-footer">
                    <button id="modal-btn-no" type="button" class="btn btn-secondary" data-dismiss="modal">Hayır
                    </button>
                    <button id="btnYesSite" type="submit" class="btn btn-primary">Evet</button>
                </div>
            </div>
        </div>
    </div>
    @if(isset($mySites))

        @if(count($mySites) > 0)
            <div class="col-12">
                <a href="{{route('add-site')}}" class="btn btn-info btn-block bg-dark">Yeni Site Ekle</a>
                <hr>
                <div class="table-responsive">

                    <table id="allSites" class="table header-border table-hover table-custom spacing7">
                        <thead>
                        <tr>
                            <th>URL</th>
                            <th>İncele</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($mySites as $site)
                            <tr>
                                <td>{{$site->url}}</td>
                                <td>
                                    <button @if($user->is_premium == 0) disabled @endif onclick="window.location.href = '{{route('index')}}'" style="color: white" class="btn btn-info">Siteyi Analiz Et <small><i> (Sadece Premium Hesaplar) </i></small></button>
                                </td>
                                <td>
                                    <a href="{{route('edit-site',$site->id)}}" style="color: #00A6C7" class="fa fa-edit"></a>&nbsp;&nbsp;
                                    <a data-id="{{$site->id}}"
                                       data-whatever="{{$site->url}}" href="#"
                                       class="fa fa-trash confirm-delete"
                                       data-toggle="modal" data-target="#siteDeleteModal" style="text-decoration: none;"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Site Bulunamadı!</h5>
                        <p class="card-text">Görünüşe Göre Henüz Hiç Site Kaydetmemişsiniz. Site(leri)nizi Eklemek İçin Aşağıdaki Butona Tıklayın.</p>
                        <a href="{{route('add-site')}}" class="btn btn-info btn-block">Site Ekle</a>
                    </div>
                </div>
            </div>
        @endif

    @endif

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
@stop

@section('page-script')

    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>


    <script>
        $('#siteDeleteModal').on('show', function () {
            var id = $(this).data('id'),
                removeBtn = $(this).find('.danger');
        })

        $('#allSites').on('click', '.confirm-delete', function (e) {
            e.preventDefault();

            var id = $(this).data('id');
            $('#siteDeleteModal').data('id', id).modal('show');
        });

        $('#btnYesSite').click(function () {
            // handle deletion here
            var id = $('#siteDeleteModal').data('id');
            window.location.href = "/my-account/delete-site/" + id;
            $('[data-id=' + id + ']').remove();
            $('#siteDeleteModal').modal('hide');
        });
    </script>
@stop
