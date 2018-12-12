<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->increments('id');
            //Llave foranea
            $table->unsignedInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            //Fin de llave foranea
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}
