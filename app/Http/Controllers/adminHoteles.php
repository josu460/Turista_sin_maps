<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrarHotel;
use App\Http\Requests\EditarU;
class adminHoteles extends Controller
{
    public function RegistrarHotel()
    {
        return view('registroHoteles');
    }

    public function ConsultarHotel() {

        return view('consultarHotel');
    }

    public function inicio() {

        return view('home');
    }

    public function ConsultarUsuario(){

        return view('ConsultarUsuario');
    }


    Public function EditarUsuario(){
        return view('EditarUsuario');
    }


    public function ActualizarUsuario(EditarU $peticion)
    {

        $validacion = $peticion->validate([ 
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,email,',
            'telefono' => 'nullable|string|max:20',
            'password' => 'required|string|max:255|min:8',
        ]);
    
        $usuario = $peticion->input('nombre');
            
        session()->flash('exito', 'Todo correcto: ' . $usuario . ' Usuario Actualizado');
            
        return redirect('EditarUsuario');
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


            
            return redirect('consultaHoteles');
    
        
    }

    
}
