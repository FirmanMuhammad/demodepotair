<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PesananRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\StoreDepotAirRequest;
use App\Models\DepotAir;
use App\Models\Galon;
use App\Models\penjualan;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

    public function store(PesananRequest $request)
    {
        DB::beginTransaction();
        try {
            $galon = Galon::where('jenis', $request->jenis)->first();

            penjualan::create([
                'user_id' => Auth::user()->id,
                'jenis' => $request->jenis,
                'jumlah' => $request->jumlah,
                'harga' => $request->jumlah * $galon->tarif,
                'tgl_penjualan' => Carbon::now()
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
        $data = penjualan::with('user')->where('user_id', Auth::user()->id)->get();
        return view('riwayat', compact('data'));
    }

    public function updateStatusRiwayat($value, $id)
    {
        DB::beginTransaction();
        try {
            penjualan::where('id_penjualan', $id)->update([
                'status' => $value == 'true' ? 'selesai' : 'dikirim',
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
        $data = penjualan::with('user')->where('user_id', Auth::user()->id)->get();
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

    public function storeDepot(StoreDepotAirRequest $request)
    {
        DB::beginTransaction();
        try {
            DepotAir::create([
                'nama_depot' => $request->nama,
                'alamat_depot' => $request->alamat_depot,
                'no_telepon' => $request->no_telepon,
                'foto' => $request->foto,
                'stok' => $request->stok,
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
            $path = $request->path ? $request->path : 'mitra';
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

    public function profil()
    {
        return view('profil');
    }

    public function updateProfil(ProfileUpdateRequest $request)
    {
        DB::beginTransaction();
        try {
            User::where('id', Auth::id())->update([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'foto' => $request->foto,
                'hp' => $request->hp,
                'alamat' => $request->alamat,
            ]);
            DB::commit();
            return redirect()->back()->with([
                'pesan' => '<div class="alert alert-success">Data berhasil diperbarui</div>',
            ]);
        } catch (\Throwable $th) {
            Log::warning($th->getMessage());
            DB::rollBack();
            return redirect()->back()->with([
                'pesan' => '<div class="alert alert-danger">Terjadi kesalahan, cobalah kembali</div>',
            ]);
        }
    }

    public function password(Request $request)
    {
        if ($request->method() === 'POST') {

            $request->validate([
                'password_lama' => 'required',
                'password' => 'required|confirmed',
            ]);

            $cekPassword = User::find(Auth::id());
            if (!password_verify($request->password_lama, $cekPassword->password)) {
                return redirect()->back()->with([
                    'pesan' => '<div class="alert alert-danger">Password lama salah!</div>',
                ]);
            }

            DB::beginTransaction();
            try {
                User::where('id', Auth::id())->update([
                    'password' => Hash::make($request->password),
                ]);
                DB::commit();
                return redirect()->back()->with([
                    'pesan' => '<div class="alert alert-success">Password berhasil diperbarui</div>',
                ]);
            } catch (\Throwable $th) {
                Log::warning($th->getMessage());
                DB::rollBack();
                return redirect()->back()->with([
                    'pesan' => '<div class="alert alert-danger">Terjadi kesalahan, cobalah kembali</div>',
                ]);
            }
        }

        return view('password');
    }
}
