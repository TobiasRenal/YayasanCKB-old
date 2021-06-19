<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengurus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id('Id_pengurus');
            $table->integer('role_id_pengurus');
            $table->foreign('role_id_pengurus')->references('role_id')->on('role_pengurus');
            $table->String('Nama_pengurus',255);
            $table->String('Tempat_lahir');
            $table->dateTime('Tanggal_lahir',$precision = 0);
            $table->String('Alamat',255);
            $table->String('Notelepon');
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
        //
    }
}
