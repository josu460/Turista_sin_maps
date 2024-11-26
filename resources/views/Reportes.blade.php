@extends('layouts.navbaradmi')

@section('titulo', 'Reportes Generales')

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Reportes Generales</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Reportes Usuarios</h2>
            <div class="flex space-x-4">
            <a href="#" class="text-white bg-green-500 hover:bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5">Excel</a>
            <a href="#" class="text-white bg-blue-500 hover:bg-blue-600 font-medium rounded-lg text-sm px-4 py-2">Word</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Reporte Aviones</h2>
            <div class="flex space-x-4">
                <a href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Excel</a>
                <a href="#" class="text-white bg-blue-500 hover:bg-blue-600 font-medium rounded-lg text-sm px-4 py-2">Word</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Reporte Hoteles</h2>
            <div class="flex space-x-4">
                <a href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Excel</a>
                <a href="#" class="text-white bg-blue-500 hover:bg-blue-600 font-medium rounded-lg text-sm px-4 py-2">Word</a>
            </div>
        </div>
    </div>
</div>
@endsection
