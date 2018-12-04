<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            //Llave foranea
            $table->unsignedInteger('asistencia_id');
            $table->foreign('asistencia_id')->references('id')->on('asistencias');
            //Fin de llave foranea
            $table->date('fechaClase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('clases');
    }
}
