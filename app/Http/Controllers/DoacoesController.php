<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Animal;
use App\Doacao;
use Alert;


class DoacoesController extends Controller
{
  public function index()
  {
    $registros = Doacao::all();
    return view('doacoes.index', compact('registros'));
  }

  public function adicionar()
  {
    $dados = Animal::all();
    return view('doacoes.adicionar', compact('dados'));
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();
    Doacao::create($dados);
    Alert::success('Sucesso', 'Doação Cadastrada');
    return redirect()->route('doacoes');
  }

  public function editar($id)
  {
    $registro = Doacao::find($id);
    $dados = Animal::all();  
    return view('doacoes.editar',compact('registro', 'dados'));
  }

  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();
    Doacao::find($id)->update($dados);
    Alert::success('Sucesso', 'Doação Atualizada');
    return redirect()->route('doacoes');
  }

  public function deletar($id)
  {
    Doacao::find($id)->delete();
    Alert::success('Sucesso', 'Doação Excluida');
    return redirect()->route('doacoes');
  }
}
