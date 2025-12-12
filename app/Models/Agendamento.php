<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'servico_id',
        'data_hora',
        'nome_gato',
        'raca_gato',
        'porte',
        'alergias',
        'situacao',
    ];

    // Transforma a string do banco em objeto Carbon (Data)
    protected $casts = [
        'data_hora' => 'datetime',
    ];

    // Agendamento pertence a um Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Agendamento pertence a um Serviço
    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }
}
