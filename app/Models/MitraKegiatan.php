<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MitraKegiatan extends Model
{
    use HasFactory;

    protected $table = "mitra_kegiatan";

    // untuk melist kolom yang dapat dimasukkan
    protected $fillable = [
        'kode_mitra',
        'nama_mitra',
        'jenis_mitra',
    ];

    public static function getMitraKegiatan()
    {
        // query ke tabel barang
        $sql = "SELECT * FROM mitra_kegiatan";
        $mitra_kegiatan = DB::select($sql);
        return $mitra_kegiatan;
    }
}
