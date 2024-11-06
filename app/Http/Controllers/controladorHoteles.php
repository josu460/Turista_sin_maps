<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorHoteles extends Controller
{
    public function buscarHotel(Request $request)
    {
        // Validación del formulario
        $validacion = $request->validate([
            'campoHotel' => 'required|string|max:100', // Campo obligatorio, texto y longitud máxima de 100 caracteres
            'campoInicio' => 'required|date|after_or_equal:today', // Fecha de entrada debe ser hoy o en el futuro
            'campoFin' => 'required|date|after:campoInicio', // Fecha de salida debe ser posterior a la fecha de entrada
            'campoAdultos' => 'required|integer|min:1|max:10', // Adultos, mínimo 1 y máximo 10
            'campoInfantes' => 'nullable|integer|min:0|max:10', // Niños, mínimo 0 y máximo 10
            'campoHabitaciones' => 'required|integer|min:1|max:5' // Habitaciones, mínimo 1 y máximo 5
        ]);

        // Si la validación es exitosa, se muestra un mensaje de éxito
        session()->flash('exito', 'Búsqueda de hotel exitosa');
        
        // Redirecciona a la ruta de 'hoteles' después de la validación
        return to_route('hoteles');
    }
}
