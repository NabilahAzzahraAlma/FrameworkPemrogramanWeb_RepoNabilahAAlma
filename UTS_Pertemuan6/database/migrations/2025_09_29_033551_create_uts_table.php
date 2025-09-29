<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// 2. Membuat migration tabel "uts" lewat artisan di terminal:
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('uts', function (Blueprint $table) {
            $table->id('uts_id');
            $table->string('nama_matkul');
            $table->integer('jumlah_sks');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('uts');
    }
};
