<x-web-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas y Precios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    
    <section class="container mx-auto mt-10">
        <div class="bg-gray-800 p-6 rounded-lg mb-6">
            <h2 class="text-2xl font-bold">Cafetería</h2>
            <p class="mt-2">Un espacio diseñado para recargar energías...</p>
            <img src="{{ asset('images/cafeteria.png') }}" alt="Cafetería" class="w-full mt-4 rounded-lg">
            <button class="bg-green-500 px-4 py-2 mt-4 rounded">Saber más</button>
        </div>
        
        <div class="bg-gray-800 p-6 rounded-lg mb-6">
            <h2 class="text-2xl font-bold">Sala Gaming</h2>
            <p class="mt-2">Experiencia inmersiva con PCs de última generación...</p>
            <img src="{{ asset('images/gaming_room.png') }}" alt="Sala Gaming" class="w-full mt-4 rounded-lg">
            <p class="mt-2"><strong>Disponibilidad horaria:</strong> Lunes a domingo, 24 horas.</p>
            <button class="bg-green-500 px-4 py-2 mt-4 rounded">Reservar</button>
        </div>
        
        <div class="bg-gray-800 p-6 rounded-lg">
            <h2 class="text-2xl font-bold">Sala Coworking</h2>
            <p class="mt-2">Espacio diseñado para trabajar cómodamente...</p>
            <img src="{{ asset('images/coworking.png') }}" alt="Sala Coworking" class="w-full mt-4 rounded-lg">
            <p class="mt-2"><strong>Disponibilidad horaria:</strong> Lunes a domingo, 24 horas.</p>
            <button class="bg-green-500 px-4 py-2 mt-4 rounded">Reservar</button>
        </div>
    </section>

    <footer class="bg-gray-800 text-center p-4 mt-10">
        <p>&copy; Todos los derechos reservados 2025</p>
    </footer>
</body>
</x-web-layout>