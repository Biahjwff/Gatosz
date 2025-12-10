<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // A senha não virá neste JSON por causa do atributo $hidden no Model
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

   public function store(Request $request)
    {
        $request->validate([
            'nome'     => 'required|string|max:255',
            'email'    => 'required|email|unique:clientes,email',
            'cpf'      => 'required|string|unique:clientes,cpf',
            'telefone' => 'required|string',
            'endereco' => 'required|string',
            'senha'    => 'required|string|min:8',
        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome'     => 'required|string|max:255',
            'email'    => 'required|email|unique:clientes,email,' . $cliente->id,
            'cpf'      => 'required|string',
            'telefone' => 'required|string',
            'endereco' => 'required|string',
            'senha'    => 'nullable|string|min:8', // Senha é opcional na edição
        ]);

        // Lógica inteligente para atualização
        $dados = $request->except('senha'); // Pega tudo MENOS a senha

        // Se o usuário preencheu a senha, adicionamos ela ao array de dados
        if ($request->filled('senha')) {
            $dados['senha'] = $request->senha;
        }

        $cliente->update($dados);

        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente atualizado!');
    }

    // Os métodos show, destroy e edit permanecem iguais ao anterior
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Removido!');
    }

    public function create()
    {
        // Isso carrega o arquivo resources/views/clientes/create.blade.php
        return view('clientes.create');
    }
}
