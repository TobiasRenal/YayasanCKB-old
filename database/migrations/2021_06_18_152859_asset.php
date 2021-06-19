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
            $table->id('id_asset');
            $table->integer('role_id');
            $table->foreign('role_id')->references('role_id')->on('role_pengurus');
            $table->String('nama_asset');
            $table->dateTime('tanggal_perolehan',$precision = 0);
            $table->bigInteger('nilai_perolehan');
            $table->String('asal_asset');
            $table->String('keterangan');
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
