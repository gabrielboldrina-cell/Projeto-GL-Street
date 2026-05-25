<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

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

}