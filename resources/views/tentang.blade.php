@extends('include.app')
@section('content')
    
<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="text-center">
                    <h2>Tentang Kami</h2>
                    <p>Depot Air Minum ini dibangun untuk mempermudah para pelanggan di daerah kabupaten bandung
                        untuk memesan galon dari rumah.
                        <br>
                        supaya para pelanggan tidak susah lagi untuk membawa galon dari rumah ke depot air minum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">


                <div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img class="img-responsive" src="{{ asset('front/assets/images/embun.jpeg') }}" alt="First slide">
                            <div class="carousel-caption card-shadow reveal">

                                <h3>Galon Isi Ulang</h3>
                                <p>
                                Galon isi ulang berfungsi sebagai wadah atau tempat untuk menampung atau menyimpan 
                                air minum didalamnya. Pengisian wadah dilakukan dengan menggunakan alat dan mesin 
                                serta dilakukan dalam tempat pengisian yang higienis.
                                </p>

                                <p>
                                Galon isi ulang atau polikarbonat adalah botol plastik keras, yang populer dipakai 
                                untuk air minum kemasan.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>
</div>


<div class="section-container contact-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="section-container-spacer">
                    <h2 class="text-center">Feedback</h2>
                    <p class="text-center">Jika ingin memberi masukan silahkan isi di bawah ini dengan benar</p>
                </div>
                <div class="card-container">
                    <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
                        <form action="" class="reveal-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                                <div class="col-md-5">
                                    <ul class="list-unstyled address-container">
                                        <li>
                                            <span class="fa-icon">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>
                                            + 62 85171521905
                                        </li>
                                        <li>
                                            <span class="fa-icon">
                                                <i class="fa fa fa-map-o" aria-hidden="true"></i>
                                            </span>
                                                 Jl. Telekomunikasi No.1, 
                                                 Sukapura, Kec. Dayeuhkolot, 
                                                 Kabupaten Bandung, Jawa Barat 40257
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-image col-xs-12" style="background-image: url({{ asset('front/assets/images/img-01.jpg') }}')">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection