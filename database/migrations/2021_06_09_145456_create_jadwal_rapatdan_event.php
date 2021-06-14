<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalRapatdanEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_rapatdan_event', function (Blueprint $table) {
            $table->id('Id_jadwal');
            $table->integer('role_id_pengurus');
            $table->char('Nama_jadwal',255);
            $table->dateTime('Tanggal jadwal',$precision = 0);
            $table->char('Keterangan',255);
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
        Schema::dropIfExists('jadwal_rapatdan_event');
    }
}
