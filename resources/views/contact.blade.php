<x-web-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex flex-col items-center h-screen">

<!-- Sección de Contacto -->
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

<!-- Información de contacto y redes sociales -->
<div class="flex justify-around w-full text-white mt-10">
    <div class="text-center">
        <h3 class="text-lg font-bold">Ubicación</h3>
        <p>101G</p>
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
        <p>Abiertos 24 horas</p>
    </div>
</div>

<!-- Iconos de redes sociales -->
<div class="flex space-x-4 mt-6">
    <a href="https://twitter.com" target="_blank">
        <img src="{{ asset('images/X.png') }}" alt="Twitter" class="w-8 h-8">
    </a>
    <a href="https://facebook.com" target="_blank">
        <img src="{{ asset('images/Facebook.png') }}" alt="Facebook" class="w-8 h-8">
    </a>
    <a href="https://instagram.com" target="_blank">
        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-8 h-8">
    </a>
</div>

</body>
</x-web-layout>
