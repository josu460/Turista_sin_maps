<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'servicios' => 'required|string|max:255',
            'distancia' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para el archivo de imagen
        ]);

        
        return redirect()->back()->with('success', 'El hotel se ha agregado correctamente.');
    }
}
