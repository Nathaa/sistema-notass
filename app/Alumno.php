<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombre', 'edad', 'direccion', 'encargado', 'curso_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
