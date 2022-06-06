<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/barang', function () {
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

// Login - Registrasi - Logout
Route::get('/login',[LoginRegisLogoutController::class,'index'])->name('login');
Route::post('/login',[LoginRegisLogoutController::class,'authenticate'])->name('loginPost');
Route::post('/logout',[LoginRegisLogoutController::class,'logOut'])->name('logoutPost');


// Home
Route::get('/', [Controller::class,'index'])->name('dashboard');
