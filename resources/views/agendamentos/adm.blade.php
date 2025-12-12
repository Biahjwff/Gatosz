@extends('app')
@section('body')
    <div class="relative">
        {{-- Fundo Decorativo --}}
        <div class="absolute top-32 right-0 bg-rosa w-64 h-24 rounded-l-3xl shadow-md"></div>
        <div class="absolute top-64 right-0 bg-rosa-claro w-44 h-10 rounded-l-3xl shadow-md"></div>
        <div class="absolute bottom-0 left-0 bg-rosa w-64 h-36 rounded-tr-3xl shadow-md -z-10"></div>
        <div class="absolute bottom-0 left-72 bg-rosa-claro w-32 h-10 rounded-t-3xl shadow-md"></div>
        <div class="absolute bottom-44 left-0 bg-rosa-escuro w-32 h-10 rounded-r-3xl shadow-md"></div>

        {{-- Header Admin --}}
        <div data-aos-duration="200" class="backdrop-blur-md bg-rosa-claro/80 py-1 flex justify-between items-center">
            <div data-aos="fade-right" data-aos-delay="100" class="bg-white rounded-r-2xl px-3 py-1 text-lg text-rosa-escuro shadow-sm z-10 hover:text-white hover:bg-rosa-escuro">
                <a href="{{ route('administrador.index') }}">Gatosz</a>
            </div>
            <div class="flex items-center gap-5">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-rosa-escuro px-3 py-1 rounded-lg text-white shadow-sm hover:bg-white hover:text-rosa-escuro">Logout</button>
                </form>
                <div class="flex items-center text-center bg-white rounded-l-3xl px-3 py-1 shadow-sm">
                   <i class="fa-regular fa-user fa-lg text-shadow-sm"></i>
                </div>
            </div>
             {{-- Detalhes visuais header --}}
             <div class="bg-rosa-escuro w-20 h-5 absolute top-0 right-1/2 rounded-b-xl"></div>
             <div class="bg-rosa-escuro w-60 h-5 absolute bottom-0 left-0 rounded-t-xl"></div>
             <div class="bg-rosa-escuro w-10 h-5 absolute bottom-0 right-80 rounded-t-xl opacity-55"></div>
             <div class="bg-rosa-escuro w-5 h-5 absolute top-0 left-80 rounded-b-xl opacity-55"></div>
        </div>

        <div class="flex flex-col gap-10 justify-center items-center min-h-screen">
            <div class="text-7xl w-full items-start ml-40 text-marrom-escuro" style="text-shadow: 2px 1px 2px rgb(112, 112, 112)">
                <h1>Gerenciar <br> Agendamentos</h1>
            </div>

            {{-- Mensagem de Sucesso --}}
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded shadow-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="inline-block overflow-hidden rounded-3xl border-2 border-dashed border-marrom-escuro">
                <table class="w-full min-w-[900px] text-center text-marrom-escuro">
                    <thead>
                        <tr>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-4 py-2 text-2xl">Data</th>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-4 py-2 text-2xl">Cliente</th>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-4 py-2 text-2xl">Serviço</th>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-4 py-2 text-2xl">Gato (Raça)</th>
                            <th class="border-b-2 border-r-2 border-marrom-escuro px-4 py-2 text-2xl">Situação</th>
                            <th class="border-b-2 border-marrom-escuro px-4 py-2 text-2xl">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($agendamentos as $agendamento)
                        <tr class="odd:bg-bege even:bg-white">
                            {{-- Data formatada --}}
                            <td class="border-r-2 border-marrom-escuro p-2">
                                {{ $agendamento->data_hora->format('d/m/Y H:i') }}
                            </td>

                            {{-- Nome do Cliente --}}
                            <td class="border-r-2 border-marrom-escuro p-2">{{ $agendamento->cliente->nome }}</td>

                            {{-- Nome do Serviço --}}
                            <td class="border-r-2 border-marrom-escuro p-2">{{ $agendamento->servico->nome }}</td>

                            {{-- Detalhes do Gato --}}
                            <td class="border-r-2 border-marrom-escuro p-2 text-sm leading-tight">
                                <span class="font-bold">{{ $agendamento->nome_gato }}</span> <br>
                                <span class="text-xs">({{ $agendamento->raca_gato }})</span>
                            </td>

                            {{-- Situação Atual (Colorida) --}}
                            <td class="border-r-2 border-marrom-escuro p-2 font-bold uppercase text-sm
                                {{ $agendamento->situacao == 'aceito' ? 'text-green-600' :
                                  ($agendamento->situacao == 'recusado' ? 'text-red-600' : 'text-yellow-600') }}">
                                {{ $agendamento->situacao }}
                            </td>

                            {{-- Botões de Ação --}}
                            <td class="border-r-2 border-marrom-escuro p-2 flex justify-center items-center gap-4 h-full">

                                {{-- BOTÃO ACEITAR (Aparece se Pendente ou Recusado) --}}
                                @if($agendamento->situacao != 'aceito')
                                    <form action="{{ route('agendamentos.updateStatus', $agendamento->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="situacao" value="aceito">
                                        <button type="submit" title="Aceitar Agendamento"
                                            class="text-green-500 hover:text-green-700 transform hover:scale-125 transition duration-200">
                                            <i class="fa-solid fa-check fa-xl"></i>
                                        </button>
                                    </form>
                                @endif

                                {{-- BOTÃO RECUSAR (Aparece se Pendente ou Aceito) --}}
                                @if($agendamento->situacao != 'recusado')
                                    <form action="{{ route('agendamentos.updateStatus', $agendamento->id) }}" method="POST"
                                          onsubmit="return confirm('Tem certeza que deseja recusar este agendamento?');">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="situacao" value="recusado">
                                        <button type="submit" title="Recusar Agendamento"
                                            class="text-red-500 hover:text-red-700 transform hover:scale-125 transition duration-200">
                                            <i class="fa-solid fa-xmark fa-xl"></i>
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-5 text-gray-500 italic">
                                Nenhum agendamento solicitado até o momento.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <a href="{{ route('administrador.index') }}" class="text-marrom-escuro hover:underline mt-2">
                Voltar ao Painel
            </a>
        </div>

        <div class="flex justify-center z-10">
            <div class="bg-rosa-escuro w-full py-1 text-sm text-white text-center"><span>© 2025 Gatosz.</span></div>
        </div>
    </div>
@endsection
