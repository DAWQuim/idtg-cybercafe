<x-web-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Librería de banderas -->
        <link href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icons.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-900">
    <!-- Formulario de Registro -->
    <div class="bg-black bg-opacity-70 p-8 rounded-lg text-white w-96 mt-10 mx-auto">
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
    <x-footer />
</x-web-layout>
