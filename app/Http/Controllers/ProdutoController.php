<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Exibe a lista de todos os produtos.
     */
    public function index()
    {
        // Busca todos os produtos, ordenados do mais novo para o mais antigo
        $produtos = Produto::latest()->get();

        // Retorna a view 'index' passando a variável $produtos
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Mostra o formulário para criar um novo produto.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Salva o novo produto no banco de dados.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'valor' => 'required|numeric|min:0',
            'categoria' => 'required|string',
            'tamanho' => 'required|string',
        ]);

        Produto::create($validated);

        return redirect()->route('estoque.index')
            ->with('success', 'Produto cadastrado com sucesso!');
    }

    /**
     * Mostra o formulário para editar um produto existente.
     */
    public function edit(Produto $produto)
    {
        // Retorna a view de edição passando os dados do produto atual
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Atualiza o produto no banco de dados.
     */
    public function update(Request $request, Produto $produto)
    {
        // 1. Validação (mesmas regras do create)
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'valor' => 'required|numeric|min:0',
            'categoria' => 'required|string',
            'tamanho' => 'required|string',
        ]);

        // 2. Atualização
        $produto->update($validated);

        // 3. Redirecionamento
        return redirect()->route('estoque.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove o produto do banco de dados.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('estoque.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}
