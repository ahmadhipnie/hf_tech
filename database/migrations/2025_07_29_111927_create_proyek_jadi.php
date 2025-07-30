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
        Schema::create('proyek_jadi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->string('jenis_proyek');
            $table->integer('harga_asli');
            $table->integer('harga_diskon');
            $table->text('deskripsi_proyek')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyek_jadi');
    }
};
