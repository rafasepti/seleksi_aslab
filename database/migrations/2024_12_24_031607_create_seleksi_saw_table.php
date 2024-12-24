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
        Schema::create('seleksi_saw', function (Blueprint $table) {
            $table->id();
            $table->enum('kriteria', []);
            $table->enum('bobot_kriteria', []);
            $table->decimal('hasil_akhir',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seleksi_saw');
    }
};
