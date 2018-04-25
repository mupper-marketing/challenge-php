<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Veterinario;
use Alert;

class VeterinariosController extends Controller
{

  public function index()
  {
    $registros = Veterinario::all();
    return view('veterinarios.index', compact('registros'));
  }

  public function adicionar()
  {
    return view('veterinarios.adicionar');
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();
    Veterinario::create($dados);
    Alert::success('Sucesso', 'Veterinário Cadastrado');
    return redirect()->route('veterinarios');
  }

  public function editar($id)
  {
    $registro = Veterinario::find($id);
    return view('veterinarios.editar',compact('registro'));
  }

  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();
    Veterinario::find($id)->update($dados);
    Alert::success('Sucesso', 'Veterinário Atualizado');
    return redirect()->route('veterinarios');
  }

  public function deletar($id)
  {
    Veterinario::find($id)->delete();
    Alert::success('Sucesso', 'Veterinário Excluido');
    return redirect()->route('veterinarios');
  }

}
