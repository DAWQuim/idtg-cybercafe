<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-2xl text-gray-800">¡Bienvenido, {{ auth()->user()->first_name }}!</h3>
                    <p class="mt-4 text-lg">A continuación, puedes ver y editar tu perfil.</p>

                    <!-- Información del usuario -->
                    <div class="mt-6 bg-gray-100 p-4 rounded-lg">
                        <h4 class="text-xl font-medium">Tus Datos</h4>
                        <p><strong>Nombre:</strong> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                        <p><strong>Correo:</strong> {{ auth()->user()->email }}</p>
                        <p><strong>Teléfono:</strong> {{ auth()->user()->phone ?? 'No proporcionado' }}</p>
                        <p><strong>DNI:</strong> {{ auth()->user()->dni ?? 'No proporcionado' }}</p>
                    </div>

                    <!-- Formulario de edición de perfil -->
                    <div class="mt-6 bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-medium">Editar Perfil</h4>
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" id="first_name" name="first_name" value="{{ auth()->user()->first_name }}" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                            </div>

                            <div class="mb-4">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido</label>
                                <input type="text" id="last_name" name="last_name" value="{{ auth()->user()->last_name }}" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <input type="text" id="phone" name="phone" value="{{ auth()->user()->phone }}" class="w-full p-2 mt-1 border border-gray-300 rounded-md">
                            </div>

                            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Actualizar Perfil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</x-app-layout>
