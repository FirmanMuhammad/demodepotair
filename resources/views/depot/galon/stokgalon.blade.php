@extends('layouts.admin')

@section('main-content')



<div class="card shadow mb-4">
    
    <div class="container-fluid"> 
    <div class="card-body">
        <center><h2 class="text-gray-900 p-3 m-0"><b>Data Galon</b></h2></center>
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                <a href="{{ route('admin.galon.insert') }}" class="btn btn-primary mb-3">Tambah Data</a><br>
                <thead>
                    <tr class="text-gray-900 p-3 m-0">
                        <th>ID</th>
                        <th>Jenis</th>
                        <th>Merk</th>
                        <th>Stok Galon</th>
                        <th>Stok Air /Liter</th>
                        <th>Tarif Perunit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            <tbody>
    <tr class="text-gray-900 p-3 m-0">
        @foreach ($galon as $g)
        <td>{{$loop->iteration}}</td>
        <td>{{$g->jenis}}</td>
        <td>{{$g->merk}}</td>
        <td>{{$g->liter_air}}</td>
        <td>{{$g->stok}}</td>
        <td>{{$g->tarif}}</td>
        <td align="center">
          <button class="btn btn-danger"><a href="" onclick="return confirm('Apakah yakin akan menghapus data ini?')" style="text-decoration: none; color: white;" >Hapus</button></a>
             <button class="btn btn-info">
            <a href="" style="color: white; text-decoration: none;">Edit</a></button></td>
</tr> 
@endforeach 
  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection