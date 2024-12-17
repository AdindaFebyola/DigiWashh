<?php

// app/Http/Controllers/PaketController.php
namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return Paket::all();
    }

    public function store(Request $request)
    {
        return Paket::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $paket = Paket::findOrFail($id);
        $paket->update($request->all());
        return $paket;
    }

    public function destroy($id)
    {
        return Paket::destroy($id);
    }
}
