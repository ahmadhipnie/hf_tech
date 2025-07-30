<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {

        $pesanan = Pesanan::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pesanan.pesanan_admin', compact('pesanan'));
    }
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,sedang dicek,sudah dp,dikerjakan,selesai'
        ]);
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status = $request->status;
        $pesanan->save();

        return redirect()->back()->with('success', 'Status pesanan berhasil diubah!');
    }
}
