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
        Schema::create('keluhan', function (Blueprint $table) {
            $table->id('id_keluhan');
            $table->text('nama_keluhan');
            $table->integer('ongkos');

            $table->string('no_pol', 10);
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_pegawai');

            $table->foreign('no_pol', 10)->references('no_pol')->on('kendaraan')->onDelete('CASCADE');
            $table->foreign('id_customer')->references('id_customer')->on('customer')->onDelete('CASCADE');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};
