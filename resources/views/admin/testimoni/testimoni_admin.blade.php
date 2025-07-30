@extends('admin.layout.sidebar')

@section('title', 'Testimoni')

@section('content')
<div class="container">
    <h4 class="mb-4">Daftar Testimoni</h4>
    <a href="{{ route('admin.testimoni.create') }}" class="btn btn-primary mb-3">Tambah Testimoni</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-responsive">
        <table id="testimoniTable" class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Jenis Proyek</th>
                    <th>Waktu Pengerjaan</th>
                    <th>Deskripsi</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimoni as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->jenis_proyek }}</td>
                        <td>{{ $item->waktu_pengerjaan->format('d-m-Y') }}</td>
                        <td>{{ $item->deskripsi_testimoni }}</td>
                        <td>
                            @for($i=0; $i<$item->rating; $i++)
                                <span class="text-warning">&#9733;</span>
                            @endfor
                        </td>
                        <td>
                            <a href="{{ route('admin.testimoni.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.testimoni.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus data ini?')">
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
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#testimoniTable').DataTable();
        });
    </script>
@endpush
