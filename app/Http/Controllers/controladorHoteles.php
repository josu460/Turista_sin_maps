<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorHoteles extends Controller
{
    public function buscarHotel(Request $request)
    {
        $validacion = $request->validate([
            
        ]);


        session()->flash('exito', 'Busqueda de vuelo exitosa');
        return to_route('Vuelos');
    }
}
