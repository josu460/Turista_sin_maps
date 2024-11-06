@extends('layouts.navbaradmi')

@section('titulo', 'Editar Vuelos')

@section('contenido')
<div class="container-fluid d-flex justify-content-center mt-5">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card shadow-xl border-0" style="border-radius: 20px; background-color: #ffffff;">
                <div class="card-header text-center" style="background-color: #003366; color: white; border-radius: 20px 20px 0 0;">
                    <h4 class="mb-0">Editar Vuelo</h4>
                </div>
                <div class="card-body p-5" style="background-color: #f8f9fa; border-radius: 0 0 20px 20px;">
                    <!-- Mostrar mensajes de error de validación en PHP -->
                    @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Mostrar mensaje de éxito -->
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Formulario con estilos atractivos y centrado -->
                    <form action="{{ route('ruta.vuelosangel') }}" method="POST">
                        @csrf
                        
                        <!-- Campo: Nombre de la aerolínea -->
                        <div class="form-group mb-4 text-center">
                            <label for="aerolinea" class="form-label text-secondary">Nombre de la aerolínea:</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="aerolinea" name="aerolinea" value="{{ old('aerolinea') }}" placeholder="Ingresa el nombre de la aerolínea" style="background-color: #e8f0fe; border-radius: 12px; width: 100%;">
                        </div>
                        
                        <!-- Campo: Número de vuelo -->
                        <div class="form-group mb-4 text-center">
                            <label for="numeroVuelo" class="form-label text-secondary">Número de vuelo:</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="numeroVuelo" name="numero_vuelo" value="{{ old('numero_vuelo') }}" placeholder="Ingresa el número de vuelo" style="background-color: #e8f0fe; border-radius: 12px; width: 100%;">
                        </div>

                        <!-- Campo: Horario -->
                        <div class="form-group mb-4 text-center">
                            <label for="horario" class="form-label text-secondary">Horario:</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="horario" name="horario" value="{{ old('horario') }}" placeholder="Ingresa el horario" style="background-color: #e8f0fe; border-radius: 12px; width: 100%;">
                        </div>

                        <!-- Campo: Duración del vuelo -->
                        <div class="form-group mb-4 text-center">
                            <label for="duracionVuelo" class="form-label text-secondary">Duración del vuelo:</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="duracionVuelo" name="duracion" value="{{ old('duracion') }}" placeholder="Ingresa la duración del vuelo" style="background-color: #e8f0fe; border-radius: 12px; width: 100%;">
                        </div>

                        <!-- Campo: Precio por pasajero -->
                        <div class="form-group mb-4 text-center">
                            <label for="precioPasajero" class="form-label text-secondary">Precio por pasajero:</label>
                            <input type="number" class="form-control form-control-lg mx-auto" id="precioPasajero" name="precio" value="{{ old('precio') }}" placeholder="Ingresa el precio por pasajero" style="background-color: #e8f0fe; border-radius: 12px; width: 100%;">
                        </div>

                        <!-- Campo: Horario de salida -->
                        <div class="form-group mb-4 text-center">
                            <label for="horarioSalida" class="form-label text-secondary">Horario de salida:</label>
                            <input type="text" class="form-control form-control-lg mx-auto" id="horarioSalida" name="horario_salida" value="{{ old('horario_salida') }}" placeholder="Ingresa el horario de salida" style="background-color: #e8f0fe; border-radius: 12px; width: 100%;">
                        </div>

                        <!-- Botones de Confirmar y Cancelar con más estilos -->
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-lg text-white" style="background-color: #28a745; border-radius: 12px; padding: 12px 40px;">Confirmar</button>
                            <button type="reset" class="btn btn-lg text-white" style="background-color: #dc3545; border-radius: 12px; padding: 12px 40px;">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@vite(['resources/js/app.js'])
