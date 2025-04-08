<x-web-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

<!-- Sección de Contacto -->
<div class="bg-[#2B2B2B] bg-opacity-70 min-h-[80vh] flex justify-center items-center py-10">
    <div class="p-8 rounded-lg text-white w-96 border border-white">
        <h2 class="text-2xl font-bold text-center mb-4">Contacto</h2>
        <form method="POST" action="{{ route('contact.send') }}" class="space-y-4 w-full">
            @csrf

            <!-- Campo Nombre -->
            <div>
                <label class="block mb-1 font-medium">
                    <div class="flex items-center gap-2">
                        <!-- Icono nombre -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z" clip-rule="evenodd" />
                        </svg>
                        Nombre
                    </div>
                </label>
                <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="name" required>
            </div>

            <!-- Campo Correo -->
            <div>
                <label class="block mb-1 font-medium">
                    <div class="flex items-center gap-2">
                        <!-- Icono email -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M1.5 6.75A2.25 2.25 0 013.75 4.5h16.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 17.25V6.75zm2.25-.75v.511l8.25 5.505 8.25-5.505V6a.75.75 0 00-.75-.75H3.75a.75.75 0 00-.75.75zm0 2.816v8.184c0 .414.336.75.75.75h16.5a.75.75 0 00.75-.75V8.816l-8.1 5.406a.75.75 0 01-.9 0L3.75 8.816z"/>
                        </svg>
                        Correo Electrónico
                    </div>
                </label>
                <input type="email" class="w-full p-2 rounded bg-gray-800 text-white" name="email" required>
            </div>

            <!-- Campo Mensaje -->
            <div>
                <label class="block mb-1 font-medium">
                    <div class="flex items-center gap-2">
                        <!-- Icono mensaje -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H6l-4.5 3v-17.25z" clip-rule="evenodd" />
                        </svg>
                        Mensaje
                    </div>
                </label>
                <textarea class="w-full p-2 rounded bg-gray-800 text-white" name="message" rows="4" required></textarea>
            </div>

            <!-- Checkbox promociones -->
            <div class="flex items-center text-sm">
                <input type="checkbox" id="promotions" name="promotions" class="mr-2">
                <label for="promotions">Enviarme ofertas y promociones al correo electrónico</label>
            </div>

            <!-- Botón -->
            <button type="submit" class="w-full p-2 rounded bg-green-500 hover:bg-green-600 text-white font-bold">Contactar</button>
        </form>
    </div>
</div>
</body>
<x-footer />
</x-web-layout>
