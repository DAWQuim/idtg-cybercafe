<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas y Precios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <nav class="w-full bg-green-500 p-4 flex justify-between items-center">
        <a href="{{ route('home') }}">
            <x-application-logo class="h-14 mr-3" />
        </a>
        <div class="absolute left-1/2 transform -translate-x-1/2 space-x-4">
            <a href="{{ route('home') }}" class="text-white hover:underline">Inicio</a>
            <a href="{{ route('areas') }}" class="text-white hover:underline">Áreas y Precios</a>
            <a href="{{ route('contact') }}" class="text-white hover:underline">Contacto</a>
        </div>
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/es_flag.png') }}" alt="ES" class="w-6 h-4">
            <a href="{{ route('login') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 0112 3a9 9 0 016.879 14.804M15 21v-2a3 3 0 00-6 0v2m9 0a9 9 0 00-18 0"></path>
                </svg>
            </a>
        </div>
    </nav>
    
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
</html>
