<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="200"
    class="bg-white px-12 py-5 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro w-[500px]">

    <div class="text-center">
        <h1 class="text-5xl chilanka">Solicitar agendamento</h1>
        <h2 class="">Insira as informações abaixo</h2>
    </div>

    {{-- Seleção de Serviço --}}
    <div class="mt-3">
        <label class="text-marrom-escuro font-bold">Qual serviço você deseja?</label>
        <select name="servico_id" required id="servico_select" onchange="atualizarPreco()"
            class="w-full py-1 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">

            <option value="" disabled selected>Selecione o serviço...</option>
            @foreach($servicos as $servico)
                {{-- O data-price guarda o preço para o JS ler --}}
                <option value="{{ $servico->id }}" data-price="{{ $servico->valor }}">
                    {{ $servico->nome }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Data e Hora --}}
    <div class="mt-3">
        <label class="text-marrom-escuro font-bold">Qual seria a data e horário?</label>
        <input type="datetime-local" name="data_hora" required
            class="w-full py-1 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg text-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    {{-- Nome do Gato --}}
    <div class="mt-5">
        <label class="text-marrom-escuro font-bold">Qual o nome do seu gato?</label>
        <input type="text" name="nome_gato" required placeholder="..."
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    {{-- Raça --}}
    <div class="mt-5">
        <label class="text-marrom-escuro font-bold">Qual a raça do seu gato?</label>
        <input type="text" name="raca_gato" required placeholder="Ex: Siamês, Persa, SRD..."
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    {{-- Porte --}}
    <div class="mt-5">
        <label class="text-marrom-escuro font-bold">Qual o porte do seu gato?</label>
        <select name="porte" required
            class="w-full py-1 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
            <option value="" selected disabled>Selecione...</option>
            <option value="pequeno">Pequeno</option>
            <option value="medio">Médio</option>
            <option value="grande">Grande</option>
        </select>
    </div>

    {{-- Alergias --}}
    <div class="mt-5">
        <label class="text-marrom-escuro font-bold">Seu gato possui alergias?</label>
        <input type="text" name="alergias" placeholder="Se não, deixe em branco"
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    {{-- Exibição do Valor (Atualizado via JS) --}}
    <div class="mt-5 flex justify-between w-full items-center border-t border-dashed border-marrom-escuro pt-2">
        <label class="text-marrom-escuro text-xl">Valor estimado: </label>
        <span id="valor_display" class="text-rosa-escuro font-bold text-2xl">R$ 0,00</span>
    </div>

    {{-- Botão Submit --}}
    <div class="flex justify-end w-full">
        <button type="submit"
            class="mt-5 bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro">
            Solicitar agendamento
        </button>
    </div>
</div>

<script>
    function atualizarPreco() {
        var select = document.getElementById('servico_select');
        var option = select.options[select.selectedIndex];
        var price = option.getAttribute('data-price');

        if (price) {
            // Formata para moeda brasileira
            var formatted = parseFloat(price).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
            document.getElementById('valor_display').innerText = formatted;
        }
    }
</script>
