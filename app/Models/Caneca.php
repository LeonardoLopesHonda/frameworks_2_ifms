<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caneca extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem',
        'capacidade_ml',
    ];
}
