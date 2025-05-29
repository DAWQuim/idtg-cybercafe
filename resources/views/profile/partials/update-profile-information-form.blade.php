<section>
    <header>
        <h2 class="text-lg font-semibold text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-300">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Username -->
        <div>
            <x-input-label for="username" class="text-white" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" class="mt-1 block w-full bg-[#1F1F1F] text-white border-white/20" :value="old('username', $user->username)" required autofocus autocomplete="username" />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('username')" />
        </div>

        <!-- First Name -->
        <div>
            <x-input-label for="first_name" class="text-white" :value="__('First Name')" />
            <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full bg-[#1F1F1F] text-white border-white/20" :value="old('first_name', $user->first_name)" required />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('first_name')" />
        </div>

        <!-- Last Name -->
        <div>
            <x-input-label for="last_name" class="text-white" :value="__('Last Name')" />
            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full bg-[#1F1F1F] text-white border-white/20" :value="old('last_name', $user->last_name)" required />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('last_name')" />
        </div>

        <!-- DNI -->
        <div>
            <x-input-label for="dni" class="text-white" :value="__('DNI')" />
            <x-text-input id="dni" name="dni" type="text" class="mt-1 block w-full bg-[#1F1F1F] text-white border-white/20" :value="old('dni', $user->dni)" required />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('dni')" />
        </div>

        <!-- Birthdate -->
        <div>
            <x-input-label for="birthdate" class="text-white" :value="__('Birthdate')" />
            <x-text-input id="birthdate" name="birthdate" type="date" class="mt-1 block w-full bg-[#1F1F1F] text-white border-white/20" :value="old('birthdate', $user->birthdate)" required />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('birthdate')" />
        </div>

        <!-- Postal Code -->
        <div>
            <x-input-label for="postal_code" class="text-white" :value="__('Postal Code')" />
            <x-text-input id="postal_code" name="postal_code" type="text" class="mt-1 block w-full bg-[#1F1F1F] text-white border-white/20" :value="old('postal_code', $user->postal_code)" required />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('postal_code')" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone" class="text-white" :value="__('Phone')" />
            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full bg-[#1F1F1F] text-white border-white/20" :value="old('phone', $user->phone)" required />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('phone')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" class="text-white" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full bg-[#1F1F1F] text-white border-white/20" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="text-white bg-indigo-600 hover:bg-indigo-700">
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
