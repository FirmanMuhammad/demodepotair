<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepenjualanRequest;
use App\Http\Requests\UpdatepenjualanRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\ValidatedData;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return penjualan::where('id', auth()->user()->id)->get();
        return view('depot.penjualan.penjualan', [
            "penjualans" => penjualan::latest()->get()
            //"penjualans" => penjualan::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('depot.penjualan.tambahpenjualan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'jenis' => 'required|max:100',
            'jumlah' => 'required',
            'harga' => 'required',
            'tgl_penjualan' => 'required'
        ]);

        //$validatedData['user_id'] = auth()->user->id;

        penjualan::create($validatedData);

        return redirect()->route('admin.penjualan')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_penjualan)
    {
        $penjualan = penjualan::where('id_penjualan', $id_penjualan)->first();

        return view('depot.penjualan.editpenjualan', ['penjualan' => $penjualan]);
    }

    public function update($id_penjualan, Request $request)
    {
        $data = [

            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'tgl_penjualan' => $request->tgl_penjualan,
        ];

        penjualan::where('id_penjualan', $id_penjualan)->update($data);

        return redirect()->route('admin.penjualan')->with('success', 'Data has been added');
    }



    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdatepenjualanRequest $request, penjualan $penjualan)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penjualan $penjualan)
    {
        $penjualan->delete();

        return redirect()->route('admin.penjualan')->with('success', 'Data has been deleted');
    }

    public function hapus($id_penjualan)
    {
        penjualan::where('id_penjualan', $id_penjualan)->delete();

        return redirect()->route('admin.penjualan');
    }
}
