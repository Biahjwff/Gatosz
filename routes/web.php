<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginClienteController;
use App\Http\Controllers\ProdutoController;

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


//Rotas do administrador

Route::get('/estoque', [ProdutoController::class, 'index'])->name('estoque.index'); // Faltava essa
Route::get('/produto/criar', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produto', [ProdutoController::class, 'store'])->name('produtos.store'); // Era GET, virou POST
Route::get('/produto/{produto}/editar', [ProdutoController::class, 'edit'])->name('produtos.edit'); // Faltava
Route::put('/produto/{produto}', [ProdutoController::class, 'update'])->name('produtos.update'); // Faltava
Route::delete('/produto/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy'); // Faltava

Route::get('/servico', function () {
    return view('servico.create');
})->name('servico.create');

Route::get('agendamento.index', function () {
    return view('agendamento.index');
})->name('agendamento.index');


//Rotas do breeze
Route::get('/administrador', function () {
    return view('administrador.index');
})->middleware(['auth', 'verified'])->name('administrador.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
