@extends('layouts.navbaradmi')

@section('titulo', 'Registrar Hotel')

@section('contenido')

@vite(['resources/js/app.js'])

<div class="container mt-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #0056b3;">Registrar Hotel</h2>
        <p style="color: #6c757d;">Ingresa la información necesaria para agregar un nuevo hotel a la base de datos</p>
    </div>
    
    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <!-- Formulario con estilos -->
            <form action="{{ route('Hoteles') }}" method="POST" enctype="multipart/form-data" class="p-5 rounded shadow-lg" style="background-color: #f0f4f7; border-radius: 15px;">
                @csrf

                <!-- Campo: Nombre del hotel -->
                <div class="mb-4">
                    <label for="nombre" class="form-label text-secondary">Nombre del hotel</label>
                    <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" placeholder="Ejemplo: Hotel Riviera" required style="background-color: #e8f0fe; border-radius: 10px;">
                </div>

                <!-- Campo: Categoría del hotel -->
                <div class="mb-4">
                    <label for="categoria" class="form-label text-secondary">Categoría del hotel</label>
                    <input type="text" class="form-control form-control-lg" id="categoria" name="categoria" placeholder="Ejemplo: 5 estrellas" required style="background-color: #e8f0fe; border-radius: 10px;">
                </div>

                <!-- Campo: Precio -->
                <div class="mb-4">
                    <label for="precio" class="form-label text-secondary">Precio</label>
                    <input type="number" class="form-control form-control-lg" id="precio" name="precio" placeholder="Ejemplo: 1200" required style="background-color: #e8f0fe; border-radius: 10px;">
                </div>

                <!-- Campo: Servicios -->
                <div class="mb-4">
                    <label for="servicios" class="form-label text-secondary">Servicios</label>
                    <input type="text" class="form-control form-control-lg" id="servicios" name="servicios" placeholder="Ejemplo: Wi-Fi, Piscina, Spa" required style="background-color: #e8f0fe; border-radius: 10px;">
                </div>

                <!-- Campo: Distancia del centro -->
                <div class="mb-4">
                    <label for="distancia" class="form-label text-secondary">Distancia del centro</label>
                    <input type="text" class="form-control form-control-lg" id="distancia" name="distancia" placeholder="Ejemplo: 500 metros" required style="background-color: #e8f0fe; border-radius: 10px;">
                </div>

                <!-- Campo: Imagen del hotel -->
                <div class="mb-5">
                    <label for="imagen" class="form-label text-secondary">Imagen del hotel</label>
                    <input type="file" class="form-control form-control-lg" id="imagen" name="imagen" accept="image/*" style="background-color: #e8f0fe; border-radius: 10px;">
                </div>

                <!-- Botones de agregar y cancelar con más estilo -->
                <div class="text-center">
                    <button type="submit" class="btn btn-lg text-white" style="background-color: #28a745; border-radius: 10px; padding: 10px 30px;">Agregar</button>
                    <a href="#" class="btn btn-lg text-white ms-2" style="background-color: #dc3545; border-radius: 10px; padding: 10px 30px;">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
