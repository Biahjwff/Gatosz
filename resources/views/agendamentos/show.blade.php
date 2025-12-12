@extends('app')
@section('body')
    <div class="relative">
        {{-- Fundo --}}
        <div class="absolute top-32 right-0 bg-rosa w-64 h-24 rounded-l-3xl shadow-md"></div>
        <div class="absolute top-64 right-0 bg-rosa-claro w-44 h-10 rounded-l-3xl shadow-md"></div>

        <div class="absolute bottom-0 left-0 bg-rosa w-64 h-36 rounded-tr-3xl shadow-md"></div>
        <div class="absolute bottom-0 left-72 bg-rosa-claro w-32 h-10 rounded-t-3xl shadow-md"></div>
        <div class="absolute bottom-44 left-0 bg-rosa-escuro w-32 h-10 rounded-r-3xl shadow-md"></div>

        {{-- Header --}}
        <div data-aos-duration="200" class="backdrop-blur-md bg-rosa-claro/80 py-1 flex justify-between items-center">

            {{-- Logo --}}
            <div data-aos="fade-right" data-aos-delay="100"
                class="bg-white rounded-r-2xl px-3 py-1 text-lg text-rosa-escuro shadow-sm z-10 transition duration-500 hover:text-white hover:bg-rosa-escuro">
                <a href="{{ route('clientes.index') }}">Gatosz</a>
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
            <div class="text-7xl w-full items-start ml-40 text-marrom-escuro"
                style="text-shadow: 2px 1px 2px rgb(112, 112, 112)">
                <h1>Meus <br> agendamentos</h1>
            </div>

            <div class="inline-block overflow-hidden rounded-3xl border-2 border-dashed border-marrom-escuro">

                <table class="w-full min-w-[500px] text-center text-marrom-escuro">

                    <thead>
                        <tr>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-7 py-2 text-2xl">Nome</th>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-7 py-2 text-2xl">Código</th>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-7 py-2 text-2xl">Serviço</th>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-7 py-2 text-2xl">Situação</th>
                            <th class="border-b-2 border-marrom-escuro px-4 py-2 text-2xl">Excluir</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr class="odd:bg-bege even:bg-white">
                            <td class="border-r-2 border-marrom-escuro p-2">Gabi</td>
                              <td class="border-r-2 border-marrom-escuro p-2">007</td>
                            <td class="border-r-2 border-marrom-escuro p-2">Banho e tosa</td>
                            <td class="border-r-2 border-marrom-escuro p-2">Em análise</td>
                            <td class="cursor-pointer text-center text-red-400 hover:text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>

                        
                        <tr class="odd:bg-bege even:bg-white">
                            <td class="border-r-2 border-marrom-escuro p-2">Gabi</td>
                              <td class="border-r-2 border-marrom-escuro p-2">007</td>
                            <td class="border-r-2 border-marrom-escuro p-2">Banho e tosa</td>
                            <td class="border-r-2 border-marrom-escuro p-2">Em análise</td>
                            <td class="cursor-pointer text-center text-red-400 hover:text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
