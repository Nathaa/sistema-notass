<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
    protected $fillable = [
        'clase_id', 'alumno_id', 'estadoAsistencia',
    ];
}
