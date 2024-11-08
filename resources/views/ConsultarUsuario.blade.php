@extends('layouts.navbaradmi')

@section('titulo', 'Detalles del Usuario')

@section('contenido')
<div class="container mx-auto py-12 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <div class="text-center mb-4">
                <h2 class="text-2xl font-bold text-teal-600">Información del Usuario</h2>
            </div>
            <div class="space-y-4">
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Nombre:</span>
                    <span class="text-gray-800">Cristopher</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Apellido:</span>
                    <span class="text-gray-800">Loyola</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Correo Electrónico:</span>
                    <span class="text-gray-800">loyolacristo303@gmail.com</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Teléfono:</span>
                    <span class="text-gray-800">442345234</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Contraseña:</span>
                    <span class="text-gray-800">********</span>
                </div>
            </div>
            <div class="mt-6 flex justify-between">
                <a href="/EditarUsuario" class="px-4 py-2 text-sm font-medium text-white bg-teal-500 rounded-lg hover:bg-teal-600 transition duration-300">Editar</a>
                <form action="/EditarUsuario" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                    @csrf
                    
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 transition duration-300"
                type="button">
                Eliminar
            </button>

            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Estas seguro de que quieres eliminar este vuelo?</h3>
                            <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Si, Estoy seguro
                            </button>
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
                </form>
            </div>
        </div>

        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <div class="text-center mb-4">
                <h2 class="text-2xl font-bold text-teal-600">Información del Usuario</h2>
            </div>
            <div class="space-y-4">
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Nombre:</span>
                    <span class="text-gray-800">Antonio</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Apellido:</span>
                    <span class="text-gray-800">Martinez</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Correo Electrónico:</span>
                    <span class="text-gray-800">122044391@upq.edu.mx</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Teléfono:</span>
                    <span class="text-gray-800">123-456-7892</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium text-gray-600">Contraseña:</span>
                    <span class="text-gray-800">********</span>
                </div>
            </div>
            <div class="mt-6 flex justify-between">
                <a href="/EditarUsuario" class="px-4 py-2 text-sm font-medium text-white bg-teal-500 rounded-lg hover:bg-teal-600 transition duration-300">Editar</a>
                <form action="/EditarUsuario" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                    @csrf
                    
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 transition duration-300"
                type="button">
                Eliminar
            </button>

            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Estas seguro de que quieres eliminar este vuelo?</h3>
                            <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Si, Estoy seguro
                            </button>
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
