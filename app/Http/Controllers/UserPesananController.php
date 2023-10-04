<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DepotAir;
use App\Models\Galon;
use App\Models\penjualan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserPesananController extends Controller
{
    public function index()
    {
        $data = Galon::all();
        return view('pesanan', compact('data'));
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'noHp' => 'required|numeric',
            'alamat' => 'required',
            'jumlah' => 'required',
            'jenis' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $galon = Galon::where('jenis', $request->jenis)->first();

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

            DB::commit();

            return redirect()->route('riwayat');
        } catch (\Throwable $th) {
            Log::warning($th->getMessage());
            DB::rollBack();

            return redirect()->route('pesanan');
        }
    }

    public function riwayat()
    {
        $data = penjualan::where('user_id', Auth::user()->id)->get();
        return view('riwayat', compact('data'));
    }

    public function updateStatusRiwayat($value, $id)
    {
        DB::beginTransaction();
        try {
            penjualan::where('id_penjualan', $id)->update([
                'status' => $value,
            ]);
            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Success',
            ]);
        } catch (\Throwable $th) {
            Log::warning($th->getMessage());
            DB::rollBack();
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function riwayatPdf()
    {
        $data = penjualan::where('user_id', Auth::user()->id)->get();
        $pdf = Pdf::setOptions([
            'defaultFont' => 'serif',
            'defaultPaperSize' => 'A4',

        ])->loadView('riwayatPdf', compact('data'));

        return $pdf->stream();
    }

    public function indexDepot()
    {
        return view('mitra');
    }

    public function storeDepot(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat_depot' => 'required',
            'no_telepon' => 'required',
            'foto' => 'nullable'
        ]);

        DB::beginTransaction();
        try {
            DepotAir::create([
                'nama_depot' => $request->nama,
                'alamat_depot' => $request->alamat_depot,
                'no_telepon' => $request->no_telepon,
                'foto' => $request->foto,
            ]);

            DB::commit();

            return redirect()->route('welcome');
        } catch (\Throwable $th) {
            Log::warning($th->getMessage());
            DB::rollBack();

            return redirect()->route('kemitraan');
        }
    }

    public function ganti_foto(Request $request)
    {
        if ($request->has('file')) {
            $file = $request->file;
            $path = 'mitra';
            $size_gambar = 600;

            $request->validate([
                'file' => 'required|image|max:2000'
            ]);

            $name = time();
            $ext  = $file->getClientOriginalExtension();
            $foto = $name . '.' . $ext;

            $fullPath = $path . '/' . $foto;

            $path = $file->getRealPath();
            $thum = Image::make($path)->resize($size_gambar, $size_gambar, function ($size) {
                $size->aspectRatio();
            });

            $path = Storage::put($fullPath, $thum->stream());

            return response()->json([
                'file' => $fullPath,
            ]);
        }
    }
}
