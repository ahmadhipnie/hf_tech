<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\ProyekJadi;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
{
    $testimoni = Testimoni::orderBy('created_at', 'desc')->get();
    $proyekJadi = ProyekJadi::with('tags')->orderBy('created_at', 'desc')->get();

    return view('index', compact('testimoni', 'proyekJadi'));
}

    public function storePesanan(Request $request)
    {
        $request->validate([
            'jenis_tugas' => 'required|string',
            'deadline_tugas' => 'nullable|date',
            'deadline_fleksibel' => 'nullable|boolean',
            'email_pemesan' => 'required|email',
            'nomor_telepon' => 'required|string',
            'detail_tugas' => 'required|string',
            'nama_pelanggan' => 'required|string',
        ]);

        $pesanan = Pesanan::create([
            'jenis_tugas' => $request->jenis_tugas,
            'deadline_tugas' => $request->deadline_fleksibel ? null : $request->deadline_tugas,
            'email_pemesan' => $request->email_pemesan,
            'nomor_telepon' => $request->nomor_telepon,
            'detail_tugas' => $request->detail_tugas,
            'nama_pelanggan' => $request->nama_pelanggan,
            'status' => 'pending',
        ]);

        $pesanan->save();

        // Format pesan WhatsApp
        $deadline = $request->deadline_fleksibel ? 'Fleksibel' : ($request->deadline_tugas ?? '-');
        $pesan = "Halo Admin, saya ingin memesan jasa:\n"
            . "Nama: {$request->nama_pelanggan}\n"
            . "Jenis Tugas: {$request->jenis_tugas}\n"
            . "Deadline: {$deadline}\n"
            . "Email: {$request->email_pemesan}\n"
            . "No. HP: {$request->nomor_telepon}\n"
            . "Detail: {$request->detail_tugas}";

        $wa_admin = '6282228455809'; // Ganti dengan nomor admin
        $url = "https://wa.me/{$wa_admin}?text=" . urlencode($pesan);

        return redirect($url);
    }
}
