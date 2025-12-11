@extends('app')
@section('body')
    <div class=" bg-center bg-no-repeat">
        {{-- Header --}}
        <div data-aos-duration="200" class="backdrop-blur-md bg-rosa-claro/80 py-1 flex justify-between items-center">

            {{-- Logo --}}
            <div data-aos="fade-right" data-aos-delay="100"
                class="bg-white rounded-r-2xl px-3 py-1 text-lg text-rosa-escuro shadow-sm z-10 transition duration-500 hover:text-white hover:bg-rosa-escuro">
                <a href="{{ route('administrador.index') }}">Gatosz</a>
            </div>

            <div class="flex items-center gap-5">
                {{-- Logout --}}
                <button type="button"
                    class="bg-rosa-escuro px-3 py-1 rounded-lg text-white shadow-sm transition duration-400 hover:bg-white hover:text-rosa-escuro">Logout</button>

                {{-- Perfil --}}
                <div class="flex items-center text-center bg-white rounded-l-3xl px-3 py-1 shadow-sm">
                    <a href="{{ route('clientes.login') }}" data-aos="fade-left" data-aos-delay="700"
                        class="bg-rosa-claro p-1 rounded-full text-white transition duration-500 hover:bg-white hover:text-rosa-escuro">
                        <i class="fa-regular fa-user fa-lg text-shadow-sm"></i>
                    </a>
                </div>
            </div>

            {{-- Fundo do header --}}
            <div class="bg-rosa-escuro w-20 h-5 absolute top-0 right-1/2 rounded-b-xl"></div>
            <div class="bg-rosa-escuro w-60 h-5 absolute bottom-0 left-0 rounded-t-xl"></div>
            <div class="bg-rosa-escuro w-10 h-5 absolute bottom-0 right-80 rounded-t-xl opacity-55"></div>
            <div class="bg-rosa-escuro w-5 h-5 absolute top-0 left-80 rounded-b-xl opacity-55"></div>
        </div>

        <div class="relative flex justify-center items-center min-h-screen">
            {{-- Fundo do formulário --}}
            <img src="{{ asset('imgs/fundo.png') }}" alt="" class="w-[650px]">

            {{-- Formulário --}}
            <div class="absolute z-10">

                <form action="" method="POST">
                    @csrf
                    
                    {{-- Voltar para o index --}}
                    <a href="{{ route('administrador.index') }}">
                        <i
                            class="absolute -left-10 top-10 text-white fa-solid fa-left-long transition duration-400 hover:text-marrom-escuro"></i>
                    </a>

                    @include('servico.form')
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
