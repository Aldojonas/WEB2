<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $tabela = "clientes";

    protected $fillable =[
        'nome',
        'endereco',
        'debito'
    ];

    /*function endereco(){
        return $this->hasMany(Endereco::class, 'cliente_id', 'id']);
    }*/
}
