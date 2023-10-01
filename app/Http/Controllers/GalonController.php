<?php

namespace App\Http\Controllers;

use App\Models\Galon;
use App\Models\penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalonRequest;
use App\Http\Requests\UpdateGalonRequest;

class GalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('depot.galon.stokgalon', [
            "galon" => Galon::latest()->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('depot.galon.tambahstokgalon');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required|max:100',
            'merk' => 'required|max:100',
            'liter_air' => 'required',
            'stok' => 'required',
            'tarif' => 'required'
        ]);

        //$validatedData['user_id'] = auth()->user->id;

        Galon::create($validatedData);

        return redirect()->route('admin.galon')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galon $galon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galon $galon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalonRequest $request, Galon $galon)
    {
        //
    }

    public function hapus($id_galon)
    {
        penjualan::where('id_galon', $id_galon)->delete();

        return redirect()->route('admin.galon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galon $galon)
    {
        //
    }
}
