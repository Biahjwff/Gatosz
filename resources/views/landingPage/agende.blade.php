<div class="relative">
    {{-- Fundo --}}

    {{-- Esquerda --}}
    <div class="bg-bege h-[500px] w-20 absolute left-0"></div>
    <div class="bg-white rounded-l-full h-[500px] w-20 absolute left-3 top-2" style="box-shadow: -10px 10px 0px #F7C691">
    </div>

    {{-- Direita --}}
    <div class="flex flex-col gap-16 relative -mt-2 z-10">
        <div>
            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="200" class="absolute right-0 bg-rosa-claro w-[800px] h-6 rounded-l-sm z-20 shadow-md"></div>
            <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="200" class="absolute right-0 mt-3 bg-rosa-escuro w-[750px] h-6 rounded-bl-sm"></div>

        </div>

        <div>
            <div data-aos="fade-left" data-aos-delay="400" data-aos-duration="200" class="absolute right-0 bg-rosa-claro w-[530px] h-3 z-20 shadow-md rounded-l-sm"></div>
            <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="200" class="absolute right-0 mt-1 bg-rosa-escuro w-[550px] h-3 rounded-bl-sm"></div>
        </div>
    </div>

    <div class="flex items-center ml-20 mt-10 relative">

        <div class="flex flex-col gap-10 z-10 absolute top-5">
            <div data-aos="fade-right" data-aos-delay="600" data-aos-duration="300" class="text-8xl flex gap-2 items-center" style="text-shadow: 4px 4px 0px #EC6756">
                <h6 class="text-rosa-claro">A</h6>
                <span class=" text-white bg-rosa-claro px-3 rounded-xl shadow-lg">gende seu horário</span>
            </div>

            <div class="relative w-[600px]">
                <p data-aos="fade-right" data-aos-delay="700" data-aos-duration="300" class="text-justify text-marrom-escuro">Contrary to popular belief, Lorem Ipsum is not simply random
                    text. It has roots in a piece of classical Latin
                    literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
                    a
                    Lorem
                    Ipsum passage, and going through the cites of the word in classical.</p>

                <div class="absolute right-4">
                    {{-- Botão de agendamento --}}
                    <button type="button" data-aos="fade-up" data-aos-delay="800" data-aos-duration="300"
                        class="bg-marrom-escuro rounded-lg px-3 py-1 text-white shadow-md transition duration-400 hover:bg-rosa-claro">Clicando
                        aqui</button>
                    <div data-aos="fade-up" data-aos-delay="900" data-aos-duration="300" class="absolute -bottom-4 -right-4">
                        <img src="{{ asset('imgs/atencao.png') }}" alt="Chamar atenção ao botão de agendamento">
                    </div>
                </div>

            </div>
        </div>

        <img src="{{ asset('imgs/agende.png') }}" alt="Imagem que ilustra um gato em um salão"
            class="absolute right-20 top-0 w-96">
    </div>

</div>
