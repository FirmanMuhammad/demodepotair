<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DepotAir;
use App\Models\Galon;
use App\Models\penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPesananController extends Controller
{
    public function index()
    {
        $data = Galon::all();
        return view('pesanan', compact('data'));
    }

    public function store(Request $request)
    {
        $galon = Galon::where('jenis',$request->jenis)->first();
        penjualan::create([
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'jumlah' => $request->jumlah,
            'harga' => $request->jumlah * $galon->tarif,
            'jumlah' => $request->jumlah,
            'tgl_penjualan' => now()->format('Y-m-d'),
        ]);

        return redirect()->route('riwayat');
    }

    public function riwayat()
    {
        $data = penjualan::where('user_id',Auth::user()->id)->get();
        return view('riwayat', compact('data'));
    }

    public function indexDepot()
    {
        return view('mitra');
    }

    public function storeDepot(Request $request)
    {
        DepotAir::create([
            'nama_depot'=> $request->nama,
            'alamat_depot' => $request->alamat_depot,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('welcome');
    }
}
