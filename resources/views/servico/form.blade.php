{{-- EStilização do formulário --}}
<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="200"
    class="w-[500px] bg-white px-12 py-5 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">

    <div class="text-center">
        <h1 class="text-5xl chilanka">Cadastrar serviço</h1>
        <h2 class="">Insira as informações abaixo</h2>
    </div>

    <div class="mt-3">
        <label class="text-marrom-escuro">Nome</label>
        <input type="text" name="" value="" required placeholder="..."
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    <div class="mt-5">
        <label class="text-marrom-escuro">Descrição</label>
        <input type="text" name="" value="" required placeholder="..."
            class="w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro">
    </div>

    <div class="mt-5">
        <label class="text-marrom-escuro">Valor</label>
        <input type="number" name="" value="" required placeholder="$..."
            class=" w-full h-8 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
    </div>

    <div class="mt-5">
        <label class="text-marrom-escuro">Produtos utilizados</label>
        <select id="select-categorias" name="categorias[]" multiple placeholder="Selecione os produtos..."
            class="w-full bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro focus:ring-1 focus:ring-marrom-escuro">

            <option value="1">1</option>
            <option value="2">2</option>
        </select>
    </div>

    {{-- Cadastrar produto --}}
    <div class="flex justify-end w-full">
        <button type="submit"
            class="mt-5 bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro">Cadastrar
            serviço</button>
    </div>
</div>
