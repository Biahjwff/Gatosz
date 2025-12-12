<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginClienteController extends Controller
{
    // Mostrar o formulário de login
    public function showLoginForm()
    {
        return view('clientes.login');
    }

    // Processar o login
    public function login(Request $request)
    {
        // 1. Validar os dados
        $credentials = $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);



        // 2. Tentar logar usando o guard 'cliente'
        // O Auth::attempt espera um array. A chave da senha DEVE ser 'password' aqui no array,
        // mesmo que no banco seja 'senha' (o Model resolve isso).
        if (Auth::guard('cliente')->attempt([
            'email'    => $credentials['email'],
            'password' => $credentials['senha'],
        ])) {

            // Sucesso: Regenera a sessão para segurança
            $request->session()->regenerate();

           return redirect()->route('clientes.index');
        }

        // Falha: Volta com erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas (Email ou Senha) estão incorretas.',
        ])->onlyInput('email');
    }

    // public function show($id)
    // {
    //     // Por enquanto não faz nada ou busca o cliente
    //     $cliente = Cliente::find($id);
    //     return "Visualizando cliente: " . $id;
    //     // ou return view('clientes.show', compact('cliente'));
    // }

    // Fazer Logout
    public function logout(Request $request)
    {
        Auth::guard('cliente')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('clientes.login');
    }
}
