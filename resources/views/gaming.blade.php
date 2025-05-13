<x-web-layout>
    <div class="flex flex-col py-12 px-4 gap-8 bg-white h-[calc(100svh-8rem)]">
        <div class="flex h-2/4">
            <img src="{{ asset('images/cafeteria.jpg') }}" alt="Sala Gaming"
                class="rounded-2xl shadow-xl size-full object-cover">
        </div>
        <div class="flex flex-col h-2/4 items-center gap-6">
            <h1 class="text-4xl font-bold text-gray-800 mt-6">Sala Gaming</h1>
            <p class="text-lg text-gray-600 text-center max-w-2xl">
                Estaciones de alto rendimiento, periféricos de calidad y conexión ultrarrápida. Compite, juega en equipo
                o disfruta en solitario con la mejor tecnología y ambiente envolvente.
            </p>
            <p class="text-md text-gray-500">🕒 Horario: 10:00 AM - 12:00 AM</p>
            <a href="{{ route('reservas.create') }}"
                class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-xl">
                Reservar
            </a>
        </div>
    </div>
</x-web-layout>
