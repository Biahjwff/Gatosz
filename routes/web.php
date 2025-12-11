<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginClienteController;

//Rota da página principal
Route::get('/', function () {
    return view('landingPage.index');
});


//Rotas do cliente
Route::get('/clientes/login', [LoginClienteController::class, 'showLoginForm'])->name('clientes.login');
Route::post('/clientes/login', [LoginClienteController::class, 'login'])->name('login.cliente.submit');
Route::post('/clientes/logout', [LoginClienteController::class, 'logout'])->name('logout.cliente');
Route::resource('clientes', ClienteController::class);


//Rotas do administrador
Route::get('/administrador', function () {
    return view('administrador.index');
})->name("administrador.index");

Route::get('/produto', function () {
    return view('produto.create');
})->name('produto.create');

Route::get('/servico', function () {
    return view('servico.create');
})->name('servico.sim');

//Rotas do breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
