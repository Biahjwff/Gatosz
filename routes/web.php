<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\AgendamentoController;

//Rota da página principal
Route::get('/', function () {
    return view('landingPage.index');
});


//Rotas do cliente
Route::get('/clientes/login', [LoginClienteController::class, 'showLoginForm'])->name('clientes.login');
Route::post('/clientes/login', [LoginClienteController::class, 'login'])->name('login.cliente.submit');
Route::post('/clientes/logout', [LoginClienteController::class, 'logout'])->name('logout.cliente');
Route::resource('clientes', ClienteController::class);

Route::middleware(['auth:cliente'])->group(function () {
Route::get('/agendamento', [AgendamentoController::class, 'create'])->name('agendamentos.create');
Route::post('/agendamento', [AgendamentoController::class, 'store'])->name('agendamentos.store');
Route::get('/agendamentos', [AgendamentoController::class, 'meusAgendamentos'])->name('agendamentos.meus');
});


Route::middleware(['auth', 'verified'])->group(function () {

    // 1. Dashboard Principal
    Route::get('/administrador', function () {
        return view('administrador.index');
    })->name('administrador.index');

    // 2. Rotas de Produtos / Estoque
    Route::get('/estoque', [ProdutoController::class, 'index'])->name('estoque.index');
    Route::get('/produto/criar', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/produto', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('/produto/{produto}/editar', [ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('/produto/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('/produto/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');

    Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
    Route::get('/servicos/criar', [ServicoController::class, 'create'])->name('servicos.create');
    Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
    Route::get('/servicos/{servico}/editar', [ServicoController::class, 'edit'])->name('servicos.edit');
    Route::put('/servicos/{servico}', [ServicoController::class, 'update'])->name('servicos.update');
    Route::delete('/servicos/{servico}', [ServicoController::class, 'destroy'])->name('servicos.destroy');

    Route::get('/agendamentosClientes', [AgendamentoController::class, 'index'])->name('agendamentos.adm');
    Route::patch('/agendamentosClientes/{agendamento}/status', [AgendamentoController::class, 'updateStatus'])->name('agendamentos.updateStatus');
});


require __DIR__.'/auth.php';
