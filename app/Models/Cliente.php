<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Cliente extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome', 'email', 'cpf', 'telefone', 'endereco', 'senha'
    ];

    protected $hidden = ['senha'];

    protected $casts = [
        'senha' => 'hashed',
    ];

    // 3. Método obrigatório para dizer ao Laravel que a senha está na coluna "senha"
    public function getAuthPassword()
    {
        return $this->senha;
    }
}
