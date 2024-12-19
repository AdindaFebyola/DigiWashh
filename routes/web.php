<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailTransaksiController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});

// Route untuk halaman signup
Route::get('/signup', function () {
    return view('signup'); // File: resources/views/signup.blade.php
})->name('signup');

Route::get('/pemesanan', function () {
    return view('pemesanan');
});
Route::get('/laporan_transaksi', function () {
    return view('laporan_transaksi');
});

Route::get('/data-pelanggan', function () {
    return view('data_pelanggan'); // Mengarahkan ke file Blade data_pelanggan.blade.php
})->name('data.pelanggan');

// Route untuk halaman Edit Pelanggan
Route::get('/edit-pelanggan', function () {
    return view('edit_pelanggan'); // Mengarahkan ke file Blade edit_pelanggan.blade.php
})->name('edit.pelanggan');

// Route untuk halaman Tambah Pemesanan
Route::get('/tambah-pemesanan', function () {
    return view('tambah_pemesanan'); // Mengarahkan ke file Blade tambah_pemesanan.blade.php
})->name('tambah.pemesanan');

Route::get('/analisis_statistik', function () {
    return view('analisis_statistik'); // Mengarahkan ke file Blade manajemen_transaksi.blade.php
})->name('analisis.statistik');

Route::get('/editPelanggan', function () {
    return view('editPelanggan');
});
Route::get('/tambah_Pelanggan', function () {
    return view('tambah_Pelanggan');
});
Route::get('/tambah_Paket', function () {
    return view('tambah_Paket');
});
Route::get('/edit_Paket', function () {
    return view('edit_Paket');
});
Route::get('/myProfile', function () {
    return view('myProfile');
});
Route::get('/Paket', function () {
    return view('Paket');
});
    Route::get('/tambah_Pemesanan', function () {
        return view('tambah_Pemesanan');
    });
Route::get('/hapus_Pelanggan', function () {
    return view('hapus_Pelanggan');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');


Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
Route::post('/members', [MemberController::class, 'store'])->name('members.store');
Route::get('/members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::put('/members/{id}', [MemberController::class, 'update'])->name('members.update');
Route::delete('/members/{id}', [MemberController::class, 'destroy'])->name('members.destroy');

Route::resource('pakets', PaketController::class);
Route::resource('transaksis', TransaksiController::class);
Route::resource('detail-transaksis', DetailTransaksiController::class);