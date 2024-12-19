<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return response()->json($members);
    }

    public function store(Request $request)
    {
        $member = Member::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Member berhasil ditambahkan',
            'data' => $member
        ]);
    }

    public function show($id)
    {
        $member = Member::find($id);
        if ($member) {
            return response()->json($member);
        }
        return response()->json(['message' => 'Member tidak ditemukan'], 404);
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        if ($member) {
            $member->update($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Member berhasil diperbarui',
                'data' => $member
            ]);
        }
        return response()->json(['message' => 'Member tidak ditemukan'], 404);
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        if ($member) {
            $member->delete();
            return response()->json(['message' => 'Member berhasil dihapus']);
        }
        return response()->json(['message' => 'Member tidak ditemukan'], 404);
    }
}
