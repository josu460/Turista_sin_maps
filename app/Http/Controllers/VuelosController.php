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


    public function CrearVuelos(Request $request)
    {
        $validacion = $request->validate([
            'nombreVuelo' => 'required',
            'salida' => 'required',
            'fecha_despegueV' => 'required',
            'fecha_regresoV' => 'required',
            'precio' => 'required',
            'vueloT' => 'required',
            'estrellas' => 'required',
        ]);
        session()->flash('exito', 'Vuelo creado exitosamente');
        return to_route('ConsultaVuelos');
    }

    public function EditarVuelos(Request $request)
    {
        $validacion = $request->validate([
            'nombreVuelo' => 'required',
            'salida' => 'required',
            'fecha_despegueV' => 'required',
            'fecha_regresoV' => 'required',
            'precio' => 'required',
            'vueloT' => 'required',
            'estrellas' => 'required',
        ]);
        session()->flash('exito', 'Vuelo Editado exitosamente');
        return to_route('ConsultaVuelos');
    }

    public function ComprarVuelo(Request $request)
    {
        $validacion = $request->validate([
            'destino' => 'required',
            'salida' => 'required',
            'fecha_ida' => 'required',
            'fecha_vuelta' => 'required',
            'asientoSeleccionado' => 'required',
        ]);
        session()->flash('exito', 'Vuelo comprado exitosamente');
        return to_route('ConsultaVuelos');
    }

}
