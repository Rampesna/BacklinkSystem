@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @php($user = \Illuminate\Support\Facades\Auth::user())

    @if(isset($myPremiumSites))
        @if(count($myPremiumSites) > 0)
            <div class="col-12">
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
                        <h5 class="card-title">Premium Site Bulunamadı!</h5>
                        <p class="card-text">Görünüşe Göre Henüz Hiç Premium Site Kaydetmemişsiniz. Premium Site(leri)nizi Eklemek İçin Aşağıdaki Butona Tıklayın.</p>
                        <a href="{{route('add-premium-site')}}" class="btn btn-info btn-block">Premium Site Ekle</a>
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
