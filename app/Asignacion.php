<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $fillable = [
        'curso_id', 'alumno_id',
        ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
