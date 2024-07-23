<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WilayahPasien extends Model
{
    use HasFactory;

        // Nama tabel yang digunakan oleh model
        protected $table = 'wilayah_pasien';

        // Primary key dari tabel
        protected $primaryKey = 'id';
    
        // Kolom-kolom yang bisa diisi secara massal
        protected $fillable = [
            'nama',
            'ttl',
            'usia',
            'email',
            'telepon',
            'alamat',
            'kota_kabupaten',
            'provinsi',
            'kode_pos',
            'deskripsi'
        ];
    
        // Jika primary key bukan tipe auto-increment integer
        public $incrementing = true;
    
        // Tipe data primary key (harus diatur jika bukan integer)
        protected $keyType = 'int';
    
        // Menonaktifkan timestamps jika tidak diperlukan
        public $timestamps = true;

        // public function tindakan()
        // {
        //     return $this->hasMany(Tindakan::class, 'pasien_id');
        // }
}
