<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';

    protected $fillable = [
        'nama',
        'jenis',
        'deskripsi',
        'kode_obat',
        'satuan',
        'harga',
        'stok',
        'tanggal_kadaluarsa',
        'keterangan'
    ];

    public function pemberianObat()
    {
        return $this->hasMany(PemberianObat::class, 'obat_id');
    }

}
