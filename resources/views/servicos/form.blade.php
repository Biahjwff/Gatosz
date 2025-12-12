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
        <div class="mt-5 relative">
    <label class="text-marrom-escuro font-bold">Produtos utilizados</label>

    {{-- 1. O Botão que parece um Select (O Gatilho) --}}
    <button type="button" onclick="toggleDropdown()"
        class="w-full h-10 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-left px-3 text-marrom-escuro flex justify-between items-center focus:ring-1 focus:ring-marrom-escuro">
        <span id="texto-selecao" class="truncate">Selecione os produtos...</span>
        <i class="fa-solid fa-chevron-down text-sm"></i>
    </button>

    {{-- 2. A Lista de Checkboxes (Escondida por padrão) --}}
    {{-- A classe 'hidden' esconde, 'absolute' faz flutuar por cima do resto --}}
    <div id="lista-produtos" class="hidden absolute z-50 w-full bg-white border border-marrom-escuro rounded-lg shadow-lg mt-1 max-h-48 overflow-y-auto">

        @foreach($produtos as $produto)
            <div class="flex items-center px-3 py-2 hover:bg-bege-escuro/30 cursor-pointer border-b border-gray-100 last:border-0" onclick="document.getElementById('check_{{ $produto->id }}').click()">

                <input type="checkbox"
                       id="check_{{ $produto->id }}"
                       name="produtos[]"
                       value="{{ $produto->id }}"
                       class="rounded border-marrom-escuro text-marrom-escuro focus:ring-marrom-escuro w-4 h-4 mr-3 cursor-pointer produto-checkbox"
                       onclick="event.stopPropagation(); atualizarTexto();"

                       {{-- Lógica para manter marcado na Edição ou Erro --}}
                       @if(isset($servico) && $servico->produtos->contains($produto->id)) checked
                       @elseif(is_array(old('produtos')) && in_array($produto->id, old('produtos'))) checked
                       @endif
                >

                <label for="check_{{ $produto->id }}" class="text-marrom-escuro cursor-pointer select-none flex-1">
                    {{ $produto->nome }}
                </label>
            </div>
        @endforeach

        @if($produtos->isEmpty())
            <div class="p-3 text-gray-500 text-sm text-center">Nenhum produto cadastrado.</div>
        @endif
    </div>
</div>

        </select>
        <p class="text-xs mt-1 text-gray-500">* Se não usar produtos, deixe sem selecionar.</p>
    </div>

<script>
    // 1. Função para Abrir/Fechar a lista
    function toggleDropdown() {
        const lista = document.getElementById('lista-produtos');
        lista.classList.toggle('hidden');
    }

    // 2. Função para atualizar o texto do botão conforme você marca os itens
    function atualizarTexto() {
        // Pega todos os checkboxes que estão marcados
        const checkboxes = document.querySelectorAll('.produto-checkbox:checked');
        const textoSpan = document.getElementById('texto-selecao');

        if (checkboxes.length === 0) {
            // Nenhum marcado
            textoSpan.innerText = "Selecione os produtos...";
            textoSpan.style.fontWeight = 'normal';
        } else if (checkboxes.length === 1) {
            // Um marcado: Pega o texto do <label> vizinho ao input
            // nextElementSibling pega o próximo item (o label)
            const label = checkboxes[0].nextElementSibling.innerText;
            textoSpan.innerText = label;
            textoSpan.style.fontWeight = 'bold';
        } else {
            // Vários marcados
            textoSpan.innerText = checkboxes.length + " produtos selecionados";
            textoSpan.style.fontWeight = 'bold';
        }
    }

    // 3. Fechar a lista se clicar fora dela (UX padrão)
    window.addEventListener('click', function(e) {
        const lista = document.getElementById('lista-produtos');
        const botao = document.querySelector('button[onclick="toggleDropdown()"]');

        // Se a lista existe, e o clique NÃO foi no botão e NEM dentro da lista...
        if (lista && botao && !botao.contains(e.target) && !lista.contains(e.target)) {
            lista.classList.add('hidden'); // Fecha a lista
        }
    });

    // 4. Rodar ao carregar a página (Importante para a tela de EDIÇÃO)
    // Se você estiver editando, isso garante que o botão já mostre o que veio do banco
    document.addEventListener('DOMContentLoaded', function() {
        atualizarTexto();
    });
</script>

    {{-- Botão de submit --}}
    <div class="flex justify-end w-full">
        <button type="submit"
            class="mt-5 bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro">
            {{ isset($servico) ? 'Salvar serviço' : 'Cadastrar serviço' }}
        </button>
    </div>
</div>
