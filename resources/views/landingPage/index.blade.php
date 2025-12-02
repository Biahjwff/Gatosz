@extends('app')
@section('body')
    {{-- Header --}}
    <div class="relative bg-rosa-claro py-1 flex justify-between items-center">

        {{-- Logo --}}
        <div
            class="bg-white rounded-r-2xl px-3 py-1 text-lg text-rosa-escuro shadow-sm z-10 transition duration-500 hover:text-white hover:bg-rosa-escuro">
            <span>Gatosz</span>
        </div>

        {{-- Atalhos --}}
        <div class="hidden lg:flex gap-5 z-10">
            <button type="button"
                class="bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege hover:text-rosa-escuro">Serviços</button>

            <button type="button"
                class="bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege hover:text-rosa-escuro">Agendar</button>

            <button type="button"
                class="bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege hover:text-rosa-escuro">Avaliações</button>

            <button type="button"
                class="bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege hover:text-rosa-escuro">Sobre</button>

            <button type="button"
                class="bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege hover:text-rosa-escuro">Contato</button>
        </div>

        {{-- Fundo do header --}}
        <div class="bg-rosa-escuro w-20 h-5 absolute top-0 right-20 rounded-b-xl"></div>
        <div class="bg-rosa-escuro w-60 h-5 absolute bottom-0 left-0 rounded-t-xl"></div>
        <div class="bg-rosa-escuro w-10 h-5 absolute bottom-0 right-80 rounded-t-xl opacity-55"></div>
        <div class="bg-rosa-escuro w-5 h-5 absolute top-0 left-80 rounded-b-xl opacity-55"></div>

        {{-- Perfil --}}
        <div class="flex items-center text-center bg-white rounded-l-3xl px-3 py-1 shadow-sm">
            <div
                class="bg-rosa-claro p-1 rounded-full text-white transition duration-500 hover:bg-white hover:text-rosa-escuro">
                <i class="fa-regular fa-user fa-lg text-shadow-sm"></i>
            </div>
        </div>
    </div>
@endsection
