@extends('layouts.admin')

@section('main-content')

<h1 class="h3 mb-2 text-gray-800">Tambah Stok</h1>

<div class="row">
    <div class="col-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Air dan Galon</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.galon.add.insert') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Jenis</label>
                        <input type="text" name="jenis" class="form-control" @error('jenis') is-invalid @enderror>
                    </div>
                    <!-- <div class="form-group">
                        <label>Jenis Galon</label>
                        <select name="jenis" class="form-control">
                            <option value="Air Isi Ulang">Air Isi Ulang</option>
                            <option value="Galon Baru">Ganti Galon Baru</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label>Merk</label>
                        <input type="text" name="merk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Liter Air</label>
                        <input type="number" name="liter_air" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok Air/ Galon</label>
                        <input type="number" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tarif</label>
                        <input type="number" name="tarif" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    @endsection