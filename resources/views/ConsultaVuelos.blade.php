@extends('layouts.navbaradmi')
@section('titulo', 'Consulta de Vuelos')
@section('contenido')
<div class="bg-blue-500 text-white py-8 px-4">
    <h1 class="text-2xl font-bold text-center">CONSULTAR VUELOS</h1>
</div>
<div class="bg-white p-6 rounded-lg shadow-lg mx-auto max-w-8xl mt-5 grid grid-cols-3 gap-6">
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
    <x-card-consultar-vuelo></x-card-consultar-vuelo>
</div>


@endsection