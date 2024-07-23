<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Pelayanan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Pelayanan::count() === 0) {
            Pelayanan::create([
                'pasien_id' => 1,
                'pegawai_klinik_id' => 2,
                'jenis_pelayanan' => 'Pemeriksaan Umum',
                'tanggal_waktu' => Carbon::now(),
                'status' => 'Selesai',
                'catatan_tambahan' => 'Tidak ada',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),            
            ]);
            Pelayanan::create([
                'pasien_id' => 2,
                'pegawai_klinik_id' => 1,
                'jenis_pelayanan' => 'Pemeriksaan Gigi',
                'tanggal_waktu' => Carbon::now()->subDays(1),
                'status' => 'Dijadwalkan',
                'catatan_tambahan' => 'Pasien membutuhkan kontrol',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Pelayanan::create([
                'pasien_id' => 3,
                'pegawai_klinik_id' => 3,
                'jenis_pelayanan' => 'Tes Darah',
                'tanggal_waktu' => Carbon::now()->subDays(2),
                'status' => 'Dijadwalkan',
                'catatan_tambahan' => 'Pasien harus puasa sebelum tes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Pelayanan::create([
                'pasien_id' => 4,
                'pegawai_klinik_id' => 2,
                'jenis_pelayanan' => 'Pemeriksaan Mata',
                'tanggal_waktu' => Carbon::now()->subDays(3),
                'status' => 'Selesai',
                'catatan_tambahan' => 'Pasien memerlukan kacamata baru',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Pelayanan::create([
                'pasien_id' => 5,
                'pegawai_klinik_id' => 1,
                'jenis_pelayanan' => 'Pemeriksaan Kulit',
                'tanggal_waktu' => Carbon::now()->subDays(4),
                'status' => 'Dijadwalkan',
                'catatan_tambahan' => 'Pasien mengalami ruam kulit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Pelayanan::create([
                'pasien_id' => 6,
                'pegawai_klinik_id' => 2,
                'jenis_pelayanan' => 'Pemeriksaan Jantung',
                'tanggal_waktu' => Carbon::now()->subDays(5),
                'status' => 'Selesai',
                'catatan_tambahan' => 'Pasien disarankan kontrol rutin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Pelayanan::create([
                'pasien_id' => 7,
                'pegawai_klinik_id' => 3,
                'jenis_pelayanan' => 'Pemeriksaan Telinga',
                'tanggal_waktu' => Carbon::now()->subDays(6),
                'status' => 'Dijadwalkan',
                'catatan_tambahan' => 'Pasien mengalami gangguan pendengaran',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Pelayanan::create([
                'pasien_id' => 8,
                'pegawai_klinik_id' => 2,
                'jenis_pelayanan' => 'Pemeriksaan Saraf',
                'tanggal_waktu' => Carbon::now()->subDays(7),
                'status' => 'Selesai',
                'catatan_tambahan' => 'Pasien memerlukan terapi lanjutan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Pelayanan::create([
                'pasien_id' => 9,
                'pegawai_klinik_id' => 1,
                'jenis_pelayanan' => 'Pemeriksaan Pernapasan',
                'tanggal_waktu' => Carbon::now()->subDays(8),
                'status' => 'Dijadwalkan',
                'catatan_tambahan' => 'Pasien mengalami sesak napas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            Pelayanan::create([
                'pasien_id' => 10,
                'pegawai_klinik_id' => 3,
                'jenis_pelayanan' => 'Pemeriksaan Pencernaan',
                'tanggal_waktu' => Carbon::now()->subDays(9),
                'status' => 'Selesai',
                'catatan_tambahan' => 'Pasien mengalami masalah pencernaan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
