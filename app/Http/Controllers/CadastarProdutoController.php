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
         $request->validate([
            'nome_produto' => 'required|string',
            'descricao_produto' => 'nullable|string',
            'preco_produto' => 'required|numeric',
            'quantidade_produto' => 'required|integer',
            'data_validade' => 'nullable|date',
            'tipo_produto' => 'required|string',
        ]);

        try {
            $produto = new Produto;
            $produto->nome = $request->nome_produto;
            $produto->descricao = $request->descricao_produto;
            $produto->preco = $request->preco_produto;
            $produto->estoque = $request->quantidade_produto;
            $produto->data_validade = $request->data_validade;
            $produto->tipo = $request->tipo_produto;
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
