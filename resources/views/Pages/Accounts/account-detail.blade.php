@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Example Tab 3 <small><code class="highlighter-rouge">.nav-tabs3</code></small></h2>
                </div>
                <div class="body">
                    <ul class="nav nav-tabs3">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-new2">Home</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-new2">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Contact-new2">Contact</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="Home-new2">
                            <h6>Home</h6>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui.</p>
                        </div>
                        <div class="tab-pane" id="Profile-new2">
                            <h6>Profile</h6>
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel </p>
                        </div>
                        <div class="tab-pane" id="Contact-new2">
                            <h6>Contact</h6>
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. helvetica</p>
                        </div>
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

                    /*
                    buttons: [
                        'copy', 'excel', 'pdf', 'print'
                    ],
                    */
                    responsive: true
                });
            </script>
@stop
