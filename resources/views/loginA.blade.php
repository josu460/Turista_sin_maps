<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class=" fondo bg-blue-50 flex justify-center items-center h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-96" style="border-radius: 25px; background: rgba(255, 255, 255, 0.9);">
        <h1 class="text-2xl font-semibold text-center mb-6 text-gray-800">Iniciar Sesión</h1>

        <form class="space-y-6">
       
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo:</label>
                <input type="email" name="email" id="email" class="bg-blue-100 border-none text-gray-700 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="tucorreo@ejemplo.com" required>
            </div>

            
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Contraseña:</label>
                <input type="password" name="password" id="password" class="bg-blue-100 border-none text-gray-700 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="••••••••" required>
            </div>

            
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Iniciar</button>

            
            <div class="text-center mt-4 space-y-2">
                <a href="#" class="text-sm text-gray-700 hover:underline">Crear cuenta</a>
                <br>
                <a href="#" class="text-sm text-gray-700 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>

</body>
</html>

