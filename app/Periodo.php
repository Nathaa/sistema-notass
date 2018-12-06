<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = [
        'nombre', 'duracion', 'año', 'curso_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
