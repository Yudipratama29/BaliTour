<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('villa', function (Blueprint $table) {
            $table->id();
            $table->string('villa_name');
            $table->text('villa_description');
            $table->decimal('villa_price', 10, 2);
            // tambahkan kolom-kolom lain yang sesuai

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villa');
    }
}
