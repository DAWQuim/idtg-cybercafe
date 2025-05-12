<x-web-layout>
    <div class="flex flex-col items-center py-12 gap-8 bg-[url('/public/images/cafeteria.jpg')] bg-cover">

        <!-- Cafetería -->
        <x-web-area-card>
            <x-slot:areaName>Cafetería</x-slot>
            <x-slot:areaDesc>
                Un espacio diseñado para recargar energías sin salir del mundo gamer. Disfruta de café, snacks y bebidas en un ambiente moderno con iluminación RGB y pantallas con contenido en vivo.

                <div class="mt-4">
                    <a href="{{ route('cafeteria') }}" class="inline-flex items-center bg-white text-black font-semibold py-2 px-4 rounded shadow hover:shadow-lg transition">
                        Saber más →
                    </a>
                </div>
            </x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset('images/cafeteria.jpg') }}" alt="">
            </x-slot>
        </x-web-area-card>

        <!-- Sala Gaming -->
        <x-web-area-card>
            <x-slot:areaName>Sala Gaming</x-slot>
            <x-slot:areaDesc>
                El corazón de la experiencia: estaciones de alto rendimiento, periféricos de calidad y conexión ultrarrápida. Compite, juega en equipo o disfruta en solitario con la mejor tecnología y ambiente envolvente.

                <div class="mt-4">
                    <a href="{{ route('gaming') }}" class="inline-flex items-center bg-white text-black font-semibold py-2 px-4 rounded shadow hover:shadow-lg transition">
                        Saber más →
                    </a>
                </div>
            </x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset('images/cafeteria.jpg') }}" alt="">
            </x-slot>
        </x-web-area-card>

        <!-- Coworking -->
        <x-web-area-card>
            <x-slot:areaName>Coworking</x-slot>
            <x-slot:areaDesc>
                Un espacio pensado para la productividad sin perder la esencia gamer. Con mesas cómodas, conexión estable y un ambiente inspirador, aquí puedes trabajar, estudiar o desarrollar proyectos mientras te rodeas de creatividad y tecnología.

                <div class="mt-4">
                    <a href="{{ route('coworking') }}" class="inline-flex items-center bg-white text-black font-semibold py-2 px-4 rounded shadow hover:shadow-lg transition">
                        Saber más →
                    </a>
                </div>
            </x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset('images/cafeteria.jpg') }}" alt="">
            </x-slot>
        </x-web-area-card>

    </div>
</x-web-layout>
