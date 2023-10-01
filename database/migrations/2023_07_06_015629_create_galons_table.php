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
        Schema::create('galons', function (Blueprint $table) {
            $table->id('id_galon');
            // $table->unsignedBigInteger('id_depot');
            // $table->foreign('id_depot')->references('id_depot')->on('tabel_depot')->onDelete('cascade');
            $table->string('jenis', 50);
            $table->string('merk', 50);
            $table->integer('liter_air');
            $table->integer('stok');
            $table->bigInteger('tarif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galons');
    }
};
