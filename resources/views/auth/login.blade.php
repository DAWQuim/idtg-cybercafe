<x-web-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Librería de banderas -->
    <link href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icons.min.css" rel="stylesheet">
</head>
<body>


<!-- Formulario de Login -->
<div class="bg-black bg-opacity-70 p-8 rounded-lg text-white w-96 mt-10">
    <h2 class="text-2xl font-bold text-center mb-4">Iniciar Sesión</h2>
    <form method="POST" action="#" class="space-y-3" id="loginForm">
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
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita el envío real del formulario
        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 1000);
    });

    // Script para cambiar el idioma
    document.getElementById('language').addEventListener('change', function(e) {
        const language = e.target.value;
        console.log(`Idioma seleccionado: ${language}`);
    });
</script>
</body>
<x-footer />
</x-web-layout>
