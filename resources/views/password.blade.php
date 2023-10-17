@extends('include.app')
@section('content')
    <div class="section-container contact-container">
        <div class="container">
            {{-- <center> --}}
            <div class="row" id="app">
                <div class="col-xs-12 col-md-12">
                    <div class="section-container-spacer">
                        <h2 class="text-center">Ganti password</h2>
                    </div>
                    <div class="card-container">
                        <div class="card card-shadow col-xs-8 col-xs-offset-1 col-md-16 col-md-offset-2 reveal">

                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach

                            @if (session()->has('pesan'))
                                {!! session('pesan') !!}
                            @endif


                            <form action="{{ route('password') }}" method="post" class="reveal-content">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password_lama"
                                                placeholder="Password lama">
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Password baru">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password_confirmation"
                                                placeholder="Konfirmasi Password baru">
                                        </div>

                                        <br><br>

                                        <center>
                                            <button type="submit" class="btn btn-primary">Update</button>

                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
                        </div>
                    </div>
                </div>
            </div>
            {{-- </center> --}}
        </div>
    </div>


    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endsection
