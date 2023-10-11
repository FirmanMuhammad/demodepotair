<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\DepotAir;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $data = DepotAir::all();
    return view('welcome', compact('data'));
})->name('welcome');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->is_admin == '1') {
        return redirect()->route('admin.home');
    }
    if (Auth::check() && Auth::user()->is_admin == '0') {
        return redirect()->route('welcome');
    }
    return redirect()->route('login');
});

Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::controller(PesananController::class)->prefix('pesanan')->group(function () {
        Route::get('', 'index')->name('pesanan');
        Route::get('insert', 'create')->name('pesanan.insert');
        Route::post('insert', 'store')->name('penjualan.add.store');
    });

    Route::controller(GalonController::class)->prefix('galon')->group(function () {
        Route::get('', 'index')->name('galon');
        Route::get('insert', 'create')->name('galon.insert');
        Route::post('insert', 'store')->name('galon.add.insert');
        // Route::get('edit/{id_galon}', 'edit')->name('galon.edit');
        // Route::post('edit/{id_galon}', 'update')->name('galon.update');
        //Route::get('hapus/{id_galon', 'hapus')->name('galon.hapus');
    });

    Route::controller(PenjualanController::class)->prefix('penjualan')->group(function () {
        Route::get('', 'index')->name('penjualan');
        Route::get('insert', 'create')->name('penjualan.insert');
        Route::post('insert', 'store')->name('penjualan.add.insert');
        Route::get('edit/{id_penjualan}', 'edit')->name('penjualan.edit');
        Route::post('edit/{id_penjualan}', 'update')->name('penjualan.update');
        Route::get('hapus/{id_penjualan}', 'hapus')->name('penjualan.hapus');
    });
});

Route::middleware(['user'])->group(function () {
    Route::get('/kemitraan', 'UserPesananController@indexDepot')->name('kemitraan');
    Route::post('/kemitraan', 'UserPesananController@storeDepot')->name('kemitraan');
    Route::get('/riwayat', 'UserPesananController@riwayat')->name('riwayat');
    Route::get('/riwayat/{value}/{id}', 'UserPesananController@updateStatusRiwayat')->name('riwayat.update');
    Route::get('/riwayat/pdf', 'UserPesananController@riwayatPdf')->name('riwayat.pdf');
    Route::get('/pesanan', 'UserPesananController@index')->name('pesanan');
    Route::post('/pesanan', 'UserPesananController@store')->name('pesanan.store');

    Route::post('/ganti-foto', 'UserPesananController@ganti_foto')->name('ganti_foto');
});

require __DIR__ . '/auth.php';
