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
        <a href="{{ route('login') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 0112 3a9 9 0 016.879 14.804M15 21v-2a3 3 0 00-6 0v2m9 0a9 9 0 00-18 0"></path>
            </svg>
        </a>
    </div>
</nav>
