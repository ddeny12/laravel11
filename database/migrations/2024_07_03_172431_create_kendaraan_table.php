<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->string('no_pol', 10)->primary();
            $table->string('no_mesin', 15)->unique();
            $table->enum('merek', ['honda', 'yamaha', 'suzuki', 'kawasaki', 'lain'])->nullable(false);
            $table->enum('warna', ['Putih', 'Hitam', 'Hijau', 'Biru', 'Merah', 'Lain'])->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan');
    }
}

