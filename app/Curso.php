<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'alumno_id',
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
