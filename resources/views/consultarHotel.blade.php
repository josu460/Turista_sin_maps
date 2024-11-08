@extends('layouts.navbaradmi')

@section('titulo', 'Consultar Hotel')

@section('contenido1')
<div class="bg-blue-500 text-white py-8 px-4">
        <h1 class="text-2xl font-bold text-center">CONSULTAR HOTEL</h1>
    </div>
<div class="flex justify-end mt-4">
<a href="/registroHoteles" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Registar Hotel</a>
</div>

<div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Mar del Plata</h2>
        <p class="text-gray-600 text-sm">10 días / 7 noches <br> Media pensión <br> Transporte: Bus cama</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            
            <div class="flex space-x-8">
    <!-- Modal toggle button -->
    <button data-modal-target="registrarhotel-modal" data-modal-toggle="registrarhotel-modal" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600" type="button">
        Editar
    </button>

    <!-- Main modal -->
    <div id="registrarhotel-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Editar Hotel
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="registrarhotel-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body with form -->
                <div class="p-4 md:p-5 space-y-4">
                    <form action="/añadirHotel" method="POST" class="space-y-5">
                        @csrf 

                        <div>
                            <label for="nombreHotel" class="block text-sm font-medium text-gray-700">Nombre del hotel</label>
                            <input type="text" id="nombreHotel" name="nombreHotel" 
                                   class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500" 
                                   placeholder="Ejemplo: Hotel Paradise">
                            <small>{{$errors->first('nombreHotel')}}</small>
                        </div>

                        <div>
                            <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría del hotel</label>
                            <select id="categoria" name="categoria" 
                                    class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Seleccione una categoría</option>
                                <option value="Economico">Económico</option>
                                <option value="Medio">Medio</option>
                                <option value="Lujo">Lujo</option>
                            </select>
                            <small>{{$errors->first('categoria')}}</small>
                        </div>

                        <div>
                            <label for="precio" class="block text-sm font-medium text-gray-700">Precio por noche (USD)</label>
                            <input type="number" id="precio" name="precio" min="0" step="0.01"
                                   class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="120.00">
                            <small>{{$errors->first('precio')}}</small>
                        </div>

                        <div>
                            <label for="servicios" class="block text-sm font-medium text-gray-700">Servicios</label>
                            <textarea id="servicios" name="servicios" 
                                      class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500"
                                      placeholder="Ejemplo: WiFi, piscina, restaurante"></textarea>
                            <small>{{$errors->first('servicios')}}</small>
                        </div>

                        <div>
                            <label for="distancia" class="block text-sm font-medium text-gray-700">Distancia del centro (km)</label>
                            <input type="number" id="distancia" name="distancia" min="0" step="0.1"
                                   class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="Ejemplo: 1.5">
                            <small>{{$errors->first('distancia')}}</small>
                        </div>

                        <div>
                            <label for="estrellas" class="block text-sm font-medium text-gray-700">Estrellas</label>
                            <select id="estrellas" name="estrellas" 
                                    class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Seleccione las estrellas</option>
                                <option value="1">1 estrella</option>
                                <option value="2">2 estrellas</option>
                                <option value="3">3 estrellas</option>
                                <option value="4">4 estrellas</option>
                                <option value="5">5 estrellas</option>
                            </select>
                            <small>{{$errors->first('estrellas')}}</small>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">
                                Editar
                            </button>
                            <button data-modal-hide="registrarhotel-modal" type="button" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @if (session('exito'))
    @session ('exito')
    <script>
        Swal.fire({
            title: "Todo correcto ",
            text: " {{$value}}",
            icon: "success"
        });
    </script>
    @endsession
    @endif

            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Colima</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Chiapas</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Cancun</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Puerto Rico</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Atlanta</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Lima</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
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
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">CDMX</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Cancun</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Tulum</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Canada</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Islas Canarias</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md p-3 relative">
        <img src="{{ asset('img/Oaxaca.jpg') }}" alt="Hotel Imagen" class="img-cris rounded-lg w-full h-32 object-cover">
        <h2 class="text-lg font-semibold mt-3">Queretaro</h2>
        <p class="text-gray-600 text-sm">8 días / 5 noches <br> Media pensión <br> Transporte: Uber</p>
        <span class="absolute top-3 right-3 bg-teal-500 text-white text-xs font-semibold px-2 py-1 rounded-full">$2390</span>
        <div class="flex justify-end mt-3 space-x-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Editar</button>
            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
        </div>
    </div>





</div>
@endsection
