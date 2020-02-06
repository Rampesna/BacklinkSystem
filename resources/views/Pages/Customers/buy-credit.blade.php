@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')
    <div class="row clearfix">
        <div class="col-lg-8 col-md-6">
            @if(isset($errorMessage))
                <div class="card border-warning">
                    <div class="card-header">Dikkat!</div>
                    <div class="card-body text-warning">
                        <h5 class="card-title">Bekleyen İşlem</h5>
                        <p class="card-text">{{$errorMessage}}</p>
                        <p>Beklediğiniz İçin Teşekkür Ederiz</p>
                    </div>
                </div>
            @else
                <div class="card w_card3">
                    <div class="body">
                        <form action="{{route('buy-credit-post')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Ödeme Yapılan Hesabın Adı Soyadı</label>
                                        <input placeholder="Örn: İsim Soyisim" type="text" maxlength="160" name="name_surname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>IBAN</label>
                                        <input placeholder="Örn: TR001111222233334444555566" type="text" maxlength="26" name="iban" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label>Yapılan Ödeme Miktarı</label>
                                    <div class="input-group">
                                        <input name="amount" ref="" type="text" class="form-control" aria-label="Tutar" placeholder="Tutar Giriniz">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                            <span class="input-group-text">₺</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="submit" value="Bildir" class="btn btn-success btn-block">

                        </form>
                    </div>
                </div>
            @endif

        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card w_card3">
                <div class="body">
                    <div class="text-center">
                        <img style="width: 60%;height: auto" src="{{asset('assets/images/qnb.png')}}">
                        <h4 class="m-t-25 mb-0">Hesap Bilgileri</h4>
                        <p></p>
                        <p></p>
                    </div>
                    <table class="table card-table mb-0">
                        <tbody>
                        <tr>
                            <td class="font-weight-bold">
                                Alıcı
                            </td>
                            <td class="text-right">
                                Yunus Kahraman
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">
                                Şube Adı
                            </td>
                            <td class="text-right">
                                Malatya
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">
                                Şube Kodu
                            </td>
                            <td class="text-right">
                                03663
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">
                                Hesap No
                            </td>
                            <td class="text-right">
                                62633026
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">
                                IBAN
                            </td>
                            <td class="text-right">
                                TR32 0011 1000 0000 0062 6330 26
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <h4>Not</h4>
            <div class="card w_card3">
                <div class="body">
                    <p>
                        • Lütfen Sadece HAVALE/EFT İşlemini Gerçekleştirdikten Sonra Ödeme Bildiriminde Bulunun.
                    </p>
                    <p>
                        • Aynı Anda Sadece 1 Ödeme Bildiriminde Bulunulabilir. Bildirimde Bulunduktan Sonra Onay/Red Alana Kadar Bir Başka Bildirim Sağlayamazsınız.
                    </p>
                    <p>
                        • Saat 16:45'den Sonra Yapacağınız EFT İşlemleriniz Ertesi Gün Gerçekleşeceği İçin Onay ve Kredi Yükleme İşlemlerinizde Ertesi Gün Gerçekleşecektir.
                    </p>
                </div>
            </div>
        </div>
    </div>

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
