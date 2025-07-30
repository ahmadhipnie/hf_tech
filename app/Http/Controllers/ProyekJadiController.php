<?php

namespace App\Http\Controllers;

use App\Models\ProyekJadi;
use Illuminate\Http\Request;

class ProyekJadiController extends Controller
{
    public function index()
    {
        $proyekJadi = ProyekJadi::with('tags')->orderBy('created_at', 'desc')->get();
        return view('admin.proyek_jadi.proyek_jadi_admin', compact('proyekJadi'));
    }

    public function create()
    {
        return view('admin.proyek_jadi.proyek_jadi_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'jenis_proyek' => 'required|string|max:255',
            'harga_asli' => 'required|integer',
            'harga_diskon' => 'required|integer',
            'deskripsi_proyek' => 'nullable|string',
            'tags.*.nama_tag' => 'nullable|string|max:255',
            'tags.*.icon' => 'nullable|string|max:255',
        ]);

        $proyek = ProyekJadi::create($request->only([
            'nama_proyek',
            'jenis_proyek',
            'harga_asli',
            'harga_diskon',
            'deskripsi_proyek'
        ]));

        if ($request->tags) {
            foreach ($request->tags as $tag) {
                if (!empty($tag['nama_tag'])) {
                    $proyek->tags()->create([
                        'nama_tag' => $tag['nama_tag'],
                        'icon' => $tag['icon'] ?? null,
                    ]);
                }
            }
        }

        return redirect()->route('admin.proyek')->with('success', 'Proyek berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $proyek = ProyekJadi::with('tags')->findOrFail($id);
        return view('admin.proyek_jadi.proyek_jadi_edit', compact('proyek'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'jenis_proyek' => 'required|string|max:255',
            'harga_asli' => 'required|integer',
            'harga_diskon' => 'required|integer',
            'deskripsi_proyek' => 'nullable|string',
            'tags.*.nama_tag' => 'nullable|string|max:255',
            'tags.*.icon' => 'nullable|string|max:255',
        ]);

        $proyek = ProyekJadi::findOrFail($id);
        $proyek->update($request->only([
            'nama_proyek',
            'jenis_proyek',
            'harga_asli',
            'harga_diskon',
            'deskripsi_proyek'
        ]));

        // Update tags
        $proyek->tags()->delete();
        if ($request->tags) {
            foreach ($request->tags as $tag) {
                if (!empty($tag['nama_tag'])) {
                    $proyek->tags()->create([
                        'nama_tag' => $tag['nama_tag'],
                        'icon' => $tag['icon'] ?? null,
                    ]);
                }
            }
        }

        return redirect()->route('admin.proyek')->with('success', 'Proyek berhasil diubah!');
    }

    public function destroy($id)
    {
        $proyek = ProyekJadi::findOrFail($id);
        $proyek->tags()->delete();
        $proyek->delete();
        return redirect()->route('admin.proyek')->with('success', 'Proyek berhasil dihapus!');
    }
}
