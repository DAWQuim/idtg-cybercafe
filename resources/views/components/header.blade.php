<header
    class="w-full h-[8rem] py-[.75rem] px-[8rem] gap-8 flex flex-row justify-center items-center bg-primary font-khand font-normal"
>
    <!-- Logo-Enlace home -->
    <a href="{{ route('home') }}" class="h-full aspect-square">
        <x-application-logo/>
    </a>

    <div class="flex gap-[2rem] mx-auto">
        <a href="{{ route('home') }}" class="text-[min(1.5rem,3vw)] text-black hover:underline">Inicio</a>

        <div class="relative group text-[min(1.5rem,3vw)] text-black">
            <div class="cursor-pointer hover:underline">Áreas</div>
            <div class="absolute left-0 w-max hidden group-hover:flex flex-col gap-[1rem] bg-primary/80 backdrop-blur border-black border-2 shadow-lg p-4 z-10">
                <a href="/gaming" class="hover:underline">Gaming</a>
                <a href="/coworking" class="hover:underline">Coworking</a>
                <a href="/cafeteria" class="hover:underline">Cafetería</a>
            </div>
        </div>

        <a href="{{ route('contact') }}" class="text-[min(1.5rem,3vw)] text-black hover:underline">Contacto</a>
    </div>

    <div class="flex items-center gap-4">
        <!-- Dropdown de idiomas con borde y nombre abreviado de los idiomas -->
        <!--
        <select class="bg-transparent text-black border-none text-2xl">
            <option value="es">🇪🇸 ES</option>
            <option value="en">🇬🇧 EN</option>
            <option value="ca">🇨🇮 CA</option>
        </select>
        -->

        <!-- Dropdown de usuario -->
        @auth
            <a class="text-xl select-none">{{ auth()->user()->username }}</a>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <!-- Eliminar el enlace de "a" para que no te lleve al perfil -->
                    <button id="button" class="flex items-center focus:outline-none">
                        <!-- Aquí está el cambio: -->
                        @if (Auth::user()->profile_photo_url)
                            <img class="h-10 w-10 rounded-full object-cover border-2 border-gray-300 hover:ring-2 hover:ring-indigo-500 transition"
                                 src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                            >
                        @else
                            <!-- SVG que aparece cuando no hay foto de perfil -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="h-10 w-10 text-gray-500"
                            >
                                <path fill-rule="evenodd"
                                      d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                      clip-rule="evenodd"
                                />
                            </svg>
                        @endif
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.show')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    @if (Auth::user()->admin)
                        <x-dropdown-link :href="route('reservas.index')">
                            Editar Reservas
                        </x-dropdown-link>
                    @endauth

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault(); this.closest('form').submit();"
                        >
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        @else
            <!-- Si no está autenticado, mostrar el enlace de login -->

            <a class="flex flex-row items-center gap-4 text-lg" href="{{ route('login') }}">
                Iniciar sesión
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-9">
                    <path fill-rule="evenodd"
                          d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                          clip-rule="evenodd"
                    />
                </svg>
            </a>
        @endauth
    </div>
</header>
