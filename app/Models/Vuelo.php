<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    // Aquí puedes especificar la tabla si es diferente de 'vuelos'
    // protected $table = 'nombre_de_la_tabla';

    protected $fillable = [
        'aerolinea',
        'numeroVuelo',
        'horario',
        'duracion',
        'precio',
        'horarioSalida',
    ];
}
