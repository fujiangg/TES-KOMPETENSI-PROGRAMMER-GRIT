<?php

namespace Database\Seeders;

use App\Models\WilayahPasien;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WilayahPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (WilayahPasien::count() === 0) {
            WilayahPasien::create([
                'nama' => 'Ahmad Fauzi',
                'ttl' => '1990-05-15',
                'usia' => 34,
                'email' => 'ahmad@example.com',
                'telepon' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 10, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40115',
                'deskripsi' => 'Pasien dengan riwayat hipertensi',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Siti Nurhaliza',
                'ttl' => '1985-07-20',
                'usia' => 39,
                'email' => 'siti@example.com',
                'telepon' => '081234567891',
                'alamat' => 'Jl. Asia Afrika No. 20, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40111',
                'deskripsi' => 'Pasien dengan riwayat diabetes',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Budi Santoso',
                'ttl' => '1975-03-10',
                'usia' => 49,
                'email' => 'budi@example.com',
                'telepon' => '081234567892',
                'alamat' => 'Jl. Braga No. 30, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40112',
                'deskripsi' => 'Pasien dengan riwayat jantung',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Dewi Lestari',
                'ttl' => '1992-12-25',
                'usia' => 31,
                'email' => 'dewi@example.com',
                'telepon' => '081234567893',
                'alamat' => 'Jl. Dago No. 40, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40113',
                'deskripsi' => 'Pasien dengan riwayat asma',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Eko Prasetyo',
                'ttl' => '1980-08-05',
                'usia' => 44,
                'email' => 'eko@example.com',
                'telepon' => '081234567894',
                'alamat' => 'Jl. Cihampelas No. 50, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40114',
                'deskripsi' => 'Pasien dengan riwayat alergi',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Fajar Nugroho',
                'ttl' => '1995-09-15',
                'usia' => 28,
                'email' => 'fajar@example.com',
                'telepon' => '081234567895',
                'alamat' => 'Jl. Pahlawan No. 60, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40116',
                'deskripsi' => 'Pasien dengan riwayat maag',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Gita Puspita',
                'ttl' => '1988-11-30',
                'usia' => 36,
                'email' => 'gita@example.com',
                'telepon' => '081234567896',
                'alamat' => 'Jl. Setiabudi No. 70, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40117',
                'deskripsi' => 'Pasien dengan riwayat migrain',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Hadi Suryadi',
                'ttl' => '1978-04-22',
                'usia' => 46,
                'email' => 'hadi@example.com',
                'telepon' => '081234567897',
                'alamat' => 'Jl. Pasteur No. 80, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40118',
                'deskripsi' => 'Pasien dengan riwayat ginjal',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Indah Permata',
                'ttl' => '1991-06-10',
                'usia' => 33,
                'email' => 'indah@example.com',
                'telepon' => '081234567898',
                'alamat' => 'Jl. Gatot Subroto No. 90, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40119',
                'deskripsi' => 'Pasien dengan riwayat hipertensi',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            WilayahPasien::create([
                'nama' => 'Joko Susilo',
                'ttl' => '1982-02-14',
                'usia' => 42,
                'email' => 'joko@example.com',
                'telepon' => '081234567899',
                'alamat' => 'Jl. Ir. H. Juanda No. 100, Bandung',
                'kota_kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40120',
                'deskripsi' => 'Pasien dengan riwayat kolesterol',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }

}
