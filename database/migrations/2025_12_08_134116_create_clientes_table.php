<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('email')->unique(); // É boa prática ser único
        $table->string('cpf', 14)->unique(); // String para manter zeros e formatação
        $table->string('telefone', 20); // String para (XX) XXXXX-XXXX
        $table->string('endereco');
        $table->string('senha');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
