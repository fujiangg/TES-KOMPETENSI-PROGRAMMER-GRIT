<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Dokter::count() === 0) {
            Dokter::create([
                'nama' => 'Dr. Ahmad',
                'spesialisasi' => 'Kardiologi',
                'email' => 'ahmad@gmail.com',
                'telepon' => '081234567890',
                'alamat' => 'Jl. Kesehatan No. 1, Jakarta',
            ]);

            Dokter::create([
                'nama' => 'Dr. Bella',
                'spesialisasi' => 'Ortopedi',
                'email' => 'bella@gmail.com',
                'telepon' => '081234567891',
                'alamat' => 'Jl. Sehat Selalu No. 2, Bandung',
            ]);

            Dokter::create([
                'nama' => 'Dr. Charlie',
                'spesialisasi' => 'Pediatri',
                'email' => 'charlie@gmail.com',
                'telepon' => '081234567892',
                'alamat' => 'Jl. Anak Sehat No. 3, Surabaya',
            ]);
        }
    }
}
