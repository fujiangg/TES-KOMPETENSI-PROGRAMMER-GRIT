<?php

namespace Database\Seeders;

use App\Models\PemberianObat;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemberianObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (PemberianObat::count() === 0) {
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(1),
                'pasien_id' => 1, // Ganti dengan ID pasien yang valid
                'obat_id' => 1, // Ganti dengan ID obat yang valid
                'jumlah' => 2,
                'dosis' => '500 mg',
                'rute_pemberian' => 'Oral',
                'keterangan' => 'Pemberian dilakukan setelah makan.',
                'pegawai_klinik_id' => 1, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(2),
                'pasien_id' => 2, // Ganti dengan ID pasien yang valid
                'obat_id' => 2, // Ganti dengan ID obat yang valid
                'jumlah' => 1,
                'dosis' => '250 mg',
                'rute_pemberian' => 'Injeksi',
                'keterangan' => 'Pemberian dilakukan sebelum makan.',
                'pegawai_klinik_id' => 2, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(3),
                'pasien_id' => 3, // Ganti dengan ID pasien yang valid
                'obat_id' => 3, // Ganti dengan ID obat yang valid
                'jumlah' => 3,
                'dosis' => '100 mg',
                'rute_pemberian' => 'Oral',
                'keterangan' => 'Pemberian dilakukan sebelum tidur.',
                'pegawai_klinik_id' => 3, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(4),
                'pasien_id' => 4, // Ganti dengan ID pasien yang valid
                'obat_id' => 4, // Ganti dengan ID obat yang valid
                'jumlah' => 1,
                'dosis' => '50 mg',
                'rute_pemberian' => 'Injeksi',
                'keterangan' => 'Pemberian dilakukan pagi hari.',
                'pegawai_klinik_id' => 4, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(5),
                'pasien_id' => 5, // Ganti dengan ID pasien yang valid
                'obat_id' => 5, // Ganti dengan ID obat yang valid
                'jumlah' => 2,
                'dosis' => '200 mg',
                'rute_pemberian' => 'Oral',
                'keterangan' => 'Pemberian dilakukan siang hari.',
                'pegawai_klinik_id' => 5, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(6),
                'pasien_id' => 6, // Ganti dengan ID pasien yang valid
                'obat_id' => 6, // Ganti dengan ID obat yang valid
                'jumlah' => 1,
                'dosis' => '150 mg',
                'rute_pemberian' => 'Injeksi',
                'keterangan' => 'Pemberian dilakukan sore hari.',
                'pegawai_klinik_id' => 6, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(7),
                'pasien_id' => 7, // Ganti dengan ID pasien yang valid
                'obat_id' => 7, // Ganti dengan ID obat yang valid
                'jumlah' => 2,
                'dosis' => '500 mg',
                'rute_pemberian' => 'Oral',
                'keterangan' => 'Pemberian dilakukan malam hari.',
                'pegawai_klinik_id' => 7, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(8),
                'pasien_id' => 8, // Ganti dengan ID pasien yang valid
                'obat_id' => 8, // Ganti dengan ID obat yang valid
                'jumlah' => 1,
                'dosis' => '100 mg',
                'rute_pemberian' => 'Injeksi',
                'keterangan' => 'Pemberian dilakukan setelah makan.',
                'pegawai_klinik_id' => 8, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(9),
                'pasien_id' => 9, // Ganti dengan ID pasien yang valid
                'obat_id' => 9, // Ganti dengan ID obat yang valid
                'jumlah' => 3,
                'dosis' => '250 mg',
                'rute_pemberian' => 'Oral',
                'keterangan' => 'Pemberian dilakukan sebelum makan.',
                'pegawai_klinik_id' => 9, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            PemberianObat::create([
                'tanggal_pemberian' => Carbon::now()->subDays(10),
                'pasien_id' => 10, // Ganti dengan ID pasien yang valid
                'obat_id' => 10, // Ganti dengan ID obat yang valid
                'jumlah' => 2,
                'dosis' => '500 mg',
                'rute_pemberian' => 'Injeksi',
                'keterangan' => 'Pemberian dilakukan pagi hari.',
                'pegawai_klinik_id' => 10, // Ganti dengan ID pegawai yang valid
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
