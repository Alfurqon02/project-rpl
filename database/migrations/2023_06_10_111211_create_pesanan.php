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
            $table->string('nama_pemesan');
            $table->string('no_hp_pemesan');
            $table->string('total_pembayaran');
            $table->unsignedBigInteger('status_pesanan');
            $table->boolean('status_pembayaran');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('status_pesanan')->references('id')->on('parameter_status_pesanan');
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
