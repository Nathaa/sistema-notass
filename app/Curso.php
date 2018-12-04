<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'rango_id', 'alumno_id',
        ];
}
