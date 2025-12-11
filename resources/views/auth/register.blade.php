<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="text-center">
            <h1 class="text-5xl">Antes de começar</h1>
            <h2 class="mt-2">Insira suas informações abaixo</h2>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" class="text-marrom-escuro" :value="__('Nome')" />
            <x-text-input id="name" class=" w-full" type="text" name="name" :value="old('name')" required autofocus
                autocomplete="name" placeholder="..." />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" class="text-marrom-escuro" :value="__('Gmail')" />
            <x-text-input id="email" class=" w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" placeholder="..." />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="text-marrom-escuro" :value="__('Senha')" />

            <div class="relative">
                <x-text-input class="input-senha w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder="..." />

                <div id="cliqueIcone" class="cursor-pointer text-marrom-escuro/70">
                    {{-- Mostrar e ocultar a senha --}}
                    <i
                        class="icone-senha fa-solid fa-eye-slash absolute top-2 right-3 transition duration-400 hover:text-marrom-escuro"></i>
                </div>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" class="text-marrom-escuro" :value="__('Confirme a senha')" />

            <div class="relative">
                <x-text-input class="confirmar-input-senha w-full" type="password" name="password_confirmation"
                    required autocomplete="new-password" placeholder="..." />

                <div id="cliqueIcone2" class="cursor-pointer text-marrom-escuro/70">
                    {{-- Mostrar e ocultar a senha --}}
                    <i
                        class="icone-senha2 fa-solid fa-eye-slash absolute top-2 right-3 transition duration-400 hover:text-marrom-escuro"></i>
                </div>
            </div>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="underline underline-offset-2 decoration-marrom-escuro/70 text-sm text-marrom-escuro/70 transition duration-400 hover:text-marrom-escuro"
                href="{{ route('login') }}">
                {{ __('Já possui conta?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Cadastrar-se') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
