@extends('include.app')
@section('content')
    <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Depot Air Sekitar </h2>
        </div>

        <div class="products">
            @foreach ($data as $d)
                <div class="row" style="width: 500px;">
                    <img src="{{ asset('front/assets/images/bojong.jpeg') }}" width="20px" alt="">
                    <div class="price">
                        <p>{{ $d->nama }}</p>
                        <h4>{{ $d->alamat_depot }}</h4>
                        <h4>{{ $d->no_telepon }}</h4>
                        <p>
                            <a href="pemesanan.php" class="btnn btn-default navbar-btn" title="">Pesan</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection
