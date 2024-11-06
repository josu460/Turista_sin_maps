@extends('layouts.navbaradmi')

@section('titulo', 'Consultar Hotel')

@section('contenido1')
<div class="bg-blue-500 text-white py-8 px-4">
        <h1 class="text-2xl font-bold text-center">CONSULTAR HOTEL</h1>
    </div>

<div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Mar del Plata</h2>
        <p class="text-gray-600 text-sm">10 días / 7 noches <br> Media pensión <br> Transporte: Bus cama</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Colima</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Chiapas</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Cancun</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Puerto Rico</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Atlanta</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Lima</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Peru</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Bogota</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">CDMX</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Cancun</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Tulum</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Canada</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Islas Canarias</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Queretaro</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Isla Mujeres</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Eliminar</button>
        </div>
    </div>


</div>
@endsection
