<x-guest-layout>
    <div class="text-center">
        <h1 class="text-5xl">Esqueceu a senha?</h1>
        <h2 class="mt-2">Insira suas informações abaixo para recuperá-la</h2>
    </div>


    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" class="text-marrom-escuro" :value="__('Gmail')" />
            <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" required
                autofocus placeholder="..." />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button>
                {{ __('Redefinir email') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
