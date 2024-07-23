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
        Schema::create('pemberian_obat', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->datetime('tanggal_pemberian');
            $table->unsignedBigInteger('pasien_id'); // Foreign key ke tabel wilayah_pasien
            $table->unsignedBigInteger('obat_id'); // Foreign key ke tabel obat
            $table->integer('jumlah');
            $table->string('dosis');
            $table->string('rute_pemberian');
            $table->text('keterangan')->nullable();
            $table->unsignedBigInteger('pegawai_klinik_id'); // Foreign key ke tabel pegawai_klinik
            $table->timestamps(); // Includes created_at and updated_at

            // Definisikan foreign key constraints
            $table->foreign('pasien_id')->references('id')->on('wilayah_pasien')->onDelete('cascade');
            $table->foreign('obat_id')->references('id')->on('obat')->onDelete('cascade');
            $table->foreign('pegawai_klinik_id')->references('id')->on('pegawai_klinik')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemberian_obat');
    }
};
