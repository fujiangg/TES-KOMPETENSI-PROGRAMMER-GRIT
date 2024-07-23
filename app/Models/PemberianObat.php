<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemberianObat extends Model
{
    use HasFactory;

    protected $table = 'pemberian_obat';


    protected $fillable = [
        'tanggal_pemberian',
        'pasien_id', // Foreign key ke tabel wilayah_pasien
        'obat_id', // Foreign key ke tabel obat
        'jumlah',
        'dosis',
        'rute_pemberian',
        'keterangan',
        'pegawai_klinik_id', // Foreign key ke tabel pegawai_klinik
    ];

    public function pasien()
    {
        return $this->belongsTo(WilayahPasien::class, 'pasien_id');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'obat_id');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_klinik_id');
    }



}
