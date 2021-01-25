@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')
    @php($user = \Illuminate\Support\Facades\Auth::user())


    @if(\App\Models\UserSitesTableModel::where('user_id',$user->id)->count() > 0)
        @if(isset($sites))

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table id="allLinks" class="table table-hover js-basic-example dataTable table-custom spacing5">
                                    <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Global Alexa</th>
                                        <th>Ülke Alexa</th>
                                        <th>Fiyat</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($sites as $site)
                                        <tr>
                                            <td>
                                                @if($user->introduction_balance > 0)
                                                    {{$site->url}}
                                                @else
                                                    {!! "<i class='small'>Siteyi Görebilmek İçin Lütfen Tanıtım Kredisi Yükleyiniz!</i>" !!}
                                                @endif
                                            </td>
                                            <td>{{$site->alexa_global}}</td>
                                            <td>{{$site->alexa_country}}</td>
                                            <td>
                                                ₺ {{$site->price}}
                                            </td>
                                            <td class="text-right">
                                                <button @if($user->introduction_balance < $site->price) disabled  @endif onclick="window.location.href = '{{route('buy-introduction-site',["id" => $site->id])}}'" style="color: white" class="btn btn-success">
                                                    @if($user->introduction_balance < $site->price)
                                                        Yetersiz Kredi
                                                    @else
                                                        Satın Al
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endif
    @else
        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="card border-warning">
                    <div class="card-header">Dikkat!</div>
                    <div class="card-body text-warning">
                        <h5 class="card-title">Eksik Bilgi Mevcut</h5>
                        <p class="card-text">Sistemde İşlem Yapabilmek İçin Öncelikle Kendi Site(leri)nizi Sisteme Eklemeniz Gerekmektedir.</p>

                        <p>Site(leri)nizi Eklemek İçin Lütfen <a class="btn btn-outline-success" href="{{route('add-site')}}">Tıklayın!</a></p>
                    </div>
                </div>

            </div>
        </div>
    @endif

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>


    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script>
        $('#allLinks').DataTable({
            language: {
                info: "_TOTAL_ Kayıttan _START_ - _END_ Arasındaki Kayıtlar Gösteriliyor.",
                infoEmpty: "Gösterilecek Hiç Kayıt Yok.",
                loadingRecords: "Kayıtlar Yükleniyor.",
                zeroRecords: "Tablo Boş",
                search: "Arama:",
                infoFiltered: "(Yoplam _MAX_ Kayıttan Filtrelenenler)",
                lengthMenu: "Sayfa Başı _MENU_ Kayıt Göster",
                /*
                buttons: {
                    copyTitle: "Panoya Kopyalandı.",
                    copySuccess:"Panoya %d Satır Kopyalandı",
                    copy: "Kopyala",
                    print: "Yazdır",
                },
    */
                paginate: {
                    first: "İlk",
                    previous: "Önceki",
                    next: "Sonraki",
                    last: "Son"
                },
            },
            dom: 'frtipl',

            /*
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ],
            */
            responsive: true
        });
    </script>

    <script>
        $('#linkDeleteModal').on('show', function () {
            var id = $(this).data('id'),
                removeBtn = $(this).find('.danger');
        })

        $('#allLinks').on('click', '.confirm-delete', function (e) {
            e.preventDefault();

            var id = $(this).data('id');
            $('#linkDeleteModal').data('id', id).modal('show');
        });

        $('#btnYesLink').click(function () {
            // handle deletion here
            var id = $('#linkDeleteModal').data('id');
            window.location.href = "/links/delete-link/" + id;
            $('[data-id=' + id + ']').remove();
            $('#linkDeleteModal').modal('hide');
        });
    </script>
@stop
