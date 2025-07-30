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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_tugas')->default('lainnya');
            $table->datetime('deadline_tugas')->nullable();
            $table->string('email_pemesan');
            $table->string('nomor_telepon');
            $table->text('detail_tugas')->nullable();
            $table->string('nama_pelanggan')->nullable();
            $table->string('status')->default('tolong_dicek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
