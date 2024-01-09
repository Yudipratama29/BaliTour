<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('aktivitas', function (Blueprint $table) {
            $table->id();
            $table->string('aktivitas_name'); // Tambahkan kolom untuk Nama Aktivitas
            $table->text('aktivitas_description'); // Tambahkan kolom untuk Deskripsi Aktivitas
            $table->decimal('aktivitas_price', 10, 2); // Tambahkan kolom untuk Harga Aktivitas
            $table->timestamps();
        });
    }

    /**
     * Mundurkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas');
    }
};
