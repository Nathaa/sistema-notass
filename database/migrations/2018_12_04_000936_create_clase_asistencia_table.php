<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaseAsistenciaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clase_asistencia', function (Blueprint $table) {
            $table->increments('id');

            //Llave foranea
            $table->unsignedInteger('asistencia_id');
            $table->foreign('asistencia_id')->references('id')->on('asistencias');
            //Fin de llave foranea

            //Llave foranea
            $table->unsignedInteger('clase_id');
            $table->foreign('clase_id')->references('id')->on('clases');
            //Fin de llave foranea

            //Llave foranea
            $table->unsignedInteger('alumno_id');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            //Fin de llave foranea

            $table->boolean('estadoAsistencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('clase_asistencia');
    }
}
