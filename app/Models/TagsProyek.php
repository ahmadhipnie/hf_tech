<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsProyek extends Model
{
    use HasFactory;

    protected $table = 'tags_proyek';

    protected $fillable = [
        'nama_tag',
        'icon',
        'proyek_jadi_id',
    ];

    public function proyekJadi()
    {
        return $this->belongsTo(ProyekJadi::class, 'proyek_jadi_id');
    }
}
