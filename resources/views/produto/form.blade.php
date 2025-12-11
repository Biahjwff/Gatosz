{{-- EStilização do formulário --}}
<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="200"
    class="w-[400px] relative bg-white px-12 py-12 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">
    <form action="{{ route('login.cliente.submit') }}" method="POST">
        @csrf

        <div class="text-center">
            <h1 class="text-5xl chilanka">Olá gateiro</h1>
            <h2 class="">Insira suas informações abaixo</h2>
        </div>

        <div class="mt-3">
            <label class="text-marrom-escuro">Nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" required placeholder="..."
                class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
        </div>

        <div class="mt-5">
            <label class="text-marrom-escuro">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required placeholder="..."
                class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
        </div>

        <div class="mt-5">
            <label class="text-marrom-escuro">Senha</label>

            <div class="relative">
                <input type="password" name="senha" required placeholder="..."
                    class="input-senha w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">

                <div id="cliqueIcone" class="cursor-pointer text-marrom-escuro/70">
                    {{-- Mostrar e ocultar a senha --}}
                    <i
                        class="icone-senha fa-solid fa-eye-slash absolute top-2 right-3 transition duration-400 hover:text-marrom-escuro"></i>
                </div>
            </div>
        </div>
        <br>

        <div class="flex items-center justify-between mt-6">
            <a class="underline underline-offset-2 decoration-marrom-escuro/70 text-sm text-marrom-escuro/70 transition duration-400 hover:text-marrom-escuro"
                href="{{ route('clientes.create') }}">
                <span>Não possuí uma conta?</span>
            </a>

            <button type="submit"
                class="absolute right-12 bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro">Logar</button>
        </div>
    </form>
</div>
