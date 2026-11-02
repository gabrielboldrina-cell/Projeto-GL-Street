<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CadastarProdutoController extends Controller
{
    public function salvar_produto(Request $request)
    {
        return view('cadastro_produto');
    }

    

}

