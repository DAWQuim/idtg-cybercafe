<x-web-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas y Precios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="flex flex-col items-center py-12 gap-8 bg-[url('/public/images/cafeteria.jpg')] bg-cover">
        <x-web-area-card>
            <x-slot:areaName>Cafeteria</x-slot>
            <x-slot:areaDesc>Un espacio diseñado para recargar energías sin salir del mundo gamer. Disfruta de café, snacks y bebidas en un ambiente moderno con iluminación RGB y pantallas con contenido en vivo. Perfecto para tomar un descanso, socializar o seguir la acción mientras comes.</x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset("images/cafeteria.jpg") }}" alt="">
            </x-slot>
        </x-web-area-card>

        <x-web-area-card>
            <x-slot:areaName>Sala Gaming</x-slot>
            <x-slot:areaDesc>El corazón de la experiencia: estaciones de alto rendimiento, periféricos de calidad y conexión ultrarrápida. Compite, juega en equipo o disfruta en solitario con la mejor tecnología y ambiente envolvente.</x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset("images/cafeteria.jpg") }}" alt="">
            </x-slot>
        </x-web-area-card>

        <x-web-area-card>
            <x-slot:areaName>Coworking</x-slot>
            <x-slot:areaDesc>Un espacio pensado para la productividad sin perder la esencia gamer. Con mesas cómodas, conexión estable y un ambiente inspirador, aquí puedes trabajar, estudiar o desarrollar proyectos mientras te rodeas de creatividad y tecnología.</x-slot>
            <x-slot:areaPicture>
                <img src="{{ asset("images/cafeteria.jpg") }}" alt="">
            </x-slot>
        </x-web-area-card>
    </div>
</x-web-layout>
