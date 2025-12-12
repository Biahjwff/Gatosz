<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Caso o Laravel não detecte o plural automaticamente, force o nome da tabela:
    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'categoria',
        'tamanho',
    ];

    public function servicos()
    {
        return $this->belongsToMany(Servico::class, 'produto_servico');
    }
}
