<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_token extends Model
{
    protected $table = 'user_token';

    protected $fillable = [
        'usuario_id',
        'token',
        'valido_ate',
    ];
}
