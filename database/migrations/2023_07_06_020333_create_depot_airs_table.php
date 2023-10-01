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
        Schema::create('depot_airs', function (Blueprint $table) {
            $table->id('id_depot');
            // $table->unsignedBigInteger('id_owner');
            // $table->foreign('id_owner')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_depot');
            $table->string('alamat_depot');
            $table->string('no_telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depot_airs');
    }
};
