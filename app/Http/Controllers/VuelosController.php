<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuelosController extends Controller
{

    public function VuelosBuscar(Request $request)
    {
        $validacion = $request->validate([
            'tipo_viaje' => 'required',
            'pasajeros' => 'required',
            'clase' => 'required',
            'tarifa' => 'required',
            'origen' => 'required',
            'destino' => 'required',
            'fecha_despegue' => 'required',
            'fecha_regreso' => 'required',
        ]);


        session()->flash('exito', 'Busqueda de vuelo exitosa');
        return to_route('Vuelos');
    }
}
