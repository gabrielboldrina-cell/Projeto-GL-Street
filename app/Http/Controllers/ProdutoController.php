<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
  public function index(Request $request)
  {
    return view('produto');
  }

  public function cadrastro_produto(Request $request)
  {
    return view('cadastro_produto');
  }




  
  public function vizualizar_produto($id)
  {

    $produto = Produto::findorFail($id);
    return view('vizualizar_produto')->with('produto', $produto);
  }

  public function alterar_produto(Request $request)
  {
    $request->validate([
      'nome_produto' => 'required',
      'descricao_produto' => 'nullable',
      'preco_produto' => 'required|numeric',
      'quantidade_produto' => 'required',
      'tipo_produto' => 'required',
      'produto_id' => 'required',
    ]);


    try {
      $produto = Produto::where('id', $request->produto_id)->first();
      if ($produto) {
        $produto->nome = $request->nome_produto;
        $produto->descricao = $request->descricao_produto;
        $produto->preco = $request->preco_produto;
        $produto->estoque = $request->quantidade_produto;
        $produto->tipo = $request->tipo_produto;
        $produto->save();


        $data = [];

        $data = [
          'erro' => 'n',
          'msg' => 'Produto alterado com sucesso!'
        ];
      }else{
        $data = [];

        $data = [
          'erro' => 's',
          'msg' => 'Produto não encontrado!'
        ];
      }
      return response()->json($data, 200);
    } catch (\throwable $th) {
      throw $th;
      $data = [];

      $data = [
        'erro' => 's',
        'msg' => 'Erro ao alterar produto: ' . $th->getMessage()
      ];

      return response()->json($data, 200);
    }
  }

  public function deletar_produto(Request $resquest)
  {
    $resquest->validate([
      'produto_id' => 'required|integer',
    ]);

    try {
    $produto = Produto::where('id', $resquest->produto_id)->first();

    if ($produto) {
      $produto->delete();

      $data = [];
      $data = [
        'erro' => 'n',
        'msg' => 'Produto deletado com sucesso!'
      ];
    } else {
      $data = [];
      $data = [
        'erro' => 's',
        'msg' => 'Produto não encontrado!'
      ];
    }
    return response()->json($data, 200);
    }catch(\throwable $th){
      throw $th;
      $data = [];
      $data = [
        'erro' => 's',
        'msg' => 'Erro ao deletar produto: ' . $th->getMessage()
      ];

    }
    }
   

}
