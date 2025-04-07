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

<div class="bg-black bg-opacity-70 p-8 rounded-lg text-white w-full max-w-3xl mx-auto mt-10">
    <h2 class="text-2xl font-bold text-center mb-6">Crear Cuenta</h2>
    <form method="POST" action="{{ route('register') }}" class="space-y-6" id="registerForm">
        @csrf

        <!-- Usuario -->
        <div>
            <label for="username" class="block text-sm font-medium">Usuario *</label>
            <input type="text" id="username" class="w-full p-2 rounded bg-gray-800 text-white" name="username" placeholder="Usuario" required>
        </div>

        <!-- Correo y confirmación -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="email" class="block text-sm font-medium">Correo Electrónico *</label>
                <input type="email" id="email" class="w-full p-2 rounded bg-gray-800 text-white" name="email" placeholder="Correo Electrónico" required>
            </div>
            <div>
                <label for="email_confirmation" class="block text-sm font-medium">Confirmar Correo Electrónico *</label>
                <input type="email" id="email_confirmation" class="w-full p-2 rounded bg-gray-800 text-white" name="email_confirmation" placeholder="Confirmar Correo Electrónico" required>
            </div>
        </div>

        <!-- Contraseña y confirmación -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="password" class="block text-sm font-medium">Contraseña *</label>
                <input type="password" id="password" class="w-full p-2 rounded bg-gray-800 text-white" name="password" placeholder="Contraseña" required>
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium">Confirmar Contraseña *</label>
                <input type="password" id="password_confirmation" class="w-full p-2 rounded bg-gray-800 text-white" name="password_confirmation" placeholder="Confirmar Contraseña" required>
            </div>
        </div>

        <!-- Separador -->
        <hr class="border-white opacity-50">

        <!-- Nombre y apellidos -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="first_name" class="block text-sm font-medium">Nombre *</label>
                <input type="text" id="first_name" class="w-full p-2 rounded bg-gray-800 text-white" name="first_name" placeholder="Nombre" required>
            </div>
            <div>
                <label for="last_name" class="block text-sm font-medium">Apellidos *</label>
                <input type="text" id="last_name" class="w-full p-2 rounded bg-gray-800 text-white" name="last_name" placeholder="Apellidos" required>
            </div>
        </div>

        <!-- DNI y fecha de nacimiento -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="dni" class="block text-sm font-medium">DNI/NIF *</label>
                <input type="text" id="dni" class="w-full p-2 rounded bg-gray-800 text-white" name="dni" placeholder="DNI/NIF" required>
            </div>
            <div>
                <label for="birthdate" class="block text-sm font-medium">Fecha de Nacimiento *</label>
                <input type="date" id="birthdate" class="w-full p-2 rounded bg-gray-800 text-white" name="birthdate" required>
            </div>
        </div>

        <!-- Código postal y teléfono -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="postal_code" class="block text-sm font-medium">Código Postal *</label>
                <input type="text" id="postal_code" class="w-full p-2 rounded bg-gray-800 text-white" name="postal_code" placeholder="Código Postal" required>
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium">Teléfono *</label>
                <input type="text" id="phone" class="w-full p-2 rounded bg-gray-800 text-white" name="phone" placeholder="Teléfono" required>
            </div>
        </div>

        <!-- Separador -->
        <hr class="border-white opacity-50">

        <!-- Términos -->
        <div class="flex items-center">
            <input type="checkbox" id="terms" required class="mr-2">
            <label for="terms">Acepto los términos y condiciones *</label>
        </div>

        <!-- Botón -->
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
    // Script para cambiar el idioma (puedes agregar tu lógica de traducción aquí)
    document.getElementById('language').addEventListener('change', function(e) {
        const language = e.target.value;
        // Aquí puedes implementar la lógica para cambiar el idioma
        console.log(`Idioma seleccionado: ${language}`);
        // Podrías hacer un redireccionamiento o almacenar el idioma en una variable de sesión
    });
</script>
</body>
</x-web-layout>
