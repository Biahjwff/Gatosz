    {{-- Estilização do formulário --}}
<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="200"
    class="bg-white px-12 py-5 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">

    <div class="text-center">
        {{-- Título dinâmico: Muda se for Edição ou Cadastro --}}
        <h1 class="text-5xl chilanka">
            {{ isset($produto) ? 'Editar produto' : 'Cadastrar produto' }}
        </h1>
        <h2 class="">Insira as informações abaixo</h2>
    </div>

    {{-- Campo NOME --}}
    <div class="mt-3">
        <label class="text-marrom-escuro">Nome</label>
        <input type="text" name="nome" value="{{ old('nome', $produto->nome ?? '') }}" required placeholder="..."
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    {{-- Campo DESCRIÇÃO --}}
    <div class="mt-5">
        <label class="text-marrom-escuro">Descrição</label>
        <input type="text" name="descricao" value="{{ old('descricao', $produto->descricao ?? '') }}" required
            placeholder="..."
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    {{-- Campo VALOR --}}
    <div class="mt-5">
        <label class="text-marrom-escuro">Valor</label>
        <input type="number" step="0.01" name="valor" value="{{ old('valor', $produto->valor ?? '') }}" required
            placeholder="$..."
            class=" w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
    </div>

    {{-- Campo CATEGORIA --}}
    <div class="mt-5">
        <label class="text-marrom-escuro">Categoria</label>
        <select name="categoria" required
            class="w-full py-1 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">

            <option value="" disabled {{ old('categoria', $produto->categoria ?? '') ? '' : 'selected' }}>Selecione...
            </option>

            {{-- Lógica para manter selecionado na edição --}}
            <option value="banho" {{ old('categoria', $produto->categoria ?? '') == 'banho' ? 'selected' : '' }}>Banho
            </option>
            <option value="tosa" {{ old('categoria', $produto->categoria ?? '') == 'tosa' ? 'selected' : '' }}>Tosa
            </option>
            <option value="alimento" {{ old('categoria', $produto->categoria ?? '') == 'alimento' ? 'selected' : '' }}>
                Alimento</option>
            <option value="acessorio" {{ old('categoria', $produto->categoria ?? '') == 'acessorio' ? 'selected' : '' }}>
                Acessório</option>
            <option value="saude" {{ old('categoria', $produto->categoria ?? '') == 'saude' ? 'selected' : '' }}>Saúde
            </option>
            <option value="brinde" {{ old('categoria', $produto->categoria ?? '') == 'brinde' ? 'selected' : '' }}>
                Brinde</option>
            <option value="outro" {{ old('categoria', $produto->categoria ?? '') == 'outro' ? 'selected' : '' }}>Outro
            </option>
        </select>
    </div>

    {{-- Campo TAMANHO --}}
    <div class="mt-5">
        <label class="text-marrom-escuro">Tamanho</label>
        <select name="tamanho" required
            class="w-full py-1 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">

            <option value="" disabled {{ old('tamanho', $produto->tamanho ?? '') ? '' : 'selected' }}>Selecione...
            </option>

            <option value="P" {{ old('tamanho', $produto->tamanho ?? '') == 'P' ? 'selected' : '' }}>P</option>
            <option value="M" {{ old('tamanho', $produto->tamanho ?? '') == 'M' ? 'selected' : '' }}>M</option>
            <option value="G" {{ old('tamanho', $produto->tamanho ?? '') == 'G' ? 'selected' : '' }}>G</option>
            <option value="Unico" {{ old('tamanho', $produto->tamanho ?? '') == 'Unico' ? 'selected' : '' }}>Único
            </option>
        </select>
    </div>

    {{-- Botão de SUBMIT --}}
    <div class="flex justify-end w-full">
        <button type="submit"
            class="mt-5 bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro">
            {{ isset($produto) ? 'Salvar alterações' : 'Cadastrar produto' }}
        </button>
    </div>
</div>

