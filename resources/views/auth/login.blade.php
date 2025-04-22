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
<div class="bg-[#2B2B2B] bg-opacity-70 min-h-[80vh] flex justify-center items-center py-10">
    <div class="p-8 rounded-lg text-white w-96 border border-white">
        <h2 class="text-2xl font-bold text-center mb-4">Iniciar Sesión</h2>
            <form method="POST" action="#" class="space-y-4" id="loginForm">
            @csrf
            
            <div>
                <label class="block mb-1 font-medium">
                    <div class="flex items-center gap-2">
                        <!-- Icono nombre -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z" clip-rule="evenodd" />
                        </svg>
                        Usuario
                    </div>
                </label>
                <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="name" required>
            </div>

            <div>
                <label class="block mb-1 font-medium">
                    <div class="flex items-center gap-2">
                        <!-- Icono nombre -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12 2a6 6 0 00-6 6v4H6a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2v-8a2 2 0 00-2-2h-2v-4a6 6 0 00-6-6zm-4 8V8a4 4 0 118 0v2h-8z" clip-rule="evenodd" />
                        </svg>
                        Contraseña
                    </div>
                </label>
                <input type="password" id="password" name="password" placeholder="Contraseña" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember" class="mr-2">
                <label for="remember">Recuérdame</label>
            </div>

        <button type="submit" class="w-full p-2 rounded bg-green-500 hover:bg-green-600 text-white font-bold">Iniciar Sesión</button>
    </form>

    <p class="mt-4 text-center">
        <a href="{{ route('password.request') }}" class="text-green-400 hover:underline">¿Olvidaste tu contraseña?</a>
    </p>
    <p class="text-center">
        ¿No tienes cuenta?
        <a href="{{ route('register') }}" class="text-green-400 hover:underline">Regístrate</a>
    </p>
    </div>
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
</x-web-layout>
