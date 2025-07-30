@extends('admin.layout.sidebar')

@section('title', 'Edit Proyek Jadi')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit Proyek Jadi</h4>
    <form action="{{ route('admin.proyek.update', $proyek->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Proyek</label>
            <input type="text" name="nama_proyek" class="form-control" required value="{{ old('nama_proyek', $proyek->nama_proyek) }}">
        </div>
        <div class="mb-3">
            <label>Jenis Proyek</label>
            <input type="text" name="jenis_proyek" class="form-control" required value="{{ old('jenis_proyek', $proyek->jenis_proyek) }}">
        </div>
        <div class="mb-3">
            <label>Harga Asli</label>
            <input type="number" name="harga_asli" class="form-control" required value="{{ old('harga_asli', $proyek->harga_asli) }}">
        </div>
        <div class="mb-3">
            <label>Harga Diskon</label>
            <input type="number" name="harga_diskon" class="form-control" required min="0" value="{{ old('harga_diskon', $proyek->harga_diskon) }}">
        </div>
        <div class="mb-3">
            <label>Deskripsi Proyek</label>
            <textarea name="deskripsi_proyek" class="form-control">{{ old('deskripsi_proyek', $proyek->deskripsi_proyek) }}</textarea>
        </div>
        <div class="mb-3">
            <label>Tags</label>
            <div id="tags-container">
                @foreach($proyek->tags as $i => $tag)
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" name="tags[{{ $i }}][nama_tag]" class="form-control" value="{{ $tag->nama_tag }}" placeholder="Nama Tag">
                    </div>
                    <div class="col">
                        <input type="text" name="tags[{{ $i }}][icon]" class="form-control icon-input" value="{{ $tag->icon }}" placeholder="Simple Icon (misal: laravel)">
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-danger btn-remove-tag">-</button>
                    </div>
                    <div class="col-auto">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/{{ strtolower($tag->icon) }}.svg" alt="Preview" class="icon-preview" style="width:24px;{{ $tag->icon ? '' : 'display:none;' }}">
                    </div>
                </div>
                @endforeach
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" name="tags[{{ count($proyek->tags) }}][nama_tag]" class="form-control" placeholder="Nama Tag">
                    </div>
                    <div class="col">
                        <input type="text" name="tags[{{ count($proyek->tags) }}][icon]" class="form-control icon-input" placeholder="Material Icon (misal: code)">
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-success btn-add-tag">+</button>
                    </div>
                    <div class="col-auto">
                        <img src="" class="icon-preview" style="display: none; width: 24px; height: 24px; margin-left: 8px;">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.proyek') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script>
    let tagIndex = {{ count($proyek->tags) + 1 }};
    document.addEventListener('click', function(e) {
        if(e.target.classList.contains('btn-add-tag')) {
            e.preventDefault();
            let container = document.getElementById('tags-container');
            let row = document.createElement('div');
            row.className = 'row mb-2';
            row.innerHTML = `
                <div class="col">
                    <input type="text" name="tags[${tagIndex}][nama_tag]" class="form-control" placeholder="Nama Tag">
                </div>
                <div class="col">
                    <input type="text" name="tags[${tagIndex}][icon]" class="form-control icon-input" placeholder="Material Icon (misal: code)">
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-danger btn-remove-tag">-</button>
                </div>
                <div class="col-auto">
                    <img src="" class="icon-preview" style="display: none; width: 24px; height: 24px; margin-left: 8px;">
                </div>
            `;
            container.appendChild(row);
            tagIndex++;
        }
        if(e.target.classList.contains('btn-remove-tag')) {
            e.preventDefault();
            e.target.closest('.row').remove();
        }
    });

    function updateIconPreview(input) {
        const iconName = input.value.trim().toLowerCase();
        const preview = input.closest('.row').querySelector('.icon-preview');
        if(iconName) {
            preview.src = `https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/${iconName}.svg`;
            preview.style.display = 'inline-block';
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }

    // Untuk input yang sudah ada (edit)
    document.querySelectorAll('.icon-input').forEach(function(input) {
        updateIconPreview(input);
        input.addEventListener('input', function() {
            updateIconPreview(this);
        });
    });

    // Untuk input baru (create tag dinamis)
    document.addEventListener('click', function(e) {
        if(e.target.classList.contains('btn-add-tag')) {
            setTimeout(function() {
                const rows = document.querySelectorAll('#tags-container .row');
                const lastRow = rows[rows.length - 1];
                const iconInput = lastRow.querySelector('.icon-input');
                iconInput.addEventListener('input', function() {
                    updateIconPreview(this);
                });
            }, 100);
        }
    });
</script>
@endsection
