<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    use HasFactory;

    protected $table = 'tindakan';

    protected $fillable = [
        'nama_tindakan',
        'deskripsi',
        'kategori',
        'kode_tindakan',
        'tanggal_waktu',
        'durasi',
        'pegawai_klinik_id',
        'pasien_id', // Validasi untuk pasien_id
        'tempat',
        'biaya',
        'status',
        'catatan_tambahan',
        'resiko',
        'hasil',
        'tindak_lanjut',
        'bahan_alat',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_klinik_id');
    }

    public function pasien()
    {
        return $this->belongsTo(WilayahPasien::class, 'pasien_id');
    }

}
