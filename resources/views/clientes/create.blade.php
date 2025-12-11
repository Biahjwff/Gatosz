@extends('app')
@section('body')

    <div class="itim bg-cover bg-center min-h-screen bg-no-repeat"
        style="background-image: url('{{ asset('imgs/fundoCrud.png') }}')">
        <div class="flex justify-between items-center pt-2">
            <a href="{{ url('/') }}" data-aos="fade-right" data-aos-delay="200" data-aos-duration="200"
                class="bg-white px-5 py-1 rounded-r-lg text-marrom-escuro shadow-md shadow-marrom-escuro">Home</a>

            {{-- Perfil --}}
            <div class="flex items-center text-center bg-white rounded-l-xl px-2 py-1.5 shadow-sm">
                <a href="{{ route('login') }}" data-aos="fade-left" data-aos-delay="300" data-aos-duration="200"
                    class="text-marrom-escuro transition duration-500 hover:bg-white hover:text-rosa-escuro">
                    <i class="fa-solid fa-user-gear fa-lg text-shadow-sm"></i>
                </a>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center min-h-screen my-5">

            {{-- EStilização do formulário --}}
            <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="200"
                class=" relative bg-white px-12 py-12 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">

                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf

                    <div class="text-center">
                        <h1 class="text-5xl chilanka">Antes de começar</h1>
                        <h2 class="">Insira suas informações abaixo</h2>
                    </div>

                    @if ($errors->any())
                        <div class="mt-2 text-sm text-center text-red-500">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mt-3">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required
                            placeholder="..."
                            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
                    </div>

                    <div class="mt-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            placeholder="..."
                            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
                    </div>

                    <div class="mt-3">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}" required
                            placeholder="..."
                            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
                    </div>

                    <div class="mt-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" required
                            placeholder="..."
                            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
                    </div>

                    <div class="mt-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" value="{{ old('endereco') }}" required
                            placeholder="..."
                            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
                    </div>

                    <div class="mt-3">
                        <label for="senha">Senha</label>
                        <div class="relative">
                            <input type="password" name="senha" id="senha" required placeholder="..."
                                class="input-senha w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">

                            <div id="cliqueIcone" class="cursor-pointer text-marrom-escuro/70">
                                {{-- Mostrar e ocultar a senha --}}
                                <i
                                    class="icone-senha fa-solid fa-eye-slash absolute top-2 right-3 transition duration-400 hover:text-marrom-escuro"></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <a class="underline underline-offset-2 decoration-marrom-escuro/70 text-sm text-marrom-escuro/70 transition duration-400 hover:text-marrom-escuro"
                            href="{{ route('clientes.create') }}">
                            <span>Já possuí uma conta?</span>
                        </a>

                        <button type="submit"
                            class="absolute right-12 bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro">Cadastrar-se</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Direitos reservados --}}
        <div class="flex justify-center z-10">
            <div class="bg-rosa-escuro w-full py-1 text-sm text-white text-center">
                <span>© 2025 Gatosz. Todos os direitos reservados</span>
            </div>
        </div>
    </div>
@endsection
