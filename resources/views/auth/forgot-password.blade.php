
<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 px-4">
        <!-- Logo -->
        <div class="mb-6">
            <a href="/">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="w-24 h-auto mx-auto">
            </a>
        </div>

        <!-- Card Container -->
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
            <div class="mb-4 text-sm text-gray-600 text-center">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-6">
                    <x-primary-button class="w-full justify-center">
                        {{ __('Send Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
