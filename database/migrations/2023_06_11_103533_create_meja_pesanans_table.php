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
        Schema::create('meja_pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_meja');
            $table->unsignedBigInteger('id_pesanan');
            $table->timestamps();

            $table->foreign('id_meja')->on('meja')->references('id');
            $table->foreign('id_pesanan')->on('pesanan')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meja_pesanans');
    }
};
