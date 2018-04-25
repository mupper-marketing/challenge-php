<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Animal;
use App\Veterinario;
use App\Historico;
use Illuminate\Support\Facades\DB;
use Alert;

class AnimaisController extends Controller
{
    public function index()
    {
      $registros = Animal::all();
      return view('animais.index', compact('registros'));
    }

    public function adicionar()
    {
      return view('animais.adicionar');
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();

      //Tratamento para salvar a imagem no sistema
      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "imagens/animais/";
        $ex = $imagem->guessClientExtension();
        if(($ex != "jpeg") && ($ex != "png")){
          Alert::error('Atenção', 'Imagem Não Permitida');
          return redirect()->route('animais');
        }
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }

        Animal::create($dados);
        Alert::success('Sucesso', 'Animal Cadastrado');
        return redirect()->route('animais');
      }

      public function editar($id)
      {
        $registro = Animal::find($id);
        //Filtra registros de cada animal
        $historicos = DB::table('historicos')->where('id_animal', '=',  $id)->get();
        return view('animais.editar',compact('registro', 'historicos'));
      }

      public function atualizar(Request $req, $id)
      {
        $dados = $req->all();

        if($req->hasFile('imagem')){
          $imagem = $req->file('imagem');
          $num = rand(1111,9999);
          $dir = "img/cursos/";
          $ex = $imagem->guessClientExtension();
          $nomeImagem = "imagem_".$num.".".$ex;
          $imagem->move($dir,$nomeImagem);
          $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Animal::find($id)->update($dados);
        Alert::success('Sucesso', 'Animal Atualizado');
        return redirect()->route('animais');

      }

      public function deletar($id)
      {
        Animal::find($id)->delete();
        Alert::success('Sucesso', 'Animal Excluido');
        return redirect()->route('animais');
      }

      public function historico($id)
      {
        //Recuperaos dados do animal
        $animal = Animal::find($id);
        //Recupera os dados para o veterinario
        $veterinarios = Veterinario::all();
        return view('animais.historico.adicionar', compact('animal', 'veterinarios'));

      }

      public function historicosalvar(Request $req)
      {
        $dados = $req->all();
        Historico::create($dados);
        $id = $dados['id_animal'];
        Alert::success('Sucesso', 'Histórico Cadastrado');
        //Redireciona para a página do cachorro que foi editado
        return redirect()->route('animais.editar', ['id' => $id]);

      }
}
