<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

        // Nama tabel jika tidak sesuai dengan nama model (misalnya 'dokter')
        protected $table = 'dokter';

        // Kolom yang dapat diisi secara massal
        protected $fillable = [
            'nama',
            'spesialisasi',
            'email',
            'telepon',
            'alamat',
        ];

        // public function tindakan()
        // {
        //     return $this->hasMany(Tindakan::class, 'dokter_id');
        // }
    
}
