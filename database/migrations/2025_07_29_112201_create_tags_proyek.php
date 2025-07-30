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
        Schema::create('tags_proyek', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tag');
            $table->string('icon')->nullable();

            $table->unsignedBigInteger('proyek_jadi_id');
            $table->foreign('proyek_jadi_id')->references('id')->on('proyek_jadi')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags_proyek');
    }
};
