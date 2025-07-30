<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';

    protected $fillable = [
        'jenis_proyek',
        'waktu_pengerjaan',
        'deskripsi_testimoni',
        'rating',
    ];

    protected $casts = [
        'waktu_pengerjaan' => 'date',
    ];
}
