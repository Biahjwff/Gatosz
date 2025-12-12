<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller
{
    // --- ÁREA DO ADMINISTRADOR ---

    /**
     * Lista todos os agendamentos para o Admin analisar
     */
    public function index()
    {
        // Traz agendamentos com dados do cliente e serviço, ordenado pela data
        $agendamentos = Agendamento::with(['cliente', 'servico'])
            ->orderBy('data_hora', 'asc')
            ->get();

        return view('agendamentos.adm', compact('agendamentos'));
    }

    /**
     * Admin aceita ou recusa o agendamento
     */
    public function updateStatus(Request $request, Agendamento $agendamento)
    {
        $request->validate([
            'situacao' => 'required|in:pendente,aceito,recusado'
        ]);

        $agendamento->update([
            'situacao' => $request->situacao
        ]);

        return redirect()->back()->with('success');
    }


    // --- ÁREA DO CLIENTE ---

    /**
     * Mostra o formulário para o cliente agendar
     */
    public function create()
    {
        // Precisamos listar os serviços para o cliente escolher no select
        $servicos = Servico::all();
        return view('agendamentos.create', compact('servicos'));
    }

    /**
     * Salva o agendamento do cliente
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'servico_id' => 'required|exists:servicos,id',
            'data_hora'  => 'required|date|after:now', // Data futura
            'nome_gato'  => 'required|string|max:255',
            'raca_gato'  => 'required|string|max:255',
            'porte'      => 'required|string|in:pequeno,medio,grande',
            'alergias'   => 'nullable|string',
        ]);

        // Pega o ID do cliente logado no guard 'cliente'
        $clienteId = Auth::guard('cliente')->id();

        Agendamento::create([
            'cliente_id' => $clienteId,
            'servico_id' => $validated['servico_id'],
            'data_hora'  => $validated['data_hora'],
            'nome_gato'  => $validated['nome_gato'],
            'raca_gato'  => $validated['raca_gato'],
            'porte'      => $validated['porte'],
            'alergias'   => $validated['alergias'],
            'situacao'   => 'pendente', // Padrão
        ]);

        // Redireciona para o dashboard do cliente ou página de sucesso
        return redirect()->route('agendamentos.meus')
            ->with('success', 'Solicitação de agendamento enviada com sucesso! Aguarde aprovação.');
    }

    public function meusAgendamentos()
    {
        // 1. Pega o ID do cliente logado
        $clienteId = Auth::guard('cliente')->id();

        // 2. Busca no banco APENAS onde cliente_id é igual ao ID logado
        $agendamentos = Agendamento::with('servico')
            ->where('cliente_id', $clienteId)
            ->orderBy('data_hora', 'desc')
            ->get();

        // 3. Retorna a view específica do cliente
        return view('agendamentos.index', compact('agendamentos'));
    }
}
