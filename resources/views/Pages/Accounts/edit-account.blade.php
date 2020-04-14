@extends('Layouts.master')
@section('site_title', 'Backlink Satış')

@section('custom-header')

@endsection

@section('content')

    <form enctype="multipart/form-data" class="row clearfix" method="post" action="{{route('update-account')}}">
        {{csrf_field()}}
        <input type="hidden" value="{{$account->id}}" name="id">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card">

                <div class="body">

                    <div class="row">
                        <div class="col-6">
                            <label for="basic-url">Ad Soyad</label>
                            <div class="input-group mb-3">
                                <input value="{{$account->name_surname}}" required name="name_surname" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="basic-url">Kullanıcı Adı</label>
                            <div class="input-group mb-3">
                                <input disabled value="{{$account->username}}" required name="username" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="basic-url">E-posta Adresi</label>
                            <div class="input-group mb-3">
                                <input value="{{$account->email}}" required name="email" type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="basic-url">Şifre</label>
                            <div class="input-group mb-3">
                                <input placeholder="••••••••" name="password" type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="basic-url">Telefon Numarası</label>
                            <div class="input-group mb-3">
                                <input value="{{$account->phone}}" minlength="10" maxlength="10" required name="phone" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="form-group">
                <a href="{{route('delete-account',\Illuminate\Support\Facades\Crypt::encrypt($account->id))}}" class="btn btn-block btn-outline-danger" type="submit">Hesabı Sil</a>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-success" type="submit">Güncelle</button>
            </div>


            <div class="card">
                <div class="body">
                    <div class="row">
                        <div class="col-12">
                            <label for="basic-url">Kalan Kredi</label>
                            <div class="input-group mb-3">
                                <input value="{{$account->balance}}" maxlength="10" required name="balance" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </form>

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

@stop
