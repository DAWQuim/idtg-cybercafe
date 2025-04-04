<header class="w-full h-[8rem] flex py-[1rem] px-[8rem] flex flex-row justify-center items-center bg-primary">
    <!-- Logo-Enlace home -->
    <a href="{{ route('home') }}" class="h-full">
        <x-application-logo class="h-full mr-3" />
    </a>


    <!-- Navegacion -->
    <nav class="mx-auto">
        <ul class="flex flex-row gap-4">
            <li><a href="{{ route('home') }}" class="text-black hover:underline">Inicio</a></li>
            <li><a href="{{ route('areas') }}" class="text-black hover:underline">Áreas y Precios</a></li>
            <li><a href="{{ route('contact') }}" class="text-black hover:underline">Contacto</a></li>
        </ul>
    </nav>


    <div class="flex items-center h-full">
        <div class="h-full">
            <img src="{{ asset("images/Flag.png") }}" alt="" class="size-full">
        </div>

        <!-- Selector de idiomas -->
        <select class="bg-transparent text-black border-2 border-green-500 rounded-lg p-2 pl-4 pr-8 text-lg">
            <option value="es">ES</option>
            <option value="en">EN</option>
            <option value="ca">CA</option>
        </select>

        <!-- Login -->
        <div class="flex items-center space-x-2 transform -translate-x-5">
            <a href="{{ route('login') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-9">
                    <path fill-rule="evenodd"
                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
</header>
