@extends('app')
@section('body')
    {{-- Header --}}
    <div data-aos-duration="200"
        class="sticky top-0 z-50 backdrop-blur-md bg-rosa-claro/80 py-1 flex justify-between items-center">

        {{-- Logo --}}
        <div data-aos="fade-right" data-aos-delay="100"
            class="bg-white rounded-r-2xl px-3 py-1 text-lg text-rosa-escuro shadow-sm z-10 transition duration-500 hover:text-white hover:bg-rosa-escuro">
            <span>Gatosz</span>
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

    <div class="flex flex-col gap-10 justify-center items-center h-screen">

        <div class="text-7xl w-full items-start ml-40 text-marrom-escuro" style="text-shadow: 1px 1px 1px #8e4330">
            <h1>Seleciona a opção <br> desejada</h1>
        </div>

        {{-- Cards de serviços --}}
        <div class="relative flex justify-center items-center py-10 bg-bege w-full">

            <div class="flex gap-20 z-30">
                {{-- Funcionalidade 1 --}}
                <a href="{{ route('produto.create') }}" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="text-center h-[200px] w-64 flex flex-col justify-center items-center z-20 bg-white rounded-[40px] border-2 border-dashed border-marrom-escuro shadow-xl shadow-laranja transition duration-400 hover:scale-105"
                        style="box-shadow: 0 10px 0px #F7C691">

                        <span class="text-4xl text-marrom-escuro px-0.5">Ver meu estoque</span>

                    </div>
                </a>

                {{-- Funcionalidade 2 --}}
                <a href="{{ route('produto.create') }}" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="text-center h-[200px] w-64 flex flex-col justify-center items-center z-20 bg-white rounded-[40px] border-2 border-dashed border-marrom-escuro shadow-xl shadow-laranja transition duration-400 hover:scale-105"
                        style="box-shadow: 0 10px 0px #F7C691">

                        <span class="text-4xl text-marrom-escuro px-0.5">Cadastrar produto</span>

                    </div>
                </a>

                {{-- Funcionalidade 3 --}}
                <a href="{{ route('produto.create') }}" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="text-center h-[200px] w-64 flex flex-col justify-center items-center z-20 bg-white rounded-[40px] border-2 border-dashed border-marrom-escuro shadow-xl shadow-laranja transition duration-400 hover:scale-105"
                        style="box-shadow: 0 10px 0px #F7C691">

                        <span class="text-4xl text-marrom-escuro px-0.5">Analisar agendamentos</span>

                    </div>
                </a>

            </div>
            {{-- Fundo do serviço --}}

            {{-- Parte de cima --}}
            <div class="absolute left-20 top-0 h-14 w-6 bg-white rounded-b-full wave-item"></div>
            <div class="absolute left-14 top-0 h-8 w-4 bg-white rounded-b-full wave-item"></div>
            <div class="absolute right-28 top-0 h-14 w-5 bg-bege rounded-t-full z-10"></div>
            <div class="absolute right-20 top-5 h-8 w-4 bg-bege rounded-t-full z-10"></div>

            {{-- Parte do meio --}}
            <div class="absolute left-0 bottom-5 h-20 w-40 bg-laranja/50 rounded-r-3xl"></div>
            <div class="absolute left-96 top-0 h-20 w-64 bg-laranja/50 rounded-b-3xl"></div>
            <div class="absolute right-96 bottom-0 h-5 w-64 bg-laranja/50 rounded-t-3xl"></div>
            <div class="absolute right-0 top-0 h-64 w-14 bg-laranja/50 rounded-bl-3xl"></div>
            <div class="absolute right-20 -bottom-14 h-20 w-5 bg-bege rounded-b-full wave-item"></div>
            <div class="absolute right-28 -bottom-7 h-8 w-4 bg-bege rounded-b-full wave-item"></div>
        </div>

    </div>

    {{-- Direitos reservados --}}
    <div class="flex justify-center z-10">
        <div class="bg-rosa-escuro w-full py-1 text-sm text-white text-center">
            <span>© 2025 Gatosz. Todos os direitos reservados</span>
        </div>
    </div>
@endsection
