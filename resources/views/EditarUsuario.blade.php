@extends('layouts.navbaradmi')

@section('titulo', 'Editar Usuario')

@section('contenido')
<div class="container mx-auto py-12 px-6 flex justify-center">
    <div class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
        <div class="text-center mb-4">
            <h2 class="text-2xl font-bold text-teal-600">Editar Información del Usuario</h2>
        </div>

        <form action="/ActualizarUsuario" method="POST">
            @csrf

            <div class="space-y-4">
            @if(session('exito'))
    <script>
        Swal.fire({
            title: "{{__('Respuesta del servidor')}}",
            text: '{{ session('exito') }}',
            icon: "success"
        });
    </script>
@endif
                <div>
                    <label for="nombre" class="block text-gray-600 font-medium">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="Cristopher" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <small>{{$errors->first('nombre')}}</small>
                </div>

                <div>
                    <label for="apellido" class="block text-gray-600 font-medium">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" value="Loyola" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <small>{{$errors->first('apellido')}}</small>
                </div>

                <div>
                    <label for="correo" class="block text-gray-600 font-medium">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" value="loyolacristo303@gmail.com" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <small>{{$errors->first('correo')}}</small>
                </div>

                <div>
                    <label for="telefono" class="block text-gray-600 font-medium">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" value="442345234" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <small>{{$errors->first('telefono')}}</small>
                </div>

                <div>
                    <label for="password" class="block text-gray-600 font-medium">Contraseña:</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500" placeholder="Nueva Contraseña (opcional)">
                    <small>{{$errors->first('password')}}</small>
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="px-4 py-2 text-white bg-teal-500 rounded-lg hover:bg-teal-600 transition duration-300">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection

