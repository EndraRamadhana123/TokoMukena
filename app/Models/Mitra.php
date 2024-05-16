<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = "mitra";

    // untuk melist kolom yang dapat dimasukkan
    protected $fillable = [
        'kode_mitra',
        'nama',
        'alamat',
        'email',
        'jenis_bisnis',
    ];
}
