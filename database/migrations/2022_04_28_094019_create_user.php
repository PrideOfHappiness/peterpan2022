<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('user_id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->string('gender');
            $table->string('status');
            $table->string('alamat');
            $table->string('password');
            $table->bigInteger('id_department')->unsigned()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_department')->references('id')->on('user_department')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
