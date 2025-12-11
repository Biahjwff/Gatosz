@extends('app')
@section('body')
    <div class="itim bg-cover bg-center min-h-screen bg-no-repeat"
        style="background-image: url('{{ asset('imgs/fundoFormulario.png') }}')">
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

        <div class="flex flex-col justify-center items-center min-h-screen">
            @include('produto.form')
        </div>

        {{-- Direitos reservados --}}
        <div class="flex justify-center z-10">
            <div class="bg-rosa-escuro w-full py-1 text-sm text-white text-center">
                <span>© 2025 Gatosz. Todos os direitos reservados</span>
            </div>
        </div>
    </div>
@endsection
