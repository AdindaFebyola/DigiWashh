<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        $detailTransaksis = DetailTransaksi::all();
        return response()->json([
            'success' => true,
            'message' => 'List Detail Transaksi',
            'data' => $detailTransaksis
        ]);
    }

    public function store(Request $request)
    {
        $detailTransaksi = DetailTransaksi::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Detail Transaksi berhasil ditambahkan',
            'data' => $detailTransaksi
        ]);
    }

    public function show($id)
    {
        $detailTransaksi = DetailTransaksi::find($id);
        if ($detailTransaksi) {
            return response()->json([
                'success' => true,
                'data' => $detailTransaksi
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Detail Transaksi tidak ditemukan'
        ], 404);
    }

    public function update(Request $request, $id)
    {
        $detailTransaksi = DetailTransaksi::find($id);
        if ($detailTransaksi) {
            $detailTransaksi->update($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Detail Transaksi berhasil diperbarui',
                'data' => $detailTransaksi
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Detail Transaksi tidak ditemukan'
        ], 404);
    }

    public function destroy($id)
    {
        $detailTransaksi = DetailTransaksi::find($id);
        if ($detailTransaksi) {
            $detailTransaksi->delete();
            return response()->json([
                'success' => true,
                'message' => 'Detail Transaksi berhasil dihapus'
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Detail Transaksi tidak ditemukan'
        ], 404);
    }
}
