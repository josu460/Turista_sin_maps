@extends('layouts.navbaradmi')

@section('titulo', 'Detalles del Usuario')

@section('contenido')
<div class="container mx-auto py-12 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <div class="text-center mb-4">
                <h2 class="text-2xl font-bold text-teal-600">Información del Usuario</h2>
            </div>
            <div class="space-y-4">
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Nombre:</span>
                    <span class="text-gray-800">Cristopher</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Apellido:</span>
                    <span class="text-gray-800">Loyola</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Correo Electrónico:</span>
                    <span class="text-gray-800">loyolacristo303@gmail.com</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Teléfono:</span>
                    <span class="text-gray-800">442345234</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Contraseña:</span>
                    <span class="text-gray-800">********</span>
                </div>
            </div>
            <div class="mt-6 flex justify-between">
                <a href="" class="px-4 py-2 text-sm font-medium text-white bg-teal-500 rounded-lg hover:bg-teal-600 transition duration-300">Editar</a>
                <form action="/EditarUsuario" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 transition duration-300">Eliminar</button>
                </form>
            </div>
        </div>

        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <div class="text-center mb-4">
                <h2 class="text-2xl font-bold text-teal-600">Información del Usuario</h2>
            </div>
            <div class="space-y-4">
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Nombre:</span>
                    <span class="text-gray-800">Antonio</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Apellido:</span>
                    <span class="text-gray-800">Martinez</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Correo Electrónico:</span>
                    <span class="text-gray-800">122044391@upq.edu.mx</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Teléfono:</span>
                    <span class="text-gray-800">123-456-7892</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Contraseña:</span>
                    <span class="text-gray-800">********</span>
                </div>
            </div>
            <div class="mt-6 flex justify-between">
                <a href="" class="px-4 py-2 text-sm font-medium text-white bg-teal-500 rounded-lg hover:bg-teal-600 transition duration-300">Editar</a>
                <form action="/EditarUsuario" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 transition duration-300">Eliminar</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
