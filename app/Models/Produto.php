<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'estoque',
        'tipo',
    ];
}
