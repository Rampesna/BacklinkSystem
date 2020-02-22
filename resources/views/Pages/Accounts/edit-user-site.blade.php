@extends('Layouts.master')
@section('site_title', 'Backlink Satış')

@section('custom-header')

@endsection

@section('content')

    @if(isset($getSite))
        <form action="{{route('update-user-site')}}" method="post" class="row clearfix">
            {{csrf_field()}}
            <input type="hidden" name="site_id" value="{{$getSite->id}}">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Sitenin Durumu</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom spacing5">
                            <thead>
                            <tr>
                                <th>Site URL</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td><input class="form-control" type="text" name="site_url" value="{{$getSite->url}}"></td>
                                <td><input type="submit" value="Güncelle" class="btn btn-success btn-block"></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </form>
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
                $('#allAccounts').DataTable({
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
        $(document).ready(function() {
            $('.rotating').hide();
            $(".purchaseControl").click(function(e) {
                $(this).hide();
                var p_id = $(this).attr('purchase');
                $.ajax({
                    type: "get",
                    url: "{{route('link-control')}}",
                    data: {
                        purchase_id: $(this).attr('purchase'),
                    },
                    beforeSend: loadStart,
                    complete: loadStop,
                    success: function(result) {
                        if(result == "true"){
                            $("#purchase_i_id_"+p_id).addClass('fa-check');
                            $("#purchase_i_id_"+p_id).css({"color": "green"})
                        }else{
                            $("#purchase_i_id_"+p_id).addClass('fa-close');
                            $("#purchase_i_id_"+p_id).css({"color": "red"})
                        }
                    },
                    error: function(result) {
                        $("#purchase_i_id_"+p_id).addClass('fa-close');
                        $("#purchase_i_id_"+p_id).css({"color": "red"})
                    }
                });

                function loadStart() {
                    $('#loading_'+p_id).show();
                }
                function loadStop() {
                    $('#loading_' + p_id).hide();
                }
            });
        });
    </script>
@stop
