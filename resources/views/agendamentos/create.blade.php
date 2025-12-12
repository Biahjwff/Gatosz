@extends('app')
@section('body')
    {{-- Header --}}
    <div data-aos-duration="200" class="backdrop-blur-md bg-rosa-claro/80 py-1 flex justify-between items-center">
        <div data-aos="fade-right" data-aos-delay="100"
            class="bg-white rounded-r-2xl px-3 py-1 text-lg text-rosa-escuro shadow-sm z-10 transition duration-500 hover:text-white hover:bg-rosa-escuro">
            <a href="{{ route('clientes.index') }}">Gatosz</a>
        </div>

        <div class="flex items-center gap-5">
            {{-- Logout Cliente --}}
            <form method="POST" action="{{ route('logout.cliente') }}">
                @csrf
                <button type="submit" class="bg-rosa-escuro px-3 py-1 rounded-lg text-white shadow-sm transition duration-400 hover:bg-white hover:text-rosa-escuro">Logout</button>
            </form>


        </div>

        {{-- Detalhes visuais --}}
        <div class="bg-rosa-escuro w-20 h-5 absolute top-0 right-1/2 rounded-b-xl"></div>
        <div class="bg-rosa-escuro w-60 h-5 absolute bottom-0 left-0 rounded-t-xl"></div>
        <div class="bg-rosa-escuro w-10 h-5 absolute bottom-0 right-80 rounded-t-xl opacity-55"></div>
        <div class="bg-rosa-escuro w-5 h-5 absolute top-0 left-80 rounded-b-xl opacity-55"></div>
    </div>

    <div class="relative flex justify-center items-center min-h-screen py-20">
        <img src="{{ asset('imgs/fundo.png') }}" alt="" class="w-[800px]">

        <div class="absolute z-10">
            {{-- Mensagem de Sucesso --}}
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 text-center shadow-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('agendamentos.store') }}" method="POST">
                @csrf
                {{-- Botão Voltar --}}
                <a href="{{ route('clientes.index') }}">
                    <i class="absolute -left-10 top-10 text-white fa-solid fa-left-long transition duration-400 hover:text-marrom-escuro text-2xl"></i>
                </a>

                @include('agendamentos.form')
            </form>
        </div>
    </div>

    <div class="flex justify-center z-10">
        <div class="bg-rosa-escuro w-full py-1 text-sm text-white text-center">
            <span>© 2025 Gatosz. Todos os direitos reservados</span>
        </div>
    </div>
@endsection
