<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $fillable = [
        'asistencia_id', 'fechaClase', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
