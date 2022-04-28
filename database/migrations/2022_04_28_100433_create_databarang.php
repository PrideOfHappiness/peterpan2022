<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databarang', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('nama_barang');
            $table->integer('stok');
            $table->string('status');
            $table->bigInteger('kode_kategori')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('kode_kategori')->references('id')->on('kategoribarang')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('databarang');
    }
}
