<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Pegawai::count() === 0) {
            Pegawai::create([
                // 'user_id' => 2, // Asumsikan user_id 2 ada di tabel users
                'nama_lengkap' => 'Dr. Ahmad Sutrisno',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Umum',
                'kontak' => '08123456789',
                'alamat' => 'Jl. Merdeka No. 123, Bandung',
                'tanggal_bergabung' => '2020-01-15',
                'status' => true,
                'gaji' => 15000000.00,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Siti Nurhaliza',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Bedah',
                'kontak' => '08123456788',
                'alamat' => 'Jl. Diponegoro No. 45, Bandung',
                'tanggal_bergabung' => '2019-05-20',
                'status' => true,
                'gaji' => 8000000.00,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Lina Marlia',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Gawat Darurat',
                'kontak' => '08123456786',
                'alamat' => 'Jl. Asia Afrika No. 56, Bandung',
                'tanggal_bergabung' => '2017-03-18',
                'status' => true,
                'gaji' => 6000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Budi Santoso',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Anak',
                'kontak' => '08123456787',
                'alamat' => 'Jl. Braga No. 12, Bandung',
                'tanggal_bergabung' => '2018-07-10',
                'status' => true,
                'gaji' => 12000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Dina Kurnia',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Kandungan',
                'kontak' => '08123456785',
                'alamat' => 'Jl. Soekarno-Hatta No. 78, Bandung',
                'tanggal_bergabung' => '2021-09-30',
                'status' => true,
                'gaji' => 13000000.00,
                'created_at' => now(),
                'updated_at' => now(),            
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Rahma Hidayat',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Gigi',
                'kontak' => '08123456781',
                'alamat' => 'Jl. Pasir Kaliki No. 789, Bandung',
                'tanggal_bergabung' => '2017-12-01',
                'status' => true,
                'gaji' => 9000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Faisal Hakim',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Anestesi',
                'kontak' => '08123456784',
                'alamat' => 'Jl. Cihampelas No. 90, Bandung',
                'tanggal_bergabung' => '2020-06-05',
                'status' => true,
                'gaji' => 5500000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Yusuf Pratama',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Rehabilitasi',
                'kontak' => '08123456782',
                'alamat' => 'Jl. Dago No. 456, Bandung',
                'tanggal_bergabung' => '2018-02-14',
                'status' => true,
                'gaji' => 7000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Andi Setiawan',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Gigi',
                'kontak' => '08123456781',
                'alamat' => 'Jl. Pasir Kaliki No. 789, Bandung',
                'tanggal_bergabung' => '2017-12-01',
                'status' => true,
                'gaji' => 9000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Dr. Nadia Putri',
                'jabatan' => 'Dokter',
                'spesialisasi' => 'Penyakit Dalam',
                'kontak' => '08123456780',
                'alamat' => 'Jl. Setiabudi No. 321, Bandung',
                'tanggal_bergabung' => '2021-04-19',
                'status' => true,
                'gaji' => 11000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Iman Setiawan',
                'jabatan' => 'Perawat',
                'spesialisasi' => 'Bedah',
                'kontak' => '08123456784',
                'alamat' => 'Jl. Cihampelas No. 90, Bandung',
                'tanggal_bergabung' => '2020-06-05',
                'status' => true,
                'gaji' => 5500000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Pegawai::create([
                // 'user_id' => 1, // Asumsikan user_id 1 ada di tabel users
                'nama_lengkap' => 'Faisal Hakim',
                'jabatan' => 'Perawat',
                'spesialisasi' => 'Anestesi',
                'kontak' => '08123456782',
                'alamat' => 'Jl. Dago No. 456, Bandung',
                'tanggal_bergabung' => '2018-02-14',
                'status' => true,
                'gaji' => 7000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $this->command->info('Successfully seeding.');
        } else {
            $this->command->info('Users table is not empty. Skipping seeding');
        }

    }
}
