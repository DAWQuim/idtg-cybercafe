<x-web-layout>
    <div class="scroll-smooth">
        <!-- Hero Section Perfil -->
        <div class="relative h-[calc(100svh-8rem)] bg-hero">
            <img src="{{ asset('images/hero.png') }}" class="absolute opacity-20 h-full w-full object-cover" aria-hidden="true">
            
            <div class="absolute h-full w-full z-1 flex flex-col md:flex-row gap-2 py-16 px-[2rem] md:px-[4rem] items-center">
                <div class="w-full md:w-1/2 flex justify-center">
                    <x-application-logo class="w-48 h-48" />
                </div>

                <div class="w-full md:w-1/2 text-white flex flex-col gap-4 items-start">
                    <h1 class="text-4xl font-bold">{{ Auth::user()->name }}</h1>
                    <p class="text-xl">Email: {{ Auth::user()->email }}</p>
                    <p class="text-xl">DNI: {{ Auth::user()->dni }}</p>
                    <p class="text-xl">Telèfon: {{ Auth::user()->phone }}</p>
                    <p class="text-xl">Codi postal: {{ Auth::user()->postal_code }}</p>
                    <p class="text-xl">Naixement: {{ Auth::user()->birthdate }}</p>

                    <a href="{{ route('profile.edit') }}">
                        <x-web-button class="mt-4 text-lg bg-black text-green-800 hover:bg-green-200">
                            Editar perfil
                        </x-web-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
