<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaporanKeuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_keuangan', function (Blueprint $table) {
            $table->id('Id_keuangan');
            $table->integer('role_id_pengurus');
            $table->foreign('role_id_pengurus')->references('Id_pengurus')->on('pengurus');
            $table->char('Nama_Keuangan',255);
            $table->dateTime('Tanggal_laporankeuangan',$precision = 0);
            $table->integer('Jumlah');
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
        //
    }
}
