<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;

    protected $table = 'pelayanan';


    protected $fillable = [
        'pegawai_klinik_id',
        'pasien_id', // Validasi untuk pasien_id
        'jenis_pelayanan',
        'tanggal_waktu',
        'status',
        'catatan_tambahan',
    ];

    public function pasien()
    {
        return $this->belongsTo(WilayahPasien::class, 'pasien_id');
    }
    
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_klinik_id');
    }


}
