<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanbukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualanbukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_buku')->unique();
            $table->string('judul_buku')->unique();
            $table->integer('harga_jualsatuan')->default(50);
            $table->integer('harga_jualeceran')->default(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualanbukus');
    }
}
