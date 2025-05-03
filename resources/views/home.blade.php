<x-web-layout>
<div class="scroll-smooth">
    <!-- Hero section -->
    <div class="relative h-[calc(100svh-8rem)] bg-hero">
        <!-- Imagen de fondo. Es un elemento separado para poderla hacer transparente -->
        <img src="{{ asset('images/hero.png') }}" class="absolute opacity-20 h-full w-full object-cover" aria-hidden="true">

        <!-- Contenido -->
        <div class="absolute h-full w-full z-1 flex flex-col md:flex-row gap-2 py-8 md:py-32 px-[2rem] md:px-[4rem] items-center">
            <div class="flex place-content-center max-w-[512px] h-[12rem] md:w-1/2 md:min-w-[16rem] md:h-auto aspect-square">
                <x-application-logo />
            </div>

            <div class="w-[min(60ch, 50vw)] flex flex-col flex-grow gap-5 items-center md:items-start">
                <h1 class="font-zen_dots text-[min(3rem,6vw)]  text-white">I don't touch grass</h1>
                <h2 class="font-saira text-[min(3rem,6vw)] font-normal text-white">Cafeteria Gaming</h2>
                <hr class="w-3/5">
                <p class="font-saira text-[min(2.25rem,4vw)]/[150%] font-normal tracking-widest text-white">“Café, confort y focus para
                    quienes no tocan el césped”</p>

                <a href="#areas" draggable="false">
                    <x-web-button class="text-2xl">Reserva ya!</x-web-button>    
                </a>

            </div>
        </div>
    </div>

    <!-- Sobre Nosotros -->
    <div class="bg-[#2B2B2B] flex flex-col items-center gap-8 py-12">
        <h2 class="w-fit font-khand text-4xl text-white">Sobre Nosotros</h2>
        <x-web-paragraph class="w-[min(95ch,90vw)] text-center sm:text-justify">En IDTG (I Don’t Touch Grass), sabemos que el éxito requiere dedicación. Por eso, creamos un espacio ideal para estudiantes, profesionales y gamers que buscan concentración y comodidad. Con un ambiente acogedor, café de calidad y tecnología de alto rendimiento, ofrecemos el lugar perfecto para que te enfoques en lo que realmente importa, sin distracciones. Aquí, tocar el césped es opcional.</x-web-paragraph>
    </div>

    <!-- Areas -->
    <div id="areas" class="flex flex-col items-center py-12 gap-8 bg-[url('/public/images/cafeteria.jpg')] bg-cover">
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

    <!-- Separador areas y contacto -->
    <div class="h-12 bg-[#2B2B2B]"></div>

    <!-- Contacto -->
    <div class="bg-primary flex flex-col items-center gap-8 py-12">
        <h2 class="w-fit font-khand text-4xl text-black">Contacto</h2>
        <x-web-paragraph class="w-fit !text-black text-center">Tienes dudas o quieres hablar con nosotros? ¡Contactanos!</x-web-paragraph>
        <a href="/contact" draggable="false">
            <x-web-button class="text-base tracking-widest">Contacto</x-web-button>
        </a>
    </div>
</x-web-layout>
