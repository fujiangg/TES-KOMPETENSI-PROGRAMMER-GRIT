<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Obat::count() === 0) {
            Obat::create([
                'nama' => 'Paracetamol',
                'jenis' => 'Tablet',
                'deskripsi' => 'Obat penurun panas dan pereda nyeri.',
                'kode_obat' => 'PAR001',
                'satuan' => 'mg',
                'harga' => 5000.00,
                'stok' => 100,
                'tanggal_kadaluarsa' => '2025-12-31',
                'keterangan' => 'Hati-hati dengan dosis, overdosis dapat berbahaya.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),           
            ]);
            Obat::create([
                'nama' => 'Amoxicillin',
                'jenis' => 'Kapsul',
                'deskripsi' => 'Antibiotik untuk infeksi bakteri.',
                'kode_obat' => 'AMO002',
                'satuan' => 'mg',
                'harga' => 15000.00,
                'stok' => 50,
                'tanggal_kadaluarsa' => '2024-06-30',
                'keterangan' => 'Gunakan sesuai resep dokter.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),            
            ]);
            Obat::create([
                'nama' => 'Cough Syrup',
                'jenis' => 'Sirup',
                'deskripsi' => 'Sirup untuk meredakan batuk.',
                'kode_obat' => 'COU001',
                'satuan' => 'ml',
                'harga' => 15000.00,
                'stok' => 75,
                'tanggal_kadaluarsa' => '2023-09-25',
                'keterangan' => 'Kocok sebelum digunakan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Obat::create([
                'nama' => 'Ibuprofen',
                'jenis' => 'Tablet',
                'deskripsi' => 'Obat antiinflamasi dan pereda nyeri.',
                'kode_obat' => 'IBU001',
                'satuan' => 'mg',
                'harga' => 7000.00,
                'stok' => 150,
                'tanggal_kadaluarsa' => '2024-11-30',
                'keterangan' => 'Jangan dikonsumsi saat perut kosong.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Obat::create([
                'nama' => 'Cetirizine',
                'jenis' => 'Tablet',
                'deskripsi' => 'Obat untuk alergi.',
                'kode_obat' => 'CET001',
                'satuan' => 'mg',
                'harga' => 8000.00,
                'stok' => 120,
                'tanggal_kadaluarsa' => '2025-03-10',
                'keterangan' => 'Dapat menyebabkan kantuk.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Obat::create([
                'nama' => 'Antacid',
                'jenis' => 'Tablet Kunyah',
                'deskripsi' => 'Obat untuk meredakan asam lambung.',
                'kode_obat' => 'ANT001',
                'satuan' => 'mg',
                'harga' => 4000.00,
                'stok' => 90,
                'tanggal_kadaluarsa' => '2024-05-20',
                'keterangan' => 'Dikunyah sebelum ditelan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Obat::create([
                'nama' => 'Loratadine',
                'jenis' => 'Tablet',
                'deskripsi' => 'Obat untuk alergi tanpa kantuk.',
                'kode_obat' => 'LOR001',
                'satuan' => 'mg',
                'harga' => 6000.00,
                'stok' => 130,
                'tanggal_kadaluarsa' => '2025-07-15',
                'keterangan' => 'Tidak menyebabkan kantuk.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Obat::create([
                'nama' => 'Vitamin C',
                'jenis' => 'Tablet Effervescent',
                'deskripsi' => 'Suplemen untuk meningkatkan daya tahan tubuh.',
                'kode_obat' => 'VITC001',
                'satuan' => 'mg',
                'harga' => 2000.00,
                'stok' => 180,
                'tanggal_kadaluarsa' => '2026-02-28',
                'keterangan' => 'Larutkan dalam air sebelum diminum.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Obat::create([
                'nama' => 'Insulin',
                'jenis' => 'Injection',
                'deskripsi' => 'Obat untuk diabetes.',
                'kode_obat' => 'INS001',
                'satuan' => 'ml',
                'harga' => 50000.00,
                'stok' => 50,
                'tanggal_kadaluarsa' => '2023-12-31',
                'keterangan' => 'Simpan di tempat yang sejuk.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Obat::create([
                'nama' => 'Metformin',
                'jenis' => 'Tablet',
                'deskripsi' => 'Obat untuk diabetes tipe 2.',
                'kode_obat' => 'MET001',
                'satuan' => 'mg',
                'harga' => 9000.00,
                'stok' => 110,
                'tanggal_kadaluarsa' => '2024-08-14',
                'keterangan' => 'Konsumsi sesuai anjuran dokter.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
