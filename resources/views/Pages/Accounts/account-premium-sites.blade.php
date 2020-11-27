@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($premiumSites))
        @if(count($premiumSites) > 0)
            <div class="col-12">
                <div class="table-responsive">
                    <table id="allSites" class="table header-border table-hover table-custom spacing7">
                        <thead>
                        <tr>
                            <th>URL</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($premiumSites as $site)
                            <tr>
                                <td>
                                    @php($userSite = App\Models\UserSitesTableModel::find($site->site_id))
                                    <a style="color: #0c8ec3" href="{{route('account-premium-site',\Illuminate\Support\Facades\Crypt::encrypt($site->site_id))}}">{{$userSite->url}}</a>
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
                        <p class="card-text">Müşteri Henüz Hiçbir Sitesini Premium Olarak Ayarlamamış!</p>
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
