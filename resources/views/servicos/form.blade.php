{{-- Estilização do formulário --}}
<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="200"
    class="w-[500px] bg-white px-12 py-5 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">

    <div class="text-center">
        <h1 class="text-5xl chilanka">
            {{ isset($servico) ? 'Editar serviço' : 'Cadastrar serviço' }}
        </h1>
        <h2 class="">Insira as informações abaixo</h2>
    </div>

    <div class="mt-3">
        <label class="text-marrom-escuro">Nome</label>
        <input type="text" name="nome" value="{{ old('nome', $servico->nome ?? '') }}" required placeholder="..."
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    <div class="mt-5">
        <label class="text-marrom-escuro">Descrição</label>
        <input type="text" name="descricao" value="{{ old('descricao', $servico->descricao ?? '') }}" required
            placeholder="..."
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    <div class="mt-5">
        <label class="text-marrom-escuro">Valor</label>
        <input type="number" step="0.01" name="valor" value="{{ old('valor', $servico->valor ?? '') }}" required
            placeholder="$..."
            class=" w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
    </div>

    <div class="mt-5">
        <label class="text-marrom-escuro">Produto utilizado</label>
        <select name="produtos[]"
            class="w-full bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro focus:ring-1 focus:ring-marrom-escuro">

            <option value="" selected disabled>Selecione...</option>
            @foreach($produtos as $produto)
                <option value="{{ $produto->id }}"
                    {{-- Lógica para marcar como selecionado se for edição ou erro de validação --}}
                    @if(isset($servico) && $servico->produtos->contains($produto->id)) selected
                    @elseif(is_array(old('produtos')) && in_array($produto->id, old('produtos'))) selected
                    @endif
                >
                    {{ $produto->nome }}
                </option>
            @endforeach

        </select>
        <p class="text-xs mt-1 text-gray-500">* Se não usar produtos, deixe sem selecionar.</p>
    </div>

    {{-- Botão de submit --}}
    <div class="flex justify-end w-full">
        <button type="submit"
            class="mt-5 bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro">
            {{ isset($servico) ? 'Salvar serviço' : 'Cadastrar serviço' }}
        </button>
    </div>
</div>
