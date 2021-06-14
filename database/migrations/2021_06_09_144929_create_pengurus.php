<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurus extends Migration
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
            $table->char('Nama_pengurus',255);
            $table->dateTime('Tempat tanggal lahir',$precision = 0);
            $table->char('Alamat',255);
            $table->integer('Notelepon');
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
        Schema::dropIfExists('pengurus');
    }
}
