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

    public function store(Request $request)
    {
         Produto::Create([
            'nome' => 'required',
            'descricao' => 'nullable',
            'preco' => 'required|numeric',
            'estoque' => 'required',
            'tipo' => 'required',
        ]);

        try {
            $produto = new Produto;
            $produto->nome = $request->nome;
            $produto->descricao = $request->descricao;
            $produto->preco = $request->preco;
            $produto->estoque = $request->estoque;
            $produto->tipo = $request->tipo;
            $produto->save();


            $data = [];

            $data = [
                'erro' => 'n',
                'msg' => 'Produto cadastrado com sucesso!'
            ];

            return response()->json($data, 200);
        } catch (\throwable $th) {
            throw $th;
            $data = [];

            $data = [
                'erro' => 's',
                'msg' => 'Erro ao cadastrar produto: ' . $th->getMessage()
            ];

            return response()->json($data, 200);
        }
    }


    public function lista_produto(request $request){

        $produtos = Produto::all();

        return view('lista_produto') ->with('produtos', $produtos);
    }
}
