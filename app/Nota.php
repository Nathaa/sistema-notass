<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'notas', 'descripcion', 'alumno_id',
    ];

    public function Alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
