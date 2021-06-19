<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventaris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id('Id_Inventaris');
            $table->integer('role_id_pengurus');
            $table->foreign('role_id_pengurus')->references('Id_pengurus')->on('pengurus');
            $table->String('Nama_inventaris');
            $table->dateTime('Tanggal_perolehan',$precision = 0);
            $table->integer('Nilai_perolehan');
            $table->String('Asal_inventaris');
            $table->String('Keterangan');
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
