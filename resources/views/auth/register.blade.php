<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Librería de banderas -->
    <link href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icons.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 flex flex-col items-center h-screen">
<nav class="w-full bg-green-500 p-4 flex justify-between items-center">
    <!-- Logo a la izquierda -->
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-logo class="h-14 mr-3" />
        </a>
    </div>

    <!-- Enlaces centrados -->
    <div class="absolute left-1/2 transform -translate-x-1/2 space-x-4">
        <a href="{{ route('home') }}" class="text-white hover:underline">Inicio</a>
        <a href="{{ route('areas') }}" class="text-white hover:underline">Áreas y Precios</a>
        <a href="{{ route('contact') }}" class="text-white hover:underline">Contacto</a>
    </div>

    <!-- Selector de idioma con banderas -->
    <div class="flex items-center space-x-2">
        <select name="language" id="language" class="bg-green-500 text-white p-2 rounded">
            <option value="es" class="flex items-center space-x-2">
                <span class="flag-icon flag-icon-es"></span> Español
            </option>
            <option value="en" class="flex items-center space-x-2">
                <span class="flag-icon flag-icon-us"></span> English
            </option>
            <!-- Puedes añadir más idiomas aquí -->
        </select>
    </div>
</nav>

<div class="bg-black bg-opacity-70 p-8 rounded-lg text-white w-96 mt-10">
    <h2 class="text-2xl font-bold text-center mb-4">Crear Cuenta</h2>
    <form method="POST" action="{{ route('register') }}" class="space-y-3" id="registerForm">
        @csrf
        <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="username" placeholder="Usuario" required>
        <input type="email" class="w-full p-2 rounded bg-gray-800 text-white" name="email" placeholder="Correo Electrónico" required>
        <input type="email" class="w-full p-2 rounded bg-gray-800 text-white" name="email_confirmation" placeholder="Confirmar Correo Electrónico" required>
        <input type="password" class="w-full p-2 rounded bg-gray-800 text-white" name="password" placeholder="Contraseña" required>
        <input type="password" class="w-full p-2 rounded bg-gray-800 text-white" name="password_confirmation" placeholder="Confirmar Contraseña" required>
        <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="first_name" placeholder="Nombre" required>
        <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="last_name" placeholder="Apellido" required>
        <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="dni" placeholder="DNI/NIF" required>
        <input type="date" class="w-full p-2 rounded bg-gray-800 text-white" name="birthdate" required>
        <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="postal_code" placeholder="Código Postal" required>
        <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="phone" placeholder="Teléfono" required>
        <div class="flex items-center">
            <input type="checkbox" id="terms" required class="mr-2">
            <label for="terms">Acepto los términos y condiciones</label>
        </div>
        <button type="submit" class="w-full p-2 rounded bg-green-500 hover:bg-green-600 text-white font-bold">Registrarse</button>
    </form>
</div>

<script>
    document.getElementById("registerForm").addEventListener("submit", function() {
        setTimeout(() => {
            window.location.href = "{{ route('login') }}";
        }, 1000);
    });

    // Script para cambiar el idioma (puedes agregar tu lógica de traducción aquí)
    document.getElementById('language').addEventListener('change', function(e) {
        const language = e.target.value;
        // Aquí puedes implementar la lógica para cambiar el idioma
        console.log(`Idioma seleccionado: ${language}`);
        // Podrías hacer un redireccionamiento o almacenar el idioma en una variable de sesión
    });
</script>
</body>
</html>
