@extends('admin.layout.sidebar')

@section('title', 'Proyek Jadi')

@section('content')
    <div class="container">
        <h4 class="mb-4">Daftar Proyek Jadi</h4>
        <a href="{{ route('admin.proyek.create') }}" class="btn btn-primary mb-3">Tambah Proyek</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Proyek</th>
                        <th>Jenis</th>
                        <th>Harga Asli</th>
                        <th>Harga Diskon</th>
                        <th>Deskripsi</th>
                        <th>Tags</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyekJadi as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_proyek }}</td>
                            <td>{{ $item->jenis_proyek }}</td>
                            <td>Rp{{ number_format($item->harga_asli, 0, ',', '.') }}</td>
                            <td>Rp{{ number_format($item->harga_diskon, 0, ',', '.') }}</td>
                            <td>{{ $item->deskripsi_proyek }}</td>
                            <td>
                                @foreach ($item->tags as $tag)
                                    @if ($tag->icon)
                                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/{{ strtolower($tag->icon) }}.svg"
                                            alt="{{ $tag->nama_tag }}" width="24" style="vertical-align:middle;">
                                    @endif
                                    <span>{{ $tag->nama_tag }}</span><br>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('admin.proyek.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.proyek.destroy', $item->id) }}" method="POST"
                                    style="display:inline-block;" onsubmit="return confirm('Yakin hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
