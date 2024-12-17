<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;

// Auth
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [AuthController::class, 'dashboard']);

    // CRUD Pelanggan
    Route::apiResource('members', MemberController::class);

    // CRUD Paket
    Route::apiResource('pakets', PaketController::class);

    // CRUD Pemesanan
    Route::apiResource('transaksis', TransaksiController::class);

    Route::apiResource('detail-transaksis', DetailTransaksiController::class)->middleware('auth:api');

});
