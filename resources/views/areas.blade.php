<x-web-layout>
    <div class="flex flex-col items-center py-12 gap-8 bg-[url('/public/images/cafeteria.jpg')] bg-cover">

        <!-- Cafetería -->
        <x-web-cafeteria-card>
            <x-slot:areaName>Cafetería</x-slot>
            <x-slot:areaDesc>
                Un espacio diseñado para recargar energías sin salir del mundo gamer. Disfruta de café, snacks y bebidas en un ambiente moderno con iluminación RGB y pantallas con contenido en vivo.
            </x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset('images/cafeteria.jpg') }}" alt="">
            </x-slot>
        </x-web-cafeteria-card>

        <!-- Sala Gaming -->
        <x-web-gaming-card>
            <x-slot:areaName>Sala Gaming</x-slot>
            <x-slot:areaDesc>
                El corazón de la experiencia: estaciones de alto rendimiento, periféricos de calidad y conexión ultrarrápida. Compite, juega en equipo o disfruta en solitario con la mejor tecnología y ambiente envolvente.
            </x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset('images/gaming.jpg') }}" alt="">
            </x-slot>
        </x-web-gaming-card>

        <!-- Coworking -->
        <x-web-coworking-card>
            <x-slot:areaName>Coworking</x-slot>
            <x-slot:areaDesc>
                Un espacio pensado para la productividad sin perder la esencia gamer. Con mesas cómodas, conexión estable y un ambiente inspirador, aquí puedes trabajar, estudiar o desarrollar proyectos mientras te rodeas de creatividad y tecnología.
            </x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset('images/coworking.jpg') }}" alt="">
            </x-slot>
        </x-web-coworking-card>
    </div>
</x-web-layout>
