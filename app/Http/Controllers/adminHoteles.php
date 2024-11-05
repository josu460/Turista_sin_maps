<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrarHotel;

class adminHoteles extends Controller
{
    public function RegistrarHotel()
    {
        return view('registroHoteles');
    }
    

    public function addHoteles(RegistrarHotel $peticion) 
    {
        $validacion = $peticion->validate([    
        'nombreHotel' => 'required|string|max:255',
        'categoria' => 'required|in:Economico,Medio,Lujo',
        'precio' => 'required|numeric|min:0',
        'servicios' => 'required|string',
        'distancia' => 'required|numeric|min:0',
        'estrellas' => 'required|integer|between:1,5',]);

        $hotel = $peticion->input('nombreHotel');
        
            session()->flash('exito', 'Todo correcto: ' . $hotel . ' Hotel guardado');


            
            return redirect('registroHoteles');
    
        
    }
}
