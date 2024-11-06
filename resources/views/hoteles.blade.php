@extends('layouts.navbaradmi')
@section('titulo', 'Hoteles')
@section('contenido')
<main class="flex flex-col mt-5 w-full">
<h1 class="text-center text-blue-500 text-4xl">Búsqueda de Hoteles</h1>
  <div class="mt-5 mx-2 p-5 rounded-lg bg-blue-400 shadow-lg justify-center">
    <form class="flex flex-col md:flex-row gap-6">
      @csrf <!-- Token CSRF necesario para las solicitudes POST en Laravel -->

      <!-- Campo de texto para el destino del hotel -->
      <input type="text" name="campoHotel" placeholder="¿Tu próximo destino es...?" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">

      <!-- Fechas de check-in y check-out -->
      <div id="date-range-picker" date-rangepicker class="flex items-center gap-2">
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
          </div>
          <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-40 pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Fecha de entrada">
        </div>
        <span class="mx-2 text-gray-500">a</span>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
          </div>
          <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-40 pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Fecha de Salida">
        </div>
      </div>

      <!-- Menú desplegable para habitaciones y huéspedes -->
      <div class="relative">
        <button class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 px-4 py-2.5 w-full flex items-center justify-between" type="button" data-dropdown-toggle="guest-dropdown">
          Habitaciones y Huéspedes
          <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="guest-dropdown" class="hidden absolute z-10 bg-white rounded-lg shadow-lg w-64 mt-2">
          <div class="p-4">
            <label class="flex justify-between items-center">
              <span>Adultos</span>
              <div class="flex items-center">
                <button type="button" class="px-2 py-1 text-blue-600" onclick="updateGuestCount('adults', -1)">-</button>
                <span class="mx-2" id="adults-count">0</span>
                <button type="button" class="px-2 py-1 text-blue-600" onclick="updateGuestCount('adults', 1)">+</button>
              </div>
            </label>
            <label class="flex justify-between items-center mt-2">
              <span>Niños</span>
              <div class="flex items-center">
                <button type="button" class="px-2 py-1 text-blue-600" onclick="updateGuestCount('children', -1)">-</button>
                <span class="mx-2" id="children-count">0</span>
                <button type="button" class="px-2 py-1 text-blue-600" onclick="updateGuestCount('children', 1)">+</button>
              </div>
            </label>
            <label class="flex justify-between items-center mt-2">
              <span>Habitaciones</span>
              <div class="flex items-center">
                <button type="button" class="px-2 py-1 text-blue-600" onclick="updateGuestCount('rooms', -1)">-</button>
                <span class="mx-2" id="rooms-count">0</span>
                <button type="button" class="px-2 py-1 text-blue-600" onclick="updateGuestCount('rooms', 1)">+</button>
              </div>
            </label>
          </div>
        </div>
      </div>

      <!-- Botón de búsqueda -->
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:ring-4 focus:ring-blue-300">
        Buscar
      </button>
    </form>
  </div>

  <div class="flex flex-row mt-5 ml-5">
    <div>
    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Filtros</h3>
    <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
      <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
          <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Categoría</label>
        </div>
      </li>
      <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
          <input id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          <label for="react-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Precio</label>
        </div>
      </li>
      <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
          <input id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          <label for="angular-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Distancia a..</label>
        </div>
      </li>
      <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
          <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Servicios</label>
        </div>
      </li>
    </ul>
  </div>
</main>

<script>
  function updateGuestCount(type, increment) {
    const countElement = document.getElementById(`${type}-count`);
    let currentCount = parseInt(countElement.innerText);
    currentCount = Math.max(0, currentCount + increment); // Evita que el número sea negativo
    countElement.innerText = currentCount;
  }
</script>
@endsection
