
@extends('layouts.admin')

@section('main-content')
    


              
<center>
    <!-- <header>
        <h3>DEPOT ISI ULANG</h3>
    </header><br><br> -->

    <h2 class="text-gray-900 p-3 m-0"><b>Data Penjualan Depot</b></h2>
    <form method="post" width="30%">
        <div class="col-sm-6">
        <input type="text" class ="form-control form-control-user" name="kata" size="25" placeholder="Masukkan Kata Pencarian" autocomplete="off">
        <button type="submit" name="cari" hidden="">Cari</button>
    </div>
    </form><br>
    
</center>

  <div class="card shadow mb-4">
    <div class="container-fluid">
     <div class="card-body">
        <div class="table-responsive">

    <table class="table table-bordered" id="datatable" width='90%' border=1 cellpadding="6" cellspacing="0" align="center">
{{-- <button class="btn btn-primary"><a href="#" style="color: white; text-decoration: none;" data-toggle="modal" data-target="#ModalPenjualan">Tambahkan Data Penjualan</a></button> --}}
<a href="{{ route('admin.penjualan.insert') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <thead>
<tr class="text-gray-900 p-3 m-0">
        <th>ID</th> 
        <th>Nama Pembeli</th> 
        <th>Jenis Galon</th>
        <th>Kuantitas</th>
        <th>Harga</th> 
        <th>Tanggal Penjualan</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        <tr>
    @foreach ($penjualans as $jual)
    <td>{{$loop->iteration}}</td>
    <td>{{$jual->nama}}</td>
    <td>{{$jual->jenis}}</td>
    <td>{{$jual->jumlah}}</td>
    <td>{{$jual->harga}}</td>
    <td>{{$jual->tgl_penjualan}}</td>
    <td align="center">
        {{-- <form action="{{ route('penjualan.delete') }}" method="post" class="d-inline">
            @method('delete')
            @csrf --}}
            <button class="btn btn-danger"><a href="{{ route('admin.penjualan.hapus', $jual->id_penjualan) }}" onclick="return confirm('Apakah yakin akan menghapus data ini?')" style="text-decoration: none; color: white;" >Hapus</button></a>
        <button class="btn btn-info">
        {{-- </form> --}}
       <a href="{{ route('admin.penjualan.edit', $jual->id_penjualan) }}" style= "color: white; text-decoration: none;">Edit</a></button></td></tr>
    @endforeach
        
</tbody>
    </table>
         </div>
    </div>
</div>
</div>
<br>

<div class="modal fade" id="ModalPenjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b class="text-gray-900 p-3 m-0">Tambahkan Data Penjualan</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" method="post">
                    @csrf
                   <table class="text-gray-900 p-3 m-0" cellpadding="6" cellspacing="0">
                    <tr>
                        <td>Nama</td>
                        <td> </td>
                        <td><input type="text" class="form-control" id="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Jenis Galon</td>
                        <td> </td>
                        <td><select name="jenis" id="jenis" class="form-control">
                <option value="Air Isi Ulang">Air Isi Ulang</option>
                <option value="Galon Baru">Ganti Galon Baru</option></select></td>
                    </tr>
                    <tr>
                        <td>Kuantitas</td>
                        <td> </td>
                        <td><input type="number" id="jumlah" name="jumlah" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td> </td>
                        <td><input type="text" id= "harga" name="harga" class="form-control"></td>
                    </tr>
                    {{-- <tr>
                        <td>Tanggal Penjualan</td>
                        <td> </td>
                        <td><input type="date" name="tanggal" class="form-control"></td>
                    </tr> --}}
                   </table> 
               
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Simpan</button> </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
