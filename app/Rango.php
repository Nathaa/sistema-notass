<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rango extends Model
{
    protected $fillable = [
        'nombre', 'duracion', 'fechaInicio', 'fechaFinal', 'periodo_id', 'curso_id',
    ];

    public function periodo()
    {
        return $this->belongsTo(Periodo::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
