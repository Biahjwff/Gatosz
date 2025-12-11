@extends('app')
@section('body')
    <div class="itim bg-cover bg-center min-h-screen bg-no-repeat"
        style="background-image: url('{{ asset('imgs/fundoCrud.png') }}')">
        <div class="flex justify-start pt-2">
            <a href="{{ url('/') }}"
                class=" bg-white px-5 py-1 rounded-r-lg text-marrom-escuro shadow-md shadow-marrom-escuro">Home</a>
        </div>

        <div class="flex flex-col justify-center items-center min-h-screen">

            {{-- EStilização do formulário --}}
            <div class="bg-white px-12 py-12 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">
                {{ $slot }}
            </div>
        </div>
    </div>

    {{-- Direitos reservados --}}
    <div class="flex justify-center z-10">
        <div class="bg-rosa-escuro w-full py-1 text-sm text-white text-center">
            <span>© 2025 Gatosz. Todos os direitos reservados</span>
        </div>
    </div>
@endsection
