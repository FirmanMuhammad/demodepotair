@extends('include.app')
@section('content')
    <div class="section-container contact-container">
        <div class="container">
            <center>
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="section-container-spacer">
                            <h2 class="text-center">Form Pemesanan</h2>
                            <p class="text-center">Silahkan isi form dibawah ini untuk pemesanan online galon air</p>
                        </div>
                        <div class="card-container" id="app">
                            <div class="card card-shadow col-xs-8 col-xs-offset-1 col-md-16 col-md-offset-2 reveal">

                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach

                                <form action="{{ route('pesanan.store') }}" method="post" class="reveal-content" id="my-form">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" name="jenis" v-model="jenis">
                                                    <option value="">-- Jenis Galon --</option>
                                                    @foreach ($data as $d)
                                                        <option value="{{ $d->jenis }}">{{ $d->jenis }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="number" class="form-control" name="jumlah" v-model="jumlah"
                                                placeholder="Masukan Jumlah">

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit Pesanan</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\PesananRequest', '#my-form'); !!}

@endsection
