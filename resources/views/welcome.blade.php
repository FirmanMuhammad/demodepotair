@extends('include.app')
@section('content')
    <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Depot Air Sekitar </h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="products">
                    @foreach ($data as $d)
                        <div class="col-sm-6">
                            {{-- <div class="row" style="width: 500px;"> --}}
                            <img src="{{ asset('front/assets/images/bojong.jpeg') }}" width="100%" alt="">
                            <div class="price">
                                <h1>{{ $d->nama_depot }}</h1>
                                <h4>{{ $d->alamat_depot }}</h4>
                                <h4>{{ $d->no_telepon }}</h4>
                                <p>
                                    <a href="{{ route('pesanan') }}" class="btnn btn-default navbar-btn"
                                        title="">Pesan</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>
@endsection
