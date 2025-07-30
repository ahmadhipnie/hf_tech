{{-- filepath: resources\views\admin\testimoni\create.blade.php --}}
@extends('admin.layout.sidebar')

@section('title', 'Tambah Testimoni')

@section('content')
<div class="container">
    <h4 class="mb-4">Tambah Testimoni</h4>
    <form action="{{ route('admin.testimoni.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Jenis Proyek</label>
            <input type="text" name="jenis_proyek" class="form-control" required value="{{ old('jenis_proyek') }}">
        </div>
        <div class="mb-3">
            <label>Waktu Pengerjaan</label>
            <input type="date" name="waktu_pengerjaan" class="form-control" required value="{{ old('waktu_pengerjaan') }}">
        </div>
        <div class="mb-3">
            <label>Deskripsi Testimoni</label>
            <textarea name="deskripsi_testimoni" class="form-control" required>{{ old('deskripsi_testimoni') }}</textarea>
        </div>
        <div class="mb-3">
            <label>Rating</label>
            <input type="number" name="rating" class="form-control" min="1" max="5" required value="{{ old('rating') }}">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.testimoni') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
