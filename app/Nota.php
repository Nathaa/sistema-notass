<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'notas', 'descripcion', 'curso_id', 'alumno_id',
    ];
}
