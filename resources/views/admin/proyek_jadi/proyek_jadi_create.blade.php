@extends('admin.layout.sidebar')

@section('title', 'Tambah Proyek Jadi')

@section('content')
<div class="container">
    <h4 class="mb-4">Tambah Proyek Jadi</h4>
    <form action="{{ route('admin.proyek.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Proyek</label>
            <input type="text" name="nama_proyek" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis Proyek</label>
            <input type="text" name="jenis_proyek" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga Asli</label>
            <input type="number" name="harga_asli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga Diskon</label>
            <input type="number" name="harga_diskon" class="form-control" required min="0">
        </div>
        <div class="mb-3">
            <label>Deskripsi Proyek</label>
            <textarea name="deskripsi_proyek" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Tags</label>
            <div id="tags-container">
                <div class="row mb-2 align-items-center">
                    <div class="col">
                        <input type="text" name="tags[0][nama_tag]" class="form-control" placeholder="Nama Tag">
                    </div>
                    <div class="col">
                        <input type="text" name="tags[0][icon]" class="form-control icon-input" placeholder="Simple Icon (misal: laravel)">
                    </div>
                    <div class="col-auto">
                        <img src="" alt="Preview" class="icon-preview" style="width:24px;display:none;">
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-success btn-add-tag">+</button>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.proyek') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script>
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
        if(e.target.classList.contains('btn-remove-tag')) {
            e.preventDefault();
            e.target.closest('.row').remove();
        }
    });
</script>
@endsection
