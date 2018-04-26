<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Alert;



class LoginController extends Controller
{
  public function index()
  {
    return view('login.index');
  }

  public function entrar(Request $req)
  {
    $dados = $req->all();
    if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
      return redirect()->route('home');
    }
    Alert::error('ERRO', 'Email ou Senha Incorretos');
    return redirect()->route('login');
  }

  public function sair()
  {
    Auth::logout();
    return redirect()->route('home');
  }

  public function usuario()
  {
    $registros = User::all();
    return view('usuario.index', compact('registros'));
  }

  public function usuarioadicionar()
  {
    return view('usuario.adicionar');
  }

  public function usuariosalvar(Request $req)
  {
    $dados = $req->all();
    $dados['password'] = bcrypt($dados['password']);

    if(User::where('email', '=', $dados['email'])->count()){
      $usuario = User::where('email', '=', $dados['email'])->first();
      Alert::error('ERRO', 'Email Já Cadastrado');
      return redirect()->route('usuario');
    }else {
      User::create($dados);
      Alert::success('Sucesso', 'Usuário Cadastrado');
      return redirect()->route('usuario');
    }
  }

  public function usuarioeditar($id)
  {
    $registro = User::find($id);

    return view('usuario.editar',compact('registro'));
  }

  public function usuarioatualizar(Request $req, $id)
  {
    $dados = $req->all();
    $dados['password'] = bcrypt($dados['password']);
    User::find($id)->update($dados);
    Alert::success('Sucesso', 'Usuário Atualizado');
    return redirect()->route('usuario');   

  }

  public function usuariodeletar($id)
  {
    User::find($id)->delete();
    Alert::success('Sucesso', 'Usuário Excluido');
    return redirect()->route('usuario');
  }


}
