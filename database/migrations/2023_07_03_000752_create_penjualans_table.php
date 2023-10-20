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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id('id_penjualan');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('jenis');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->enum('status', ['dikirim', 'selesai'])->default('dikirim');
            $table->date('tgl_penjualan');
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
