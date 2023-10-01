@extends('layouts.admin')

@section('main-content')

<h1 class="h3 mb-2 text-gray-800">Edit Penjualan</h1>


<div class="row">
    <div class="col-6">
        <div class="card shadow mb-4"> 
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Edit Penjualan</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.penjualan.update', $penjualan->id_penjualan) }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ isset($penjualan) ? $penjualan->nama : ''}}" class="form-control" @error('nama') is-invalid
                    @enderror>
                </div>
                <div class="form-group">
                    <label>Jenis Galon</label>
                    <select name="jenis"
                     class="form-control">
                     <option value="{{ isset($penjualan) ? $penjualan->jenis : ''}}">{{$penjualan->jenis}}</option>
                        <option value="Air Isi Ulang">Air Isi Ulang</option>
                        <option value="Galon Baru">Ganti Galon Baru</option></select>
                </div>
                <div class="form-group">
                    <label>Kuantitas</label>
                    <input type="number" name="jumlah" value="{{ isset($penjualan) ? $penjualan->jumlah : ''}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" value="{{ isset($penjualan) ? $penjualan->harga : ''}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal Penjualan</label>
                    <input type="date" name="tgl_penjualan" value="{{ isset($penjualan) ? $penjualan->tgl_penjualan : ''}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection