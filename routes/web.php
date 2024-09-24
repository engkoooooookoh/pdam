<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\HomeController; // Tambahkan ini untuk HomeController
use App\Http\Controllers\AdminController; // Tambahkan ini untuk AdminController
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Beranda (home) yang dapat diakses tanpa login
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute Autentikasi (login, register, logout)
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Resource route for Pelanggan
Route::resource('pelanggan', PelangganController::class);

// Rute untuk Admin
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    //
    Route::get('/profil-pdam', [ProfilController::class, 'index'])->name('profil.pdam');
    Route::get('/layanan-online', [LayananController::class, 'index'])->name('layanan.online');
    Route::get('/kontak-kami', [KontakController::class, 'index'])->name('kontak.kami');  
    //

    Route::get('/sejarah', function () {
        return view('sejarah');
    })->name('sejarah');
    
    Route::get('/visi', function () {
        return view('visi');
    })->name('visi');
    
    Route::get('/misi', function () {
        return view('misi');
    })->name('misi');
    
      

});