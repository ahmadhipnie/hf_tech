<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::orderBy('created_at', 'desc')->get();
        return view('admin.testimoni.testimoni_admin', compact('testimoni'));
    }

    public function create()
    {
        return view('admin.testimoni.testimoni_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_proyek' => 'required|string|max:255',
            'waktu_pengerjaan' => 'required|date',
            'deskripsi_testimoni' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Testimoni::create($request->all());
        Alert::success('Berhasil', 'Testimoni berhasil ditambahkan!');
        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('admin.testimoni.testimoni_edit', compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_proyek' => 'required|string|max:255',
            'waktu_pengerjaan' => 'required|date',
            'deskripsi_testimoni' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $testimoni = Testimoni::findOrFail($id);
        $testimoni->update($request->all());
        Alert::success('Berhasil', 'Testimoni berhasil diubah!');
        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil diubah!');
    }

    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        Alert::success('Berhasil', 'Testimoni berhasil dihapus!');
        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil dihapus!');
    }
}
