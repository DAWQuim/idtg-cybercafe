<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
</nav>
<div class="bg-black bg-opacity-70 p-8 rounded-lg text-white w-96 mt-10">
    <h2 class="text-2xl font-bold text-center mb-4">Iniciar Sesión</h2>
    <form method="POST" action="{{ route('login') }}" class="space-y-3" id="loginForm">
        @csrf
        <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="username" placeholder="Usuario" required>
        <input type="password" class="w-full p-2 rounded bg-gray-800 text-white" name="password" placeholder="Contraseña" required>
        <div class="flex items-center">
            <input type="checkbox" id="remember" name="remember" class="mr-2">
            <label for="remember">Recuérdame</label>
        </div>
        <button type="submit" class="w-full p-2 rounded bg-green-500 hover:bg-green-600 text-white font-bold">Iniciar Sesión</button>
    </form>
    <p class="mt-3 text-center">
        <a href="{{ route('password.request') }}" class="text-green-400 hover:underline">¿Olvidaste tu contraseña?</a>
    </p>
    <p class="text-center">¿No tienes cuenta? <a href="{{ route('register') }}" class="text-green-400 hover:underline">Regístrate</a></p>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function() {
        setTimeout(() => {
            window.location.href = "{{ route('dashboard') }}";
        }, 1000);
    });
</script>
</body>
</html>
