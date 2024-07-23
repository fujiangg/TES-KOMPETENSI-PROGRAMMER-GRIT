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
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id'); // Mengacu pada wilayah_pasien
            $table->unsignedBigInteger('pegawai_klinik_id'); // Mengacu pada pegawai (dokter)
            $table->string('jenis_pelayanan');
            $table->timestamp('tanggal_waktu');
            $table->string('status')->default('Dijadwalkan');
            $table->text('catatan_tambahan')->nullable();
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
        Schema::dropIfExists('pelayanan');
    }
};
