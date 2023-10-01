@extends('include.app')
@section('content')
<div class="section-container contact-container">
    <div class="container">
    <center>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="section-container-spacer">
            <h2 class="text-center">Form Kemitraan</h2>
            <p class="text-center">Silahkan isi form dibawah ini untuk menjadi mitra kami</p>
          </div>
          <div class="card-container">
            <div class="card card-shadow col-xs-8 col-xs-offset-1 col-md-16 col-md-offset-2 reveal">
              <form action="{{ route('kemitraan') }}" method="post" class="reveal-content">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="name" name="nama" placeholder="Nama Depot">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="no_telepon" placeholder="No HP Aktif">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="2" name="alamat_depot" placeholder="Tulis Alamat Lengkap"></textarea>
                    </div>
                     <button type="submit" class="btn btn-primary">Daftar Mitra</button>
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

@endsection