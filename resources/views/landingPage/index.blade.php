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

        {{-- Atalhos --}}
        <div class="hidden lg:flex gap-5 z-10">
            <a href="#servico" data-aos="fade-up" data-aos-delay="200"
                class="btn-link bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Serviços</a>

            <a href="#agende" data-aos="fade-up" data-aos-delay="300"
                class="btn-link bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Agendar</a>

            <a href="#feedback" data-aos="fade-up" data-aos-delay="400"
                class="btn-link bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Avaliações</a>

            <a href="#sobre" data-aos="fade-up" data-aos-delay="500"
                class="btn-link bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Sobre</a>

            <a href="#suporte" data-aos="fade-up" data-aos-delay="600"
                class="btn-link bg-rosa-escuro text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Contato</a>
        </div>

        {{-- Perfil --}}
        <div class="flex items-center text-center bg-white rounded-l-3xl px-3 py-1 shadow-sm">
            <a href="{{ route('clientes.login') }}" data-aos="fade-left" data-aos-delay="700"
                class="bg-rosa-claro p-1 rounded-full text-white transition duration-500 hover:bg-white hover:text-rosa-escuro">
                <i class="fa-regular fa-user fa-lg text-shadow-sm"></i>
            </a>
        </div>

        {{-- Fundo do header --}}
        <div class="bg-rosa-escuro w-20 h-5 absolute top-0 right-20 rounded-b-xl"></div>
        <div class="bg-rosa-escuro w-60 h-5 absolute bottom-0 left-0 rounded-t-xl"></div>
        <div class="bg-rosa-escuro w-10 h-5 absolute bottom-0 right-80 rounded-t-xl opacity-55"></div>
        <div class="bg-rosa-escuro w-5 h-5 absolute top-0 left-80 rounded-b-xl opacity-55"></div>
    </div>

    <div class="flex justify-center items-center mt-5" data-aos-duration="200">

        <div class="flex flex-col">
            <h1 data-aos="fade-left" data-aos-delay="800" class="chilanka text-8xl"
                style="text-shadow: 0.5px 0.5px 2px black">Torne seu <br> gato uma <span data-aos="fade-up"
                    data-aos-delay="900" class="text-rosa-claro text-shadow-md text-shadow-rosa-escuro"
                    style="text-shadow: 4px 4px 0px #EC6756">diva</span></h1>

            <a href="{{ route('clientes.create') }}">
                <div class="absolute left-0 top-2/3 w-80">
                    <div data-aos="fade-left" data-aos-delay="1000"
                        class="text-right border-[3px] border-marrom-escuro border-dashed rounded-r-xl border-l-0 p-2">
                        <button type="button" data-aos="fade-left" data-aos-delay="1100"
                            class="shadow-sm rounded-lg py-0.5 px-2 bg-bege-claro text-lg text-marrom-escuro transition duration-400 hover:bg-marrom-escuro hover:text-white">agende
                            seu horário</button>
                    </div>
                </div>
            </a>
        </div>

        <img data-aos="fade-up" data-aos-delay="1200" data-aos-duration="200" src="{{ asset('imgs/logo2.png') }}"
            alt="Logo de gato">
    </div>

    {{-- Seção de serviços --}}
    @include('landingPage.servico')

    {{-- Seção de agende seu horário --}}
    @include('landingPage.agende')

    {{-- Seção de feedback --}}
    @include('landingPage.feedback')

    {{-- Seção de sobre --}}
    @include('landingPage.sobre')

    {{-- Seção de suporte --}}
    @include('landingPage.suporte')

    {{-- Footer --}}

    <div class="flex flex-col mt-20">
        {{-- Logo --}}
        <img src="{{ asset('imgs/logo3.png') }}" alt="Logo do site com pata de gato" data-aos="fade-right"
            data-aos-delay="300" data-aos-duration="500" class="w-[800px] z-10">

        <div class="relative flex flex-col bg-marrom-escuro pb-3 pt-24 -mt-24">

            {{-- Fundo --}}
            <div class="absolute top-0 left-64 h-52 w-80 bg-marrom-claro rounded-b-3xl shadow-lg"></div>
            <div class="absolute top-0 right-0 h-64 w-64 bg-marrom-claro rounded-b-3xl shadow-lg"></div>

            {{-- Redes sociais --}}

            <div class="flex flex-col items-end z-10">
                <span class="text-white text-2xl pr-2">Nos siga nas redes</span>

                <div class="mt-1 flex gap-4 items-center bg-white rounded-l-xl px-12 py-2 text-white shadow-lg">
                    <div class=" bg-[#CF5C4D] items-center rounded-lg px-0.5 py-1 shadow-md">
                        <i class="fa-brands fa-instagram fa-xl"></i>
                    </div>

                    <div class=" bg-[#F27767] items-center rounded-lg px-0.5 py-1 shadow-md">
                        <i class="fa-brands fa-tiktok fa-xl"></i>
                    </div>

                    <div class=" bg-[#FD7867] items-center rounded-lg px-0.5 py-1 shadow-md">
                        <i class="fa-brands fa-x-twitter fa-xl"></i>
                    </div>

                    <div class=" bg-[#F7D991] items-center rounded-lg px-0.5 py-1 shadow-md">
                        <i class="fa-brands fa-facebook-f fa-xl"></i>
                    </div>
                </div>
            </div>

            {{-- Atalhos --}}
            <div class="relative w-full flex justify-center items-center h-24 mt-7">
                <div class="absolute left-0 flex gap-7 items-center">
                    <div class="w-7 h-10 bg-[#CF5C4D] rounded-r-lg wave-item"></div>
                    <div class="w-7 h-7 bg-[#FD7867] rounded-lg wave-item2"></div>
                    <div class="w-7 h-7 bg-[#F27767] rounded-lg wave-item"></div>
                    <div class="w-7 h-7 bg-[#F7D991] rounded-lg wave-item2"></div>
                </div>

                <div class="flex justify-center gap-5 z-10 text-lg">
                    <a href="#servico"
                        class="btn-link bg-[#CF5C4D] text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Serviços</a>
                    <a href="#agende"
                        class="btn-link bg-[#F7D991] text-marrom-escuro rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Agendar</a>
                    <a href="#feedback"
                        class="btn-link bg-[#F27767] text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Avaliações</a>
                    <a href="#sobre"
                        class="btn-link bg-[#CF5C4D] text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Sobre</a>
                    <a href="#suporte"
                        class="btn-link bg-[#F7D991] text-marrom-escuro rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Contato</a>
                </div>

                <div class="absolute right-0 flex gap-7 items-center z-10">
                    <div class="w-7 h-7 bg-[#F7D991] rounded-lg wave-item2"></div>
                    <div class="w-7 h-7 bg-[#F27767] rounded-lg wave-item"></div>
                    <div class="w-7 h-7 bg-[#FD7867] rounded-lg wave-item2"></div>
                    <div class="w-7 h-10 bg-[#CF5C4D] rounded-l-lg wave-item"></div>
                </div>
            </div>

            {{-- Direitos reservados --}}
            <div class="flex justify-center z-10 mt-7">
                <div class="bg-white w-[700px] px-5 py-1 text-xl text-marrom-escuro text-center rounded-full">
                    <span>© 2025 Gatosz. Todos os direitos reservados</span>
                </div>
            </div>
        </div>
    </div>
@endsection
