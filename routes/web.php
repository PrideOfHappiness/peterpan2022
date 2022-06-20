<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginRegisController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangDibookingController;
use App\Http\Controllers\BarangDipinjamController;
use App\Http\Controllers\DetailBarangController;

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

/*
Route::get('/', function () {
    return view('/login');
});
Route::get('/registrasi', function () {
    return view('dosen/registrasi');
});


Route::get('/dashboard', function () {
    return view('dosen/dashboard');
});
Route::get('/dashboard', function () {
    return view('admin/dashboardadmin');
});

Route::get('/booking', function () {
    return view('dosen/fpinjamdosen');
});
Route::get('/buatnotif', function () {
    return view('admin/buatnotifadmin');
});

Route::get('/validasi', function () {
    return view('admin/validasibooking');
});

Route::get('/barang', function () {
    return view('dosen/databarangdosen');
});
Route::get('/barangadmin', function () {
    return view('admin/databarangadmin');
});
Route::get('/formnotif', function () {
    return view('admin/formnotifadmin');
});

Route::get('/riwayat', function () {
    return view('dosen/rpinjamdosen');
});
Route::get('/peminjam', function () {
    return view('admin/datapeminjam');
});

Route::get('/laporan', function () {
    return view('admin/laporancetak');
});

Route::get('/notifmasuk', function () {
    return view('admin/notifmasukadmin');
});

Route::get('/print', function () {
    return view('/cetak');
});
*/

// Login - Registrasi - Logout
Route::get('/login',[LoginRegisLogoutController::class,'index'])->name('login');
Route::post('/login',[LoginRegisLogoutController::class,'authenticate'])->name('loginPost');
Route::post('/logout',[LoginRegisLogoutController::class,'logOut'])->name('logoutPost');


// Home
Route::get('/', [Controller::class,'index'])->name('dashboard');
Route::get('/dashboard', [Controller::class,'index'])->name('dashboard');

//Barang
Route::get('/admin/tambahbarang',[BarangController::class,'index'])->name('formTambah');
Route::post('/admin/tambahBarang',[BarangController::class,'index'])->name('add');


// DetaiBarang
Route::get('/barang', [DetailBarangController::class,'index'])->name('DetailBarang');


// BarangDipinjam
Route::get('/dipinjam_barang', [BarangDipinjamController::class,'index'])->name('BarangDipinjam');


// BarangDibooking
Route::get('/dibooking_barang', [BarangDibookingController::class,'index'])->name('BarangDibooking');
Route::post('/tolak_booking', [BarangDibookingController::class,'tolakBarangPost'])->name('tolakBarangBookingPost');
Route::post('/terima_booking', [BarangDibookingController::class,'terimaBarangPost'])->name('terimaBarangBookingPost');

// Home Dosen
Route::get('/', [DosenController::class,'index'])->name('dashboardDosen');

// BarangTersedia
Route::get('/barang_tersedia', [BarangTersediaController::class,'index'])->name('barangTersedia');
Route::post('/barang_tersedia', [BarangTersediaController::class,'pinjamPost'])->name('pinjamBarang');

