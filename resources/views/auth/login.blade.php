<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="text-center">
            <h1 class="text-5xl chilanka">Olá gateiro</h1>
            <h2 class="">Insira suas informações abaixo</h2>
        </div>

        <!-- Email Address -->
        <div class="mt-5">
            <x-input-label for="email" class="text-marrom-escuro" :value="__('Gmail')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                autocomplete="username" placeholder="..." />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-input-label for="password" class="text-marrom-escuro" :value="__('Senha')" />

            <div class="relative">

                <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
                    placeholder="..." />

                <div id="cliqueIcone" class="cursor-pointer text-marrom-escuro/70">
                    {{-- Mostrar e ocultar a senha --}}
                    <i
                        class="icone-senha fa-solid fa-eye-slash absolute top-2 right-3 transition duration-400 hover:text-marrom-escuro"></i>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-marrom-escuro/70 text-marrom-escuro shadow-sm focus:ring-0"
                        name="remember">
                    <span class="ms-2 text-sm text-marrom-escuro">{{ __('Lembrar de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="underline underline-offset-2 decoration-marrom-escuro text-sm text-marrom-escuro/70 transition duration-400 hover:text-marrom-escuro"
                        href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                @endif

                <x-primary-button>
                    {{ __('Logar') }}
                </x-primary-button>
            </div>
    </form>
</x-guest-layout>

