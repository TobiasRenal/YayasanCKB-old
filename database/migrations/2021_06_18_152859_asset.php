<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->id('Id_Asset');
            $table->integer('role_id_pengurus');
            $table->foreign('role_id_pengurus')->references('Id_pengurus')->on('pengurus');
            $table->char('Nama_asset',255);
            $table->dateTime('Tanggal_perolehan',$precision = 0);
            $table->integer('Nilai_perolehan');
            $table->char('Asal_asset',255);
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
