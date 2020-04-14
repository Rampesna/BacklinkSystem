@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    <div class="modal fade" id="accountDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <button id="btnYesAccount" type="submit" class="btn btn-primary">Evet</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table id="allAccounts" class="table table-hover js-basic-example dataTable table-custom spacing5">
                            <thead>
                            <tr>
                                <th>Kayıt Tarihi</th>
                                <th>Ad Soyad</th>
                                <th>Kullanıcı Adı</th>
                                <th>E-posta</th>
                                <th>Telefon</th>
                                <th>Kredi</th>
                                <th>Düzenle</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($allAccounts as $account)
                            <tr>
                                <td>{{strftime("%Y-%m-%d %H:%M:%S",strtotime($account->created_at))}}</td>
                                <td>{{$account->name_surname}}</td>
                                <td>{{$account->username}}</td>
                                <td>{{$account->email}}</td>
                                <td>{{"+90 (".substr($account->phone,0,3).") ".substr($account->phone,3,3)." ".substr($account->phone,6,4)}}</td>
                                <td style="color: #00aa00">{{$account->balance}} ₺</td>
                                <td>
                                    <a href="{{route('account-detail',\Illuminate\Support\Facades\Crypt::encrypt($account->id))}}"><i style="color: #00A6C7" class="fa fa-eye"></i></a>&nbsp;&nbsp;
                                    <a href="{{route('edit-account',\Illuminate\Support\Facades\Crypt::encrypt($account->id))}}"><i style="color: #00A6C7" class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                    <a data-id="{{\Illuminate\Support\Facades\Crypt::encrypt($account->id)}}"
                                       data-whatever="{{\Illuminate\Support\Facades\Crypt::encrypt($account->id)}}" href="#"
                                       class="fa fa-trash confirm-delete"
                                       data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;color: #00A6C7"></a>
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
                    "order": [[ 0, "desc" ]],

                    /*
                    buttons: [
                        'copy', 'excel', 'pdf', 'print'
                    ],
                    */
                    responsive: true
                });
            </script>

    <script>
        $('#accountDeleteModal').on('show', function () {
            var id = $(this).data('id'),
                removeBtn = $(this).find('.danger');
        })

        $('#allAccounts').on('click', '.confirm-delete', function (e) {
            e.preventDefault();

            var id = $(this).data('id');
            $('#accountDeleteModal').data('id', id).modal('show');
        });

        $('#allAccounts').on('click', '.linkControl', function (e) {
            e.preventDefault();
            $(this).hide();
            var link_id = $(this).attr('link');
            $.ajax({
                type: "get",
                url: "{{route('link-admin-control')}}",
                data: {
                    link_id: $(this).attr('link'),
                },
                beforeSend: loadStart,
                complete: loadStop,
                success: function(result) {
                    if(result == "true"){
                        $("#link_i_id_"+link_id).addClass('fa-check');
                        $("#link_i_id_"+link_id).css({"color": "green"})
                    }else{
                        $("#link_i_id_"+link_id).addClass('fa-close');
                        $("#link_i_id_"+link_id).css({"color": "red"})
                    }
                },
                error: function(result) {
                    $("#link_i_id_"+link_id).addClass('fa-close');
                    $("#link_i_id_"+link_id).css({"color": "red"})
                }
            });

            function loadStart() {
                $('#loading_'+link_id).show();
            }
            function loadStop() {
                $('#loading_' + link_id).hide();
            }
        });

        $('#btnYesAccount').click(function () {
            // handle deletion here
            var id = $('#accountDeleteModal').data('id');
            window.location.href = "/account/delete-account/" + id;
            $('[data-id=' + id + ']').remove();
            $('#accountDeleteModal').modal('hide');
        });
    </script>
@stop
