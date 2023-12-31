@extends('include.app')
@section('content')
    <div class="section-container contact-container">
        <div class="container">
            {{-- <center> --}}
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="section-container-spacer">
                        <h2 class="text-center">Form Kemitraan</h2>
                        <p class="text-center">Silahkan isi form dibawah ini untuk menjadi mitra kami</p>
                    </div>
                    <div class="card-container">
                        <div class="card card-shadow col-xs-8 col-xs-offset-1 col-md-16 col-md-offset-2 reveal">

                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach


                            <form action="{{ route('kemitraan') }}" method="post" class="reveal-content" id="my-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="name" name="nama"
                                                placeholder="Nama Depot">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="no_telepon"
                                                placeholder="No HP Aktif">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="2" name="alamat_depot" placeholder="Tulis Alamat Lengkap"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="stok"
                                                placeholder="Stok">
                                        </div>

                                        <div class="form-group">
                                            <div class="button-wrapper">
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-target="#modalUploadFoto">
                                                    <span class="d-none d-sm-block">Unggah foto</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                </button>

                                                <input type="hidden" name="foto" id="foto" value="">
                                                <div><small class="text-muted mb-0">Format : JPG, GIF, PNG. Maksimal
                                                        ukuran 2000
                                                        Kb</small></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div id="box-foto"></div>
                                            </div>
                                        </div>

                                        <br><br>

                                        <center>
                                            <button type="submit" class="btn btn-primary">Daftar Mitra</button>
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


    <!-- UPLOAD FOTO -->
    <div class="modal fade" id="modalUploadFoto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalUploadFotoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUploadFotoLabel">Unggah Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <span id="notif"></span>
                    <form action="{{ route('ganti_foto') }}" class="dropzone" id="upload-image" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm btn-simpan"
                        onclick="simpanFoto()">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\StoreDepotAirRequest', '#my-form'); !!}

    <script>
        Dropzone.options.uploadImage = {
            maxFilesize: 2000,
            acceptedFiles: ".jpeg,.jpg,.png",
            method: 'post',
            createImageThumbnails: true,
            init: function() {
                this.on("addedfile", file => {
                    $('.btn-simpan').attr('disabled', 'disabled').text('Loading...');
                });
            },
            success: function(file, response) {
                $('.btn-simpan').removeAttr('disabled').text('Tambahkan');
                const foto = response.file;
                $('.modal-body #notif').html(`<div class="alert alert-success">Foto berhasil diunggah</div>`);
                $('#foto').val(foto);
            },
            error: function(file, response) {
                $('.btn-simpan').removeAttr('disabled').text('Tambahkan');
                const pesan = response.message;
                $('.modal-body #notif').html(`<div class="alert alert-danger">${pesan}</div>`);
            }
        };


        function simpanFoto() {
            let foto = $('#foto').val();

            if (foto === '' || foto === null) {
                $('#notif').html(`<div class="alert alert-danger">Tidak dapat menambahkan foto</div>`);
            } else {
                $('#modalUploadFoto').modal('hide');
                $('#box-foto').html(`<img src="{{ url('/storage/${foto}') }}" class="rounded">`);
            }
        }
    </script>
@endsection
