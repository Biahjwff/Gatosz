{{-- EStilização do formulário --}}
<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="200"
    class="bg-white px-12 py-5 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">
    <form action="{{ route('login.cliente.submit') }}" method="POST">
        @csrf

        <div class="text-center">
            <h1 class="text-5xl chilanka">Cadastrar produto</h1>
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
            <label class="text-marrom-escuro">Categoria</label>
            <select name="" id="" required placeholder="Selecione uma categoria"
                class="w-full py-1 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro ">
            
            <option value="" selected disabled>Selecione...</option>
            <option value="">Opção</option>
            </select>
        </div>

         <div class="mt-5">
            <label class="text-marrom-escuro">tamanho</label>
            <select name="" id="" required placeholder="Selecione uma categoria"
                class="w-full py-1 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro transition duration-400 focus:ring-1 focus:ring-marrom-escuro ">
            
            <option value="" selected disabled>Selecione...</option>
            <option value="">Opção</option>
            </select>
        </div>

        {{-- Cadastrar produto --}}
        <div class="flex justify-end w-full">
            <button type="submit"
            class="mt-5 bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro">Cadastrar
            produto</button>
        </div>
    </form>
</div>
