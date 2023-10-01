@extends('include.app')
@section('content')
<div class="section-container contact-container">
    <div class="container">
      <!-- <center> -->
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="section-container-spacer">
            <h1 class="text-center">Riwayat Pemesanan</h1>
          </div>
          <div class="card-container">
            <div class="card card-shadow col-xs-8 col-xs-offset-1 col-md-16 col-md-offset-2 reveal">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Pembelian</th>
                        <th>Jumlah</th>
                        <th>Tagihan</th>
                    </thead>
                    <tbody>
                        @php
                            $n=1;
                        @endphp
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $n++ }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->noHp }}</td>
                                <td>{{ $d->jenis }}</td>
                                <td>{{ $d->jumlah }}</td>
                                <td>{{ $d->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-image col-xs-12" style="background-image: url('{{ asset(`front/assets/images/img-01.jpg`) }}')">
            </div>
          </div>
        </div>  
      </div>
  <!-- </center> -->
    </div>
  </div>
@endsection