<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'curso_id', 'nombre',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
