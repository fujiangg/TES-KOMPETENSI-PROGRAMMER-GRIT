<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai_klinik';

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'jabatan',
        'spesialisasi',
        'kontak',
        'alamat',
        'tanggal_bergabung',
        'status',
        'gaji',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tindakan()
    {
        return $this->hasMany(Tindakan::class, 'pegawai_klinik_id');
    }

    public function pelayanan()
    {
        return $this->hasMany(Pelayanan::class, 'pegawai_klinik_id');
    }

    public function pemberianObat()
    {
        return $this->hasMany(PemberianObat::class, 'pegawai_klinik_id');
    }

}

