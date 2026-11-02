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

  public function salvar_produto(Request $request)
  {
    $request->validate([
      'nome' => 'required',
      'descricao' => 'nullable',
      'preco' => 'required|numeric',
      'estoque' => 'required',
      'tipo' => 'required',
    ]);

    try {
      $produto = new Produto();
      $produto->nome = $request->nome;
      $produto->descricao = $request->descricao;
      $produto->preco = $request->preco;
      $produto->estoque = $request->estoque;
      $produto->tipo = $request->tipo;
      $produto->save();

      return response()->json(['message' => 'Produto cadastrado com sucesso!', 'erro' => 'n'], 200);
    } catch (\Throwable $th) {
      return response()->json(['message' => 'Erro ao cadastrar produto!', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
    }
  }

  public function alterar_produto(Request $request)
  {
    $request->validate([
      'produto_id' => 'required|integer',
      'nome' => 'required|string|max:255',
      'descricao' => 'nullable|string',
      'preco' => 'required|numeric',
      'estoque' => 'required|integer',
      'tipo' => 'required|string|max:255',
    ]);

    try {
      $produto = Produto::find($request->produto_id);

      if ($produto) {
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->estoque = $request->estoque;
        $produto->tipo = $request->tipo;
        $produto->save();

        return response()->json(['message' => 'Produto alterado com sucesso!', 'erro' => 'n'], 200);
      } else {
        return response()->json(['message' => 'Produto não encontrado!', 'erro' => 's'], 200);
      }
    } catch (\Throwable $th) {
      return response()->json(['message' => 'Erro ao alterar produto!', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
    }
  }
 

  public function deletar_produto(Request $request)
  {
    $request->validate([
      'produto_id' => 'required|integer',
    ]); 

    try { 
      $produto = Produto::find($request->produto_id);
      $produto->delete();
      return response()->json(['message' => 'Produto deletado com sucesso!', 'erro' => 'n'], 200);
    } catch (\Throwable $th) {
      return response()->json(['message' => 'Erro ao deletar produto!', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
    }
  }

  public function listar_produtos(Request $request)
  {
    $produtos = Produto::all();
    return response()->json(['produtos' => $produtos], 200);
  }

  public function listar_produtos_simples(Request $request)
  {
    $produtos = Produto::select('nome', 'preco')->get();
    return response()->json(['produtos' => $produtos], 200);
  }

  public function ver_produto(Request $request)
  {
    $request->validate([
      'produto_id' => 'required|integer',
    ]);

    $produto = Produto::find($request->produto_id);

    if ($produto) {
      return response()->json(['produto' => $produto, 'erro' => 'n'], 200);
    } else {
      return response()->json(['message' => 'Produto não encontrado!', 'erro' => 's'], 200);
    }
  }

    

}
