<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'fecha_nacimiento',
        'foto_perfil'
    ];

    // Un estudiante tiene muchas clases
    public function clases()
    {
        return $this->hasMany(Clase::class);
    }
}