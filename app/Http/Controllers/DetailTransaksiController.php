<?php

// app/Http/Controllers/DetailTransaksiController.php
namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        // Ambil semua data detail transaksi dengan relasi transaksi dan paket
        return DetailTransaksi::with(['transaksi', 'paket'])->get();
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_transaksi' => 'required|exists:transaksi,id_transaksi',
            'id_paket' => 'required|exists:paket,id_paket',
            'qty' => 'required|integer',
            'subtotal' => 'required|integer',
        ]);

        // Simpan detail transaksi
        return DetailTransaksi::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'id_transaksi' => 'required|exists:transaksi,id_transaksi',
            'id_paket' => 'required|exists:paket,id_paket',
            'qty' => 'required|integer',
            'subtotal' => 'required|integer',
        ]);

        $detailTransaksi = DetailTransaksi::findOrFail($id);
        $detailTransaksi->update($request->all());
        return $detailTransaksi;
    }

    public function destroy($id)
    {
        // Hapus detail transaksi
        return DetailTransaksi::destroy($id);
    }
}
