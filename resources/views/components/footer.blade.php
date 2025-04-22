<footer class="bg-black text-white">
    <!-- Primera sección: Ubicación, Teléfono y Horario -->
    <div class="container mx-auto py-6 flex justify-around text-sm">
        <div class="text-center">
            <h3 class="text-lg font-bold">Ubicación</h3>
            <p>101G</p>
            <p>Calle de ejemplo 2</p>
            <p>0888, CiudadEjemplo, España</p>
        </div>
        <div class="text-center">
            <h3 class="text-lg font-bold">Teléfono</h3>
            <p>+34 666 66 66 66</p>
        </div>
        <div class="text-center">
            <h3 class="text-lg font-bold">Horario</h3>
            <p>De lunes a domingo</p>
            <p>Abiertos 24 horas</p>
        </div>
    </div>

    <!-- Segunda sección: Links legales y redes sociales -->
    <div class="bg-[#0a0a0a] py-4 text-gray-300 text-sm">
        <div class="container mx-auto flex flex-col items-center">
            <!-- Enlaces legales centrados -->
            <div class="flex space-x-6 mb-3">
                <a href="{{ route('legal.notice') }}" class="hover:underline">Aviso Legal</a>
                <a href="{{ route('legal.privacy') }}" class="hover:underline">Política de Privacidad</a>
                <a href="{{ route('legal.cookies') }}" class="hover:underline">Política de Cookies</a>
                <a href="{{ route('legal.terms') }}" class="hover:underline">Términos y Condiciones</a>
            </div>

            <!-- Redes sociales alineadas al centro debajo de los links -->
            <div class="flex space-x-4 mb-2">
                <a href="https://twitter.com" target="_blank">
                    <img src="{{ asset('images/X.png') }}" alt="Twitter" class="w-6 h-6">
                </a>
                <a href="https://facebook.com" target="_blank">
                    <img src="{{ asset('images/Facebook.png') }}" alt="Facebook" class="w-6 h-6">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-6 h-6">
                </a>
            </div>

            <!-- Copyright centrado -->
            <div class="text-gray-100 text-xs">
                I Don't Touch Grass © 2025
            </div>
        </div>
    </div>
</footer>
