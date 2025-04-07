<x-web-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-900 flex flex-col items-center justify-center h-screen">

        <!-- Sección de Contacto -->
        <div class="bg-black bg-opacity-70 p-8 rounded-lg text-white w-96 flex flex-col items-center">
            <h2 class="text-2xl font-bold text-center mb-4">Contacto</h2>
            <form method="POST" action="{{ route('contact.send') }}" class="space-y-3 w-full">
                @csrf
                <input type="text" class="w-full p-2 rounded bg-gray-800 text-white" name="name" placeholder="Nombre" required>
                <input type="email" class="w-full p-2 rounded bg-gray-800 text-white" name="email" placeholder="Correo Electrónico" required>
                <textarea class="w-full p-2 rounded bg-gray-800 text-white" name="message" placeholder="Mensaje..." rows="4" required></textarea>
                <div class="flex items-center">
                    <input type="checkbox" id="promotions" name="promotions" class="mr-2">
                    <label for="promotions">Enviarme ofertas y promociones al correo electrónico</label>
                </div>
                <button type="submit" class="w-full p-2 rounded bg-green-500 hover:bg-green-600 text-white font-bold">Contactar</button>
            </form>
        </div>
    </body>
    <x-footer />
</x-web-layout>
