<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatosz</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="itim">
    @yield('body')

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
                    <div class="w-7 h-10 bg-[#CF5C4D] rounded-r-lg"></div>
                    <div class="w-7 h-7 bg-[#FD7867] rounded-lg"></div>
                    <div class="w-7 h-7 bg-[#F27767] rounded-lg"></div>
                    <div class="w-7 h-7 bg-[#F7D991] rounded-lg"></div>
                </div>

                <div class="flex justify-center gap-5 z-10 text-lg">
                    <button type="button"
                        class="bg-[#CF5C4D] text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Serviços</button>
                    <button type="button"
                        class="bg-[#F7D991] text-marrom-escuro rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Agendar</button>
                    <button type="button"
                        class="bg-[#F27767] text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Avaliações</button>
                    <button type="button"
                        class="bg-[#CF5C4D] text-white rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Sobre</button>
                    <button type="button"
                        class="bg-[#F7D991] text-marrom-escuro rounded-lg px-2 py-1 shadow-sm transition duration-500 hover:bg-bege-claro hover:text-rosa-escuro">Contato</button>
                </div>

                <div class="absolute right-0 flex gap-7 items-center z-10">
                    <div class="w-7 h-7 bg-[#F7D991] rounded-lg"></div>
                    <div class="w-7 h-7 bg-[#F27767] rounded-lg"></div>
                    <div class="w-7 h-7 bg-[#FD7867] rounded-lg"></div>
                    <div class="w-7 h-10 bg-[#CF5C4D] rounded-l-lg"></div>
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
</body>

</html>
