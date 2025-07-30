<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyekJadi extends Model
{
    use HasFactory;



    protected $table = 'proyek_jadi';

    protected $fillable = [
        'nama_proyek',
        'jenis_proyek',
        'harga_asli',
        'deskripsi_proyek',
        'harga_diskon',
    ];


    public function tags()
    {
        return $this->hasMany(TagsProyek::class, 'proyek_jadi_id');
    }
}
