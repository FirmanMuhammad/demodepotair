@extends('layouts.admin')

@section('main-content')

<h1 class="h3 mb-2 text-gray-800">Tambah Penjualan</h1>


<div class="row">
    <div class="col-6">
        <div class="card shadow mb-4"> 
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Tambah Penjualan</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" @error('nama') is-invalid
                    @enderror>
                </div>
                <div class="form-group">
                    <label>Jenis Galon</label>
                    <select name="jenis"s class="form-control">
                        <option value="Air Isi Ulang">Air Isi Ulang</option>
                        <option value="Galon Baru">Ganti Galon Baru</option></select>
                </div>
                <div class="form-group">
                    <label>Kuantitas</label>
                    <input type="number" name="jumlah" class="form-control">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal Penjualan</label>
                    <input type="date" name="tgl_penjualan" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection