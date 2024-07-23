<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tindakan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tindakan');
            $table->text('deskripsi')->nullable();
            $table->string('kategori');
            $table->string('kode_tindakan')->unique();
            $table->datetime('tanggal_waktu');
            $table->integer('durasi')->nullable();
            $table->unsignedBigInteger('pegawai_klinik_id'); // Mengacu pada pegawai (dokter)
            $table->unsignedBigInteger('pasien_id'); // Mengacu pada wilayah_pasien
            $table->string('tempat');
            $table->decimal('biaya', 10, 2);
            $table->string('status');
            $table->text('catatan_tambahan')->nullable();
            $table->string('resiko')->nullable();
            $table->text('hasil')->nullable();
            $table->text('tindak_lanjut')->nullable();
            $table->text('bahan_alat')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('pegawai_klinik_id')->references('id')->on('pegawai_klinik')->onDelete('cascade');
            $table->foreign('pasien_id')->references('id')->on('wilayah_pasien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tindakan');
    }
};
