<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return response()->json($transaksis);
    }

    public function store(Request $request)
    {
        $transaksi = Transaksi::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil ditambahkan',
            'data' => $transaksi
        ]);
    }

    public function show($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            return response()->json($transaksi);
        }
        return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->update($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Transaksi berhasil diperbarui',
                'data' => $transaksi
            ]);
        }
        return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->delete();
            return response()->json(['message' => 'Transaksi berhasil dihapus']);
        }
        return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
    }
}
