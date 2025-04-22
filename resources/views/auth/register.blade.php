<x-web-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Librería de banderas -->
    <link href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icons.min.css" rel="stylesheet">
</head>
<body>

<div class="bg-[#2B2B2B] bg-opacity-100 min-h-screen flex justify-center items-center py-10 px-4">
    <div class="w-full max-w-4xl bg-black bg-opacity-70 p-10 rounded-2xl text-white shadow-xl border border-white">
        <h2 class="text-3xl font-bold text-center mb-8">Crear Cuenta</h2>
        <form method="POST" action="{{ route('register') }}" id="registerForm" class="space-y-8">
            @csrf

            <!-- Usuario -->
            <div>
                <label for="username" class="block text-sm font-medium mb-1">Usuario *</label>
                <input type="text" id="username" name="username" placeholder="Usuario" required
                       class="w-full p-3 rounded-lg bg-gray-800 text-white">
            </div>

            <!-- Correo y confirmación -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Correo Electrónico *</label>
                    <input type="email" id="email" name="email" placeholder="Correo Electrónico" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
                <div>
                    <label for="email_confirmation" class="block text-sm font-medium mb-1">Confirmar Correo Electrónico *</label>
                    <input type="email" id="email_confirmation" name="email_confirmation" placeholder="Confirmar Correo Electrónico" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
            </div>

            <!-- Contraseña y confirmación -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="password" class="block text-sm font-medium mb-1">Contraseña *</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium mb-1">Confirmar Contraseña *</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Contraseña" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
            </div>

            <!-- Línea separadora -->
            <hr class="border-white opacity-50">

            <!-- Nombre y apellidos -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="first_name" class="block text-sm font-medium mb-1">Nombre *</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Nombre" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium mb-1">Apellidos *</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Apellidos" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
            </div>

            <!-- DNI y fecha de nacimiento -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="dni" class="block text-sm font-medium mb-1">DNI/NIF *</label>
                    <input type="text" id="dni" name="dni" placeholder="DNI/NIF" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
                <div>
                    <label for="birthdate" class="block text-sm font-medium mb-1">Fecha de Nacimiento *</label>
                    <input type="date" id="birthdate" name="birthdate" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
            </div>

            <!-- Código postal y teléfono -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="postal_code" class="block text-sm font-medium mb-1">Código Postal *</label>
                    <input type="text" id="postal_code" name="postal_code" placeholder="Código Postal" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium mb-1">Teléfono *</label>
                    <input type="text" id="phone" name="phone" placeholder="Teléfono" required
                           class="w-full p-3 rounded-lg bg-gray-800 text-white">
                </div>
            </div>

            <!-- Línea separadora -->
            <hr class="border-white opacity-50">

            <!-- Aceptar términos -->
            <div class="flex items-center">
                <input type="checkbox" id="terms" required class="mr-2 accent-green-500">
                <label for="terms" class="text-sm">Acepto los términos y condiciones *</label>
            </div>

            <!-- Botón -->
            <button type="submit"
                    class="w-full p-3 rounded-lg bg-green-500 hover:bg-green-600 transition duration-300 text-white font-bold">
                Registrarse
            </button>
        </form>
    </div>
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
</body>
</x-web-layout>
