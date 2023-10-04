<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/assets/apple-icon-180x180.png') }}">
    <link href="{{ asset('front/assets/favicon.ico') }}" rel="icon">

    <link href="" rel="stylesheet">
    <title>Depot Air Minum</title>

    <link href="{{ 'main.550dcf66.css' }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        header {
            background: url({{ asset('front/assets/images/wave-header.svg') }});
            text-align: center;
            font-size: 20px;
            color: white;
            padding: 10px;
        }

        .main {
            background-color: #00aeef;
            position: relative;
            display: block;
            box-sizing: border-box;
            width: 70%;
        }

        input-container {
            wi.dth: 75%;
            margin-bottom: 15px;
        }

        .kotak_login {
            width: 450px;
            background: white;
            margin: 80px auto;
            padding: 30px 20px;
        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .background {
            background-image: url(img/air-minum.jpg);
            no-repeat fixed;
            background-size: 100%;
        }

        /* Set a style for the submit button */
        .btnn {
            box-shadow: inset 0px -3px 7px 0px #00a1eb;
            background: linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
            background-color: darkblue;
            border-radius: 3px;
            border: 1px solid #0b0e07;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-size: 15px;
            padding: 9px 23px;
            text-decoration: none;
            text-shadow: 0px 1px 0px #263666;
        }

        .btn:hover {
            opacity: 1;
        }

        .center-text h2 {
            color: #111;
            font-size: 28px;
            text-transform: capitalize;
            text-align: center;
            margin-bottom: 30px;
        }

        .center-text span {
            color: #EE1C47;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, auto));
            gap: 3rem;
        }

        .row {
            position: relative;
            transition: all .40s;
        }

        .row img {
            width: 50%;
            height: auto;
            transition: all .40s;
        }

        .row img:hover {
            transform: scale(0.9);
        }

        .product-text h5 {
            position: absolute;
            top: 13px;
            left: 13px;
            color: #fff;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            background-color: #27b737;
            padding: 3px 10px;
            border-radius: 2px;
        }

        .heart-icon {
            position: absolute;
            right: 0;
            font-size: 20px;
        }

        .heart-icon:hover {
            color: #EE1C47;
        }

        .ratting i {
            color: #FF8C00;
            font-size: 18px;
        }

        .price h4 {
            color: #111;
            font-size: 16px;
            text-transform: capitalize;
            font-weight: 400;
        }

        .price p {
            color: #151515;
            font-size: 14px;
            font-weight: 600;
        }

        .client-reviews {
            background-color: #F3F4F6;
        }

        .reviews {
            text-align: center;
        }

        .reviews h3 {
            color: #111;
            font-size: 25px;
            text-transform: capitalize;
            text-align: center;
            font-weight: 700;
        }

        .reviews img {
            width: 40px;
            height: 40px;
            border-radius: 50px;
            margin: 10px 0;
        }

        .reviews p {
            color: #707070;
            font-size: 16px;
            font-weight: 400;
            line-height: 25px;
            margin-bottom: 10px;
        }

        .reviews h2 {
            font-size: 22px;
            color: #000;
            font-weight: 400;
            text-transform: capitalize;
            margin-bottom: 2px;
        }

        /* update-section-css */
        .up-center-text h2 {
            text-align: center;
            color: #111;
            font-size: 25px;
            text-transform: capitalize;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .cart img {
            width: 380px;
            height: auto;
            border-radius: 5px;
        }

        .update-cart {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, auto));
            gap: 1rem;
        }

        .cart h5 {
            color: #636872;
            font-size: 14px;
            text-transform: capitalize;
            font-weight: 500;
        }

        .cart h4 {
            color: #111;
            font-size: 18px;
            font-weight: 600;
        }

        .cart p {
            color: #707070;
            font-size: 15px;
            max-width: 380px;
            line-height: 25px;
            margin-bottom: 12px;
        }

        .cart h6 {
            color: #151515;
            font-size: 14px;
            font-weight: 500;
        }

        /* contact-section */
        .contact {
            background-color: #f3f4f6;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, auto));
            gap: 3rem;
        }

        .first-info img {
            width: 140px;
            height: auto;
        }

        .contact-info h4 {
            color: #212529;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .contact-info p {
            color: #565656;
            font-size: 14px;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 1.5;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all .42s;
        }

        .contact-info p:hover {
            color: #EE1C47;
        }

        .social-icon i {
            color: #565656;
            margin-right: 10px;
            font-size: 20px;
            transition: all .42s;
        }

        .social-icon i:hover {
            transform: scale(1.3);
        }

        .end-text {
            background-color: #edfff1;
            text-align: center;
            padding: 20px;
        }

        .end-text p {
            color: #111;
            text-transform: capitalize;
        }

        .link{
            color: #212121;
            background: none !important;
            border: none !important;
            margin-left: 20px;
        }

        .profil-btn .btn{
            border: none !important;
            background: none
        }
        .profil-btn img{
            width: 50px;
        }

        @media(max-width:890px) {
            header {
                padding: 20px 3%;
                transition: .4s;
            }
        }

        @media(max-width:630px) {
            .main-text h1 {
                font-size: 50px;
                transition: .4s;
            }

            .main-text p {
                font-size: 18px;
                transition: .4s;
            }

            .main-btn {
                padding: 10px 20px;
                transition: .4s;
            }
        }

        @media(max-width:750px) {
            .navmenu {
                position: absolute;
                top: 100%;
                right: -100%;
                width: 300px;
                height: 130vh;
                background: #edfff1;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 120px 30px;
                transition: all .42s;
            }

            .navmenu a {
                display: block;
                margin: 18px 0;
            }

            .navmenu.open {
                right: 0;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.html" title="">
                        <img src="{{ asset('front/assets/images/depot.jpeg') }}" width="50" alt="">
                        FIRVEN DEPOT
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/" title="">Beranda</a></li>
                        @auth
                            <li><a href="{{ route('pesanan') }}" title="">Pesanan</a></li>
                            <li><a href="{{ route('riwayat') }}" title="">Riwayat</a></li>
                            <li><a href="{{ route('kemitraan') }}" title="">Join Kemitraan</a></li>
                        @endauth
                        <li><a href="{{ route('tentang') }}" title="">Tentang Kami</a></li>
                        @if (Auth::check())
                            <li>
                                <!-- Single button -->
                                <div class="btn-group profil-btn">
                                    <button type="button" class="btn dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ url('/img/favicon.png') }}" alt="">
                                        {{ Auth::user()->email }} <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profil</a></li>
                                        <li><a href="#">Password</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="link" title="">Keluar</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <p>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btnn btn-default navbar-btn"
                                        title="">Keluar</button>
                                </form>

                                </p> --}}
                            </li>
                        @else
                            <li>
                                <p>
                                    <a href="{{ route('login') }}" class="btnn btn-default navbar-btn"
                                        title="">Masuk</a>
                                </p>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            navbarFixedTopAnimation();
        });
    </script>

    <footer class="footer-container white-text-container">
        <div class="container">
            <div class="row">


                <div class="col-xs-12">
                    <h3>FIRVEN DEPOT AIR MINUM </h3>

                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <p><small>Memudahkan Anda Untuk Mencari Air Minum Isi Ulang <a
                                        href="http://www.mashup-template.com/"
                                        title="Create website with free html template"></small>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <p class="text-right">
                                <a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon"
                                    title="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon"
                                    title="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon"
                                    title="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            navActivePage();
            scrollRevelation('.reveal');
        });
    </script>

</body>

</html>
