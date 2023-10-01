@extends('layouts.admin')

@section('main-content')

<center>
    <!-- <header>
        <h3>DEPOT ISI ULANG</h3>
    </header><br><br> -->

    
    
    <div class="card shadow mb-4">
        <div class="container-fluid">   
     <div class="card-body">
        <div class="table-responsive">
<h2 class="text-gray-900 p-3 m-0"><b>Data Pemesanan Online</b></h2>
<button class="btn btn-primary"><a href="" style="text-decoration: none; color: white;" align="left">Riwayat Pemesanan</button></a><br><br>
    <table class="table table-bordered" id="datatable" width='90%' border=1 cellpadding="6" cellspacing="0" >
        
<thead>
    <tr class="text-gray-900 p-3 m-0">
        <th>ID</th> 
        <th>Nama Lengkap</th> 
        <th>Alamat Lengkap</th>
        <th>Jenis Pesanan</th>
        <th>Order</th> 
        <th>Aksi</th>
    </tr>
</thead>
    <tbody>
        <tr class="text-gray-900 p-3 m-0">
            <td>1</td>
            <td>Vito Dwi Setia Putra</td>
            <td>Jl.Gang Soma</td>
            <td>Air Isi Ulang</td>
            <td>5</td>
            <td align="center">
              <button class="btn btn-info"><a href="" style="text-decoration: none; color: white;" >Detail</button></a>
    </tr>
</tbody>
    </table>
         </div>
    </div>
</div>
</div>
</center>

@endsection