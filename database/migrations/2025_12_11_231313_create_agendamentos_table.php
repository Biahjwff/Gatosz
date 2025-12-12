<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            
            // Relacionamentos
            // Quem agendou? (Cliente logado)
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            // Qual serviço?
            $table->foreignId('servico_id')->constrained('servicos')->onDelete('cascade');

            // Dados do Agendamento
            $table->dateTime('data_hora');
            $table->string('nome_gato');
            $table->string('raca_gato');
            $table->string('porte'); // Pequeno, Médio, Grande
            $table->text('alergias')->nullable(); // Nullable pois pode não ter
            
            // Controle do Admin (Pendente, Aceito, Recusado)
            $table->string('situacao')->default('pendente');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};