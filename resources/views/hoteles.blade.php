@extends('layouts.navbaradmi')

@section('titulo', 'Registrar Hotel')

@section('contenido')

@vite(['resources/js/app.js'])

<div class="container-fluid mt-5">
    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center">
        <!-- Columna con tamaño ajustable en diferentes pantallas -->
        <div class="col-12 col-md-8 col-lg-6">
            <!-- Nueva tarjeta de diseño atractivo y moderno -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white text-center">
                    <h5 class="text-2xl font-bold">Registrar Hotel</h5>
                    <p>Ingresa la información necesaria para agregar un nuevo hotel a la base de datos</p>
                </div>
                <div class="p-6 bg-white">
                    <!-- Formulario dentro de la tarjeta -->
                    <form action="{{ route('Hoteles') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf

                        <!-- Campo: Nombre del hotel -->
                        <div class="mb-4 text-center">
                            <label for="nombre" class="form-label text-gray-700">Nombre del hotel</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="nombre" name="nombre" placeholder="Ejemplo: Hotel Riviera" required style="background-color: #f7f7f7; border-radius: 8px; border: 1px solid #ccc; max-width: 100%;">
                        </div>

                        <!-- Campo: Categoría del hotel -->
                        <div class="mb-4 text-center">
                            <label for="categoria" class="form-label text-gray-700">Categoría del hotel</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="categoria" name="categoria" placeholder="Ejemplo: 5 estrellas" required style="background-color: #f7f7f7; border-radius: 8px; border: 1px solid #ccc; max-width: 100%;">
                        </div>

                        <!-- Campo: Precio -->
                        <div class="mb-4 text-center">
                            <label for="precio" class="form-label text-gray-700">Precio</label>
                            <input type="number" class="form-control form-control-lg mx-auto" id="precio" name="precio" placeholder="Ejemplo: 1200" required style="background-color: #f7f7f7; border-radius: 8px; border: 1px solid #ccc; max-width: 100%;">
                        </div>

                        <!-- Campo: Servicios -->
                        <div class="mb-4 text-center">
                            <label for="servicios" class="form-label text-gray-700">Servicios</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="servicios" name="servicios" placeholder="Ejemplo: Wi-Fi, Piscina, Spa" required style="background-color: #f7f7f7; border-radius: 8px; border: 1px solid #ccc; max-width: 100%;">
                        </div>

                        <!-- Campo: Distancia del centro -->
                        <div class="mb-4 text-center">
                            <label for="distancia" class="form-label text-gray-700">Distancia del centro</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="distancia" name="distancia" placeholder="Ejemplo: 500 metros" required style="background-color: #f7f7f7; border-radius: 8px; border: 1px solid #ccc; max-width: 100%;">
                        </div>

                        <!-- Campo: Imagen del hotel -->
                        <div class="mb-5 text-center">
                            <label for="imagen" class="form-label text-gray-700">Imagen del hotel</label>
                            <input type="file" class="form-control form-control-lg mx-auto" id="imagen" name="imagen" accept="image/*" style="background-color: #f7f7f7; border-radius: 8px; border: 1px solid #ccc; max-width: 100%;">
                        </div>

                        <!-- Botones de agregar y cancelar con más estilo -->
                        <div class="text-center space-x-3">
                            <button type="submit" class="btn btn-lg text-white" style="background-color: #28a745; padding: 10px 30px; border-radius: 8px;">Agregar</button>
                            <a href="#" class="btn btn-lg text-white" style="background-color: #dc3545; padding: 10px 30px; border-radius: 8px;">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
