<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function guardar(Request $request)
    {
        // Validaciones en el servidor
        $validatedData = $request->validate([
            'aerolinea' => 'required|string|max:255',
            'numero_vuelo' => 'required|string|max:10',
            'horario' => 'required|string',
            'duracion' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
            'horario_salida' => 'required|string',
        ], [
            'aerolinea.required' => 'El nombre de la aerolínea es obligatorio.',
            'numero_vuelo.required' => 'El número de vuelo es obligatorio.',
            'horario.required' => 'El horario es obligatorio.',
            'duracion.required' => 'La duración del vuelo es obligatoria.',
            'precio.required' => 'El precio por pasajero es obligatorio.',
            'precio.numeric' => 'El precio debe ser un valor numérico.',
            'horario_salida.required' => 'El horario de salida es obligatorio.',
        ]);

        
        return redirect()->route('vuelo')->with('success', 'Los datos del vuelo han sido guardados correctamente.');
    }
}
