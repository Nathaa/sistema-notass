<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('asignacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->integer('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('asignaciones');
    }
}
