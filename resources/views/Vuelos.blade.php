@extends('layouts.navbaradmi')
@section('titulo', ' Vuelos')
    @section('contenido')
    <link rel="stylesheet" href="{{ asset('css/vuelos.css') }}">

    <div class="bg-blue-500 text-white py-8 px-4">
    <h1 class="text-2xl font-bold text-center">Vuelos a Cada Rincon del Mundo</h1>
    </div>

<div class="bg-white p-6 rounded-lg shadow-lg mx-auto max-w-7xl mt-4">
    <form class="grid grid-cols-1 md:grid-cols-6 gap-4">
        <div class="col-span-1 ">
            <label for="trip-type" class="block mb-2 text-sm font-medium text-gray-700">Tipo de Viaje</label>
            <select id="trip-type" class="w-full p-2.5 border border-gray-300 rounded-lg">
                <option>Ida y vuelta</option>
                <option>Solo ida</option>
            </select>
        </div>

        <div class="col-span-1">
            <label for="passengers" class="block mb-2 text-sm font-medium text-gray-700">Pasajeros</label>
            <select id="passengers" class="w-full p-2.5 border border-gray-300 rounded-lg">
                <option>1 Pasajero</option>
                <option>2 Pasajeros</option>
                <option>3 Pasajeros</option>
            </select>
        </div>

        <div class="col-span-1">
            <label for="class" class="block mb-2 text-sm font-medium text-gray-700">Clase</label>
            <select id="class" class="w-full p-2.5 border border-gray-300 rounded-lg">
                <option>Clase</option>
                <option>Económica</option>
                <option>Premium</option>
                <option>Business</option>
            </select>
        </div>

        <div class="col-span-1 md:col-span-2 ">
            <label for="fare" class="block mb-2 text-sm font-medium text-gray-700">Tarifa</label>
            <select id="fare" class="w-full p-2.5 border border-gray-300 rounded-lg">
                <option>Tarifa</option>
                <option>Clásica</option>
                <option>Flex</option>
                <option>Superflex</option>
            </select>
        </div>

        <div class="col-span-2 ">
            <label for="origin" class="block mb-2 text-sm font-medium text-gray-700">Desde</label>
            <input type="text" id="origin" class="w-full p-2.5 border border-gray-300 rounded-lg" placeholder="Origen">
        </div>

        <div class="col-span-2">
            <label for="destination" class="block mb-2 text-sm font-medium text-gray-700">A</label>
            <input type="text" id="destination" class="w-full p-2.5 border border-gray-300 rounded-lg" value="Querétaro QRO" readonly>
        </div>

        <div class="col-span-1">
            <label for="departure-date" class="block mb-2 text-sm font-medium text-gray-700">Ida</label>
            <input type="date" id="departure-date" class="w-full p-2.5 border border-gray-300 rounded-lg">
        </div>

        <div class="col-span-1">
            <label for="return-date" class="block mb-2 text-sm font-medium text-gray-700">Vuelta</label>
            <input type="date" id="return-date" class="w-full p-2.5 border border-gray-300 rounded-lg">
        </div>

        <div class="col-span-1 md:col-span-6">
            <button type="submit" class="w-full boton-estilo text-white py-2.5 rounded-lg font-semibold hover:bg-customBlue transition">
                Buscar
            </button>
        </div>
    </form>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
    <x-cardvuelos></x-cardvuelos>
    <x-cardvuelos></x-cardvuelos>
    <x-cardvuelos></x-cardvuelos>
    
</div>
    @endsection