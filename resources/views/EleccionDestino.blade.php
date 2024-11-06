@extends('layouts.navbaradmi')
@section('titulo', 'EleccionDestino')
    @section('contenido')
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/EleccionDestino.css') }}">
    
   


<div class="container mx-auto mt-10 flex justify-center">
    <div class="card bg-white shadow-md rounded-lg px-8 py-6 w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
        <div class="card-body flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold mb-6 text-center">¿Dónde será tu próxima aventura?</h1>

            <form id="consultar" class="w-full" action="/consultar" method="POST">
                @csrf
                <input type="hidden" id="tipo_viaje" name="tipo_viaje" value=""> <!-- Campo oculto para enviar la selección -->

                <div class="mb-6">
                    <label for="origen" class="block mb-2 text-sm font-medium text-gray-900">Desde:</label>
                    <input type="text" id="origen" name="origen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('from') border-red-500 @enderror" placeholder="Ciudad de origen" value="{{ old('origen') }}">
                    <small class="text-red-500">{{$errors->first('origen')}}</small>
                    
                </div>
                <div class="mb-6">
                    <label for="destino" class="block mb-2 text-sm font-medium text-gray-900">Hacia:</label>
                    <input type="text" id="destino" name="destino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('to') border-red-500 @enderror" placeholder="Destino" value="{{ old('destino') }}">
                    <small class="text-red-500">{{$errors->first('origen')}}</small>
                </div>
                <div class="flex justify-center items-center mb-6 space-x-4">
                    <button type="button" id="flightsButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Vuelos</button>
                    <button type="button" id="hotelsButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Hoteles</button>
                </div>
                <button type="submit" id="searchButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full">Buscar</button>
            </form>
        </div>
    </div>
</div>




<script>
    const flightsButton = document.getElementById('flightsButton');
    const hotelsButton = document.getElementById('hotelsButton');
    const tipoViajeInput = document.getElementById('tipo_viaje');

    
    flightsButton.addEventListener('click', function() {
        tipoViajeInput.value = 'Vuelos'; 
        flightsButton.setAttribute('data-selected', 'true'); 
        hotelsButton.setAttribute('data-selected', 'false'); 
    });

    hotelsButton.addEventListener('click', function() {
        tipoViajeInput.value = 'Hoteles'; 
        hotelsButton.setAttribute('data-selected', 'true'); 
        flightsButton.setAttribute('data-selected', 'false'); 
    });

    
    document.getElementById('consultar').addEventListener('submit', function(event) {
        if (tipoViajeInput.value === '') {
            event.preventDefault(); 
            Swal.fire({
                title: '¡Error!',
                text: 'Por favor, selecciona una opción: Vuelos o Hoteles.',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        }
    });
</script>



@if (session('exito'))
    <script>
        Swal.fire({
            title: "Todo correcto ",
            text: " {{ session('exito') }} ",
            icon: "success"
        });
    </script>
@endif




  

    @endsection