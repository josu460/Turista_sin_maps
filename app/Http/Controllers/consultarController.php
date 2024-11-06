<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consultarController extends Controller
{
    public function consultar(Request $request)
    {
        $validacion = $request->validate([
            'origen' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
        ]);


        session()->flash('exito', 'Consulta exitosa');
        return to_route('EleccionDestino');
    }
}
