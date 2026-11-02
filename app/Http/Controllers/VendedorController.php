<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use Illuminate\Support\Facades\Hash;

class VendedorController extends Controller
{
    public function salvar_vendedor(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:vendedores,cpf',
            'data_nascimento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:vendedores,email',
            'tipo' => 'required|string|max:50',
            'senha' => 'required|string|min:6',
        ]);

        try {
            $vendedor = new Vendedor();
            $vendedor->nome = $request->nome;
            $vendedor->cpf = $request->cpf;
            $vendedor->data_nascimento = $request->data_nascimento;
            $vendedor->email = $request->email;
            $vendedor->tipo = $request->tipo;
            $vendedor->senha = Hash::make($request->senha);
            $vendedor->save();

            return response()->json(['message' => 'Vendedor cadastrado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar vendedor!', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_vendedor(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);
        $vendedor = Vendedor::find($request->id);
        if ($vendedor) {
            return response()->json(['vendedor' => $vendedor, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Vendedor não encontrado!', 'erro' => 's'], 200);
        }
    }

    public function listar_vendedores(Request $request)
    {
        $vendedores = Vendedor::all();
        return response()->json(['vendedores' => $vendedores], 200);
    }

    public function listar_vendedores_simples(Request $request)
    {
        $vendedores = Vendedor::select('nome', 'email')->get();
        return response()->json(['vendedores' => $vendedores], 200);
    }

    public function alterar_vendedor(Request $request)
    {
        $request->validate([
            'vendedor_id' => 'required|integer',
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:vendedores,cpf,' . $request->vendedor_id,
            'data_nascimento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:vendedores,email,' . $request->vendedor_id,
            'tipo' => 'required|string|max:50',
            'senha' => 'required|string|min:6',
        ]);

        try {
            $vendedor = Vendedor::find($request->vendedor_id);

            if($vendedor->email != $request->cpf){
                $venedor_email_igual = Vendedor::where('email', $request->email)->first();
                if($venedor_email_igual){
                    return response()->json(['message' => 'Email já cadastrado para outro vendedor!', 'erro' => 's'], 200);
                }
            
            }
            $vendedor->nome = $request->nome;
            $vendedor->cpf = $request->cpf;
            $vendedor->data_nascimento = $request->data_nascimento;
            $vendedor->email = $request->email;
            $vendedor->tipo = $request->tipo;
            $vendedor->senha = Hash::make($request->senha);
            $vendedor->save();

            return response()->json(['message' => 'Vendedor alterado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar vendedor!', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_vendedor(Request $request)
    {
        $request->validate([
            'vendedor_id' => 'required|integer',
        ]);

        try {
            $vendedor = Vendedor::find($request->vendedor_id);
            $vendedor->delete();
            return response()->json(['message' => 'Vendedor deletado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar vendedor!', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    
}
