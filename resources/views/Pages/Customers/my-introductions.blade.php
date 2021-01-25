@extends('Layouts.master')
@section('site_title', 'Backlink Satış')

@section('custom-header')
<style>
    @-webkit-keyframes rotating /* Safari and Chrome */ {
        from {
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    @keyframes rotating {
        from {
            -ms-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    .rotating {
        -webkit-animation: rotating 2s linear infinite;
        -moz-animation: rotating 2s linear infinite;
        -ms-animation: rotating 2s linear infinite;
        -o-animation: rotating 2s linear infinite;
        animation: rotating 2s linear infinite;
    }
</style>
@endsection

@section('content')

    @if(isset($purchases))

        <div class="modal fade" id="linkDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Linkinizi Silmek İstediğinize Emin misiniz?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> • Eğer silme işlemini onaylarsanız bu işlemi geri alamazsınız!</p>
                        <small style="color: orangered"><i> • Silme işleminden sonra kesinlikle kredi geri ödemesi </i><strong>Yapılmamaktadır!</strong></small>
                    </div>
                    <div class="modal-footer">
                        <button id="modal-btn-no" type="button" class="btn btn-secondary" data-dismiss="modal">Hayır
                        </button>
                        <button id="btnYesLink" type="submit" class="btn btn-primary">Evet</button>
                    </div>
                </div>
            </div>
        </div>

        @if(count($purchases) > 0)
            <div class="col-12">
                <div class="table-responsive">
                    <table id="allLinks" class="table header-border table-hover table-custom spacing7">
                        <thead>
                        <tr>
                            <th><strong>Tanıtım Alınan Site</strong></th>
                            <th><strong>Link</strong></th>
                            <th><strong>Durum</strong></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($purchases as $purchase)
                            <tr>
                                <td>
                                    {{ \App\IntroductionSite::find($purchase->introduction_site_id)->url }}
                                </td>
                                <td>
                                    <a class="text-info" target="_blank" href="{{ $purchase->post_url }}">{{ $purchase->post_url }}</a>
                                </td>
                                <td>
                                    @if($purchase->is_added == 0)
                                        <i class="fa fa-clock-o text-warning"></i> <span class="text-warning"> Eklenmeyi Bekliyor</span>
                                    @else
                                        <i class="fa fa-check text-success"></i> <span class="text-success"> Eklendi</span>
                                    @endif
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
                        <h5 class="card-title">Link Bulunamadı!</h5>
                        <p class="card-text">Görünüşe Göre Site(leri)niz İçin Henüz Hiç Link Satın Almamışsınız. Linkleri Görmek ve Satın Almak İçin Aşağıdaki Butona Tıklayabilirsiniz.</p>
                        <a href="{{route('customer-introduction-sites')}}" class="btn btn-info btn-block">Link Satın Al</a>
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
            window.location.href = "/customer/delete-my-link/" + id;
            $('[data-id=' + id + ']').remove();
            $('#linkDeleteModal').modal('hide');
        });
    </script>
@stop
