<x-web-layout>
    <div class="min-h-screen bg-[#2B2B2B] py-12 px-6 flex items-center justify-center">
        <div class="w-full max-w-3xl bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Haz tu Reserva</h2>

            <form action="{{ route('reservas.store') }}" method="POST" class="space-y-6">
                @csrf

{{--
                <div>
                    <label for="telefono" class="block text-gray-700 font-semibold mb-1">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
--}}

                <div>
                    <label for="tipo_servicio" class="block text-gray-700 font-semibold mb-1">Tipo de Servicio</label>
                    <select id="tipo_servicio" name="tipo_servicio" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                        <option value="gaming">Gaming</option>
                        <option value="coworking">Coworking</option>
                        <option value="cafeteria">Cafeteria</option>
                    </select>
                </div>

                <div>
                    <label for="fecha_reserva" class="block text-gray-700 font-semibold mb-1">Fecha de Reserva</label>
                    <input type="date" id="fecha_reserva" name="fecha_reserva" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>

                <div>
                    <label for="duracion" class="block text-gray-700 font-semibold mb-1">Duración (horas)</label>
                    <input type="number" id="duracion" name="duracion" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" min="1" required>
                </div>

                <div>
                    <label for="metodo_pago" class="block text-gray-700 font-semibold mb-1">Método de Pago</label>
                    <select id="metodo_pago" name="metodo_pago" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                        <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                        <option value="paypal">PayPal</option>
                        <option value="efectivo">Efectivo</option>
                    </select>
                </div>

                <div class="flex items-start">
                    <input type="checkbox" id="terminos" name="terminos" class="mt-1 mr-2" required>
                    <label for="terminos" class="text-sm text-gray-600">He leído y acepto los <a href="#" class="text-primary underline">términos y condiciones</a>.</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-primary text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition">Enviar Reserva</button>
                </div>
                @if (session('success'))
                    <div class="mb-4 text-green-600 font-semibold">
                        {{ session('success') }}
                    </div>
                @endif

            </form>

           @if(session()->has("message"))
               {{ session()->get("message") }}
           @endif
        </div>
    </div>
</x-web-layout>
