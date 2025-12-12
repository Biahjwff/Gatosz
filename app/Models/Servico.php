<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'valor'];

    // Relacionamento N:N com Produtos
    public function produtos()
    {
        // O segundo parâmetro 'produto_servico' é o nome da tabela pivô
        return $this->belongsToMany(Produto::class, 'produto_servico');
    }
}
