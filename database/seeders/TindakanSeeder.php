<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Ambil ID dokter dan pasien dari tabel yang ada
       $dokters = DB::table('pegawai_klinik')->where('jabatan', 'Dokter')->pluck('id')->toArray();
       $pasienIds = DB::table('wilayah_pasien')->pluck('id')->toArray();

       // Data seeder
       $data = [
           [
               'nama_tindakan' => 'Pemeriksaan Umum',
               'deskripsi' => 'Pemeriksaan umum oleh dokter umum',
               'kategori' => 'Pemeriksaan',
               'kode_tindakan' => 'T001',
               'tanggal_waktu' => Carbon::now(),
               'durasi' => 30,
               'pegawai_klinik_id' => $dokters[array_rand($dokters)],
               'pasien_id' => $pasienIds[array_rand($pasienIds)],
               'tempat' => 'Klinik Utama',
               'biaya' => 150000,
               'status' => 'Selesai',
               'catatan_tambahan' => 'Tidak ada',
               'resiko' => 'Rendah',
               'hasil' => 'Normal',
               'tindak_lanjut' => 'Follow-up dalam 2 minggu',
               'bahan_alat' => 'Stetoskop, Termometer',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'nama_tindakan' => 'Konsultasi Spesialis',
               'deskripsi' => 'Konsultasi dengan spesialis bedah',
               'kategori' => 'Konsultasi',
               'kode_tindakan' => 'T002',
               'tanggal_waktu' => Carbon::now()->addDays(1),
               'durasi' => 45,
               'pegawai_klinik_id' => $dokters[array_rand($dokters)],
               'pasien_id' => $pasienIds[array_rand($pasienIds)],
               'tempat' => 'Klinik Spesialis',
               'biaya' => 250000,
               'status' => 'Selesai',
               'catatan_tambahan' => 'Perlu persetujuan untuk tindakan lanjut',
               'resiko' => 'Sedang',
               'hasil' => 'Diperlukan tindakan lanjutan',
               'tindak_lanjut' => 'Tindakan lanjutan dijadwalkan',
               'bahan_alat' => 'Alat Spesialis',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
            'nama_tindakan' => 'Tes Darah',
            'deskripsi' => 'Pengambilan dan analisis sampel darah',
            'kategori' => 'Lab',
            'kode_tindakan' => 'T003',
            'tanggal_waktu' => Carbon::now(),
            'durasi' => 15,
            'pegawai_klinik_id' => $dokters[array_rand($dokters)],
            'pasien_id' => $pasienIds[array_rand($pasienIds)],
            'tempat' => 'Lab Klinik',
            'biaya' => 50000,
            'status' => 'Selesai',
            'catatan_tambahan' => 'Tidak ada',
            'resiko' => 'Rendah',
            'hasil' => 'Hasil darah normal',
            'tindak_lanjut' => 'Tidak ada',
            'bahan_alat' => 'Jarum suntik, Tabung darah',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
           // Tambahkan 7 entri lainnya dengan format yang sama
       ];

        // Tambahkan data lainnya
        for ($i = 4; $i <= 10; $i++) {
            $data[] = [
                'nama_tindakan' => 'Tindakan ' . $i,
                'deskripsi' => 'Deskripsi tindakan ' . $i,
                'kategori' => 'Kategori ' . $i,
                'kode_tindakan' => 'T00' . $i,
                'tanggal_waktu' => Carbon::now(),
                'durasi' => rand(15, 60),
                'pegawai_klinik_id' => $dokters[array_rand($dokters)],
                'pasien_id' => $pasienIds[array_rand($pasienIds)],
                'tempat' => 'Tempat ' . $i,
                'biaya' => rand(50000, 200000),
                'status' => 'Selesai',
                'catatan_tambahan' => 'Catatan tambahan ' . $i,
                'resiko' => 'Rendah',
                'hasil' => 'Hasil tindakan ' . $i,
                'tindak_lanjut' => 'Tindak lanjut ' . $i,
                'bahan_alat' => 'Bahan dan alat ' . $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

       DB::table('tindakan')->insert($data);
    }
}
