<x-web-layout>
    <div class="min-h-[calc(100svh-8rem)] bg-[#1A1A1A] text-white py-12 px-4 sm:px-8 flex flex-col items-center gap-8">
        <h2 class="text-4xl font-khand text-white">Editar Perfil</h2>

        <div class="w-full max-w-3xl flex flex-col gap-10">
            {{-- Informació del Perfil --}}
            <div class="bg-[#2B2B2B] border border-white/20 rounded-2xl p-6 shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-white">Informació del Perfil</h3>
                @include('profile.partials.update-profile-information-form')
            </div>

            {{-- Canviar Contrasenya --}}
            <div class="bg-[#2B2B2B] border border-white/20 rounded-2xl p-6 shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-white">Canviar Contrasenya</h3>
                @include('profile.partials.update-password-form')
            </div>

            {{-- Eliminar Compte --}}
            <div class="bg-red-900/30 border border-red-600 rounded-2xl p-6 shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-red-300">Eliminar Compte</h3>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-web-layout>
