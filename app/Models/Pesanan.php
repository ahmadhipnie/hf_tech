<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'jenis_tugas',
        'deadline_tugas',
        'email_pemesan',
        'nomor_telepon',
        'detail_tugas',
        'nama_pelanggan',
        'status',
    ];

    protected $casts = [
        'deadline_tugas' => 'datetime',
    ];
}
