<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        return response()->json($pakets);
    }

    public function store(Request $request)
    {
        $paket = Paket::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Paket berhasil ditambahkan',
            'data' => $paket
        ]);
    }

    public function show($id)
    {
        $paket = Paket::find($id);
        if ($paket) {
            return response()->json($paket);
        }
        return response()->json(['message' => 'Paket tidak ditemukan'], 404);
    }

    public function update(Request $request, $id)
    {
        $paket = Paket::find($id);
        if ($paket) {
            $paket->update($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Paket berhasil diperbarui',
                'data' => $paket
            ]);
        }
        return response()->json(['message' => 'Paket tidak ditemukan'], 404);
    }

    public function destroy($id)
    {
        $paket = Paket::find($id);
        if ($paket) {
            $paket->delete();
            return response()->json(['message' => 'Paket berhasil dihapus']);
        }
        return response()->json(['message' => 'Paket tidak ditemukan'], 404);
    }
}
