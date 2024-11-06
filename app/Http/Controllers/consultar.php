<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consultar extends Controller
{
    public function consultar(Request $request)
    {
        $validacion = $request->validate([
            'origen' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
            'tipo_viaje' => 'required|string|in:Vuelos,Hoteles', 

        ]);


        session()->flash('exito', 'Busqueda de vuelo exitosa');
        return to_route('EleccionDestino');
    }
}
