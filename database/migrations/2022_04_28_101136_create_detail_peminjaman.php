<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->bigInteger('id_pinjam')->unsigned();
            $table->bigInteger('id_barang')->unsigned();
            $table->string('status');
            $table->timestamps();
            $table->foreign('id_pinjam')->references('id')->on('peminjaman')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_barang')->references('id')->on('databarang')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_peminjaman');
    }
}
