<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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

    <!-- Iconos y selección de idioma -->
    <div class="flex items-center space-x-3">
        <img src="{{ asset('images/Flag.png') }}" alt="ES" class="w-6 h-4">
        <a href="{{ route('login') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 0112 3a9 9 0 016.879 14.804M15 21v-2a3 3 0 00-6 0v2m9 0a9 9 0 00-18 0"></path>
            </svg>
        </a>
    </div>
</nav>

<!-- Sección de contacto -->
<div class="bg-black bg-opacity-70 p-8 rounded-lg text-white w-96 mt-10">
    <h2 class="text-2xl font-bold text-center mb-4">Contacto</h2>
    <form method="POST" action="{{ route('contact.send') }}" class="space-y-3">
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

<!-- Información de contacto -->
<div class="flex justify-around w-full text-white mt-10">
    <div class="text-center">
        <h3 class="text-lg font-bold">Ubicación</h3>
        <p>1016</p>
        <p>Calle de ejemplo 2</p>
        <p>0888, CiudadEjemplo, España</p>
    </div>
    <div class="text-center">
        <h3 class="text-lg font-bold">Teléfono</h3>
        <p>+34 666 66 66 66</p>
    </div>
    <div class="text-center">
        <h3 class="text-lg font-bold">Horario</h3>
        <p>De lunes a domingo</p>
        <p>Abiertos 24h</p>
    </div>
</div>

<!-- Redes sociales -->
<div class="flex justify-center space-x-6 mt-6">
    <a href="#" class="text-white text-2xl"><i class="fab fa-instagram"></i></a>
    <a href="#" class="text-white text-2xl"><i class="fab fa-twitter"></i></a>
    <a href="#" class="text-white text-2xl"><i class="fab fa-facebook"></i></a>
</div>

<!-- Agregar FontAwesome para iconos -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
