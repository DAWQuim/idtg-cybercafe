<header
    class="w-full h-[8rem] py-[.75rem] px-[8rem] flex flex-row justify-center items-center bg-primary font-khand font-normal">
    <!-- Logo-Enlace home -->
    <a href="{{ route('home') }}" class="h-full aspect-square">
        <x-application-logo />
    </a>

    <div class="flex gap-[2rem] mx-auto">
        <a href="{{ route('home') }}" class="text-[min(1.5rem,3vw)] text-black hover:underline">Inicio</a>
        <a href="{{ route('areas') }}" class="text-[min(1.5rem,3vw)] text-black hover:underline">Áreas y Precios</a>
        <a href="{{ route('contact') }}" class="text-[min(1.5rem,3vw)] text-black hover:underline">Contacto</a>
    </div>


    <div class="flex items-center">
        <!-- Dropdown de idiomas con borde y nombre abreviado de los idiomas -->
        <select class="bg-transparent text-black border-none text-2xl">
            <option value="es">🇪🇸 ES</option>
            <option value="en">🇬🇧 EN</option>
            <option value="ca">🇨🇮 CA</option>
        </select>

        <!-- Icono de usuario -->
        <div class="flex items-center">
            <a href="{{ route('login') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-9">
                    <path fill-rule="evenodd"
                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</header>
