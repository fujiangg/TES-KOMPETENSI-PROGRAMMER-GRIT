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
        Schema::create('wilayah_pasien', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('nama');
            $table->date('ttl');
            $table->integer('usia');
            $table->string('email')->unique();
            $table->string('telepon');
            $table->string('alamat');
            $table->string('kota_kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos', 10);
            $table->text('deskripsi')->nullable();
            $table->timestamps(); // Includes created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayah_pasien');
    }
};
