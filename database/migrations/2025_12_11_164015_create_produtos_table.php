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
    Schema::create('produtos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');       // Mudamos de 'name' para 'nome'
        $table->text('descricao');    // Mudamos de 'description' para 'descricao'
        $table->decimal('valor', 10, 2); // Mudamos de 'price' para 'valor'
        $table->string('categoria');
        $table->string('tamanho');    // Mudamos de 'size' para 'tamanho'
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
