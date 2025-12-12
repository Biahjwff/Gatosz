<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\Produto;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        // Carrega serviços JÁ trazendo os produtos relacionados (Eager Loading)
        $servicos = Servico::with('produtos')->latest()->get();
        return view('servicos.index', compact('servicos'));
    }

    public function create()
    {
        // Manda todos os produtos para a view (para o usuário selecionar)
        $produtos = Produto::all();
        return view('servicos.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'valor' => 'required|numeric|min:0',
            // Valida se enviou uma lista de produtos e se eles existem no banco
            'produtos' => 'nullable|array',
            'produtos.*' => 'exists:produtos,id',
        ]);

        // 1. Cria o Serviço
        $servico = Servico::create([
            'nome' => $validated['nome'],
            'descricao' => $validated['descricao'],
            'valor' => $validated['valor'],
        ]);

        // 2. Vincula os produtos selecionados (se houver)
        if (!empty($request->produtos)) {
            $servico->produtos()->attach($request->produtos);
        }

        return redirect()->route('servicos.index')
            ->with('success', 'Serviço cadastrado com sucesso!');
    }

    public function edit(Servico $servico)
    {
        $produtos = Produto::all();
        // Carrega os produtos que esse serviço já tem vinculados
        $servico->load('produtos');

        return view('servicos.edit', compact('servico', 'produtos'));
    }

    public function update(Request $request, Servico $servico)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'valor' => 'required|numeric|min:0',
            'produtos' => 'nullable|array',
            'produtos.*' => 'exists:produtos,id',
        ]);

        // 1. Atualiza dados do serviço
        $servico->update([
            'nome' => $validated['nome'],
            'descricao' => $validated['descricao'],
            'valor' => $validated['valor'],
        ]);

        // 2. Sincroniza a tabela pivô (remove antigos, adiciona novos)
        // Se o array vier vazio (null), o sync([]) remove todos os vínculos.
        $servico->produtos()->sync($request->produtos ?? []);

        return redirect()->route('servicos.index')
            ->with('success', 'Serviço atualizado com sucesso!');
    }

    public function destroy(Servico $servico)
    {
        // O 'cascade' na migration garante que as linhas na tabela pivô sumam sozinhas
        $servico->delete();

        return redirect()->route('servicos.index')
            ->with('success', 'Serviço excluído com sucesso!');
    }
}
