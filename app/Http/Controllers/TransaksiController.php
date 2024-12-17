<?php

// app/Http/Controllers/TransaksiController.php
namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return Transaksi::with('member', 'user')->get();
    }

    public function store(Request $request)
    {
        return Transaksi::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());
        return $transaksi;
    }

    public function destroy($id)
    {
        return Transaksi::destroy($id);
    }
}
