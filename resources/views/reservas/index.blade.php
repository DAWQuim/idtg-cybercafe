<x-web-layout>
    <div class="h-[calc(100svh-8rem)] px-40">
        <div class="h-full w-full bg-gray-200 p-8">
                @if ($reservas->count(0))
                <ul>
                    @foreach($reservas as $reserva)
                        <li class="relative">
                            <div class="flex gap-4 align-center">
                                <h2 class="text-xl font-bold">{{ $reserva->usuario }}</h2>
                                <h3 class="text-lg">{{ $reserva->telefono }}</h3>
                            </div>
                            <p>
                                Tipo: {{ str()->title($reserva->tipo_servicio) }}<br>
                                Fecha: {{ $reserva->fecha_reserva }}<br>
                                Duracion: {{ $reserva->duracion }}<br>
                                Metodo de pago: {{ $reserva->metodo_pago }}
                            </p>
                            <form action="/reservas/{{ $reserva->id }}"
                                  method="POST"
                                  class="flex absolute items-center w-fit inset-0 mr-0 ml-auto"
                            >
                                @csrf
                                @method("DELETE")

                                <button class="h-fit rounded-xl bg-red-600 text-white font-bold px-6 py-2">Borrar
                                </button>
                            </form>
                        </li>
                        <hr class="my-2 border-primary">
                    @endforeach
                </ul>
            @else
                <h2 class="text-2xl justify-self-center">De momento no hay reservas</h2>
            @endif
        </div>
    </div>
</x-web-layout>
