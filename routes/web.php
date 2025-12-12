<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;

//Rota da página principal
Route::get('/', function () {
    return view('landingPage.index');
});


//Rotas do cliente
Route::get('/clientes/login', [LoginClienteController::class, 'showLoginForm'])->name('clientes.login');
Route::post('/clientes/login', [LoginClienteController::class, 'login'])->name('login.cliente.submit');
Route::post('/clientes/logout', [LoginClienteController::class, 'logout'])->name('logout.cliente');
Route::resource('clientes', ClienteController::class);

Route::get('agendamento', function () {
    return view('agendamento.create');
})->name("agendamento.create");

Route::get('agendamento.show', function () {
    return view('agendamento.show');
})->name("agendamento.show");


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

});


Route::get('agendamento.index', function () {
    return view('agendamento.index');
})->name('agendamento.index');


require __DIR__.'/auth.php';
