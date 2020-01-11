<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianbukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelianbukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_buku')->unique();
            $table->string('judul_buku')->unique();
            $table->integer('harga_belisatuan')->default(50);
            $table->integer('harga_belieceran')->default(50);
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
        Schema::dropIfExists('pembelianbukus');
    }
}
