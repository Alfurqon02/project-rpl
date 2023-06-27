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
            $table->integer('total_pembayaran')->nullable();
            $table->unsignedBigInteger('status_pesanan');
            $table->boolean('status_pembayaran');
            $table->date('tanggal_booking');
            $table->time('jam_booking');
            $table->unsignedBigInteger('created_by')->nullable();
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
