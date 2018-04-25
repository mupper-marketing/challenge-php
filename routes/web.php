<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index')->name('home');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login/entrar', 'LoginController@entrar')->name('login.entrar');
Route::get('/login/sair', 'LoginController@sair')->name('login.sair');

Route::group(['middleware'=>'auth'],function(){

  Route::get('/animais', 'AnimaisController@index')->name('animais');
  Route::get('/animais/adicionar', 'AnimaisController@adicionar')->name('animais.adicionar');
  Route::post('/animais/salvar', 'AnimaisController@salvar')->name('animais.salvar');
  Route::get('/animais/editar/{id}', 'AnimaisController@editar')->name('animais.editar');
  Route::put('/animais/atualizar/{id}', 'AnimaisController@atualizar')->name('animais.atualizar');
  Route::get('/animais/deletar/{id}', 'AnimaisController@deletar')->name('animais.deletar');
  Route::get('/animais/historico/adicionar/{id}', 'AnimaisController@historico')->name('animais.historico.adicionar');
  Route::post('/animais/historico/salvar', 'AnimaisController@historicosalvar')->name('animais.historico.salvar');

  Route::get('/doacoes', 'DoacoesController@index')->name('doacoes');
  Route::get('/doacoes/adicionar', 'DoacoesController@adicionar')->name('doacoes.adicionar');
  Route::post('/doacoes/salvar', 'DoacoesController@salvar')->name('doacoes.salvar');
  Route::get('/doacoes/editar/{id}', 'DoacoesController@editar')->name('doacoes.editar');
  Route::put('/doacoes/atualizar/{id}', 'DoacoesController@atualizar')->name('doacoes.atualizar');
  Route::get('/doacoes/deletar/{id}', 'DoacoesController@deletar')->name('doacoes.deletar');

  Route::get('/veterinarios', 'VeterinariosController@index')->name('veterinarios');
  Route::get('/veterinarios/adicionar', 'VeterinariosController@adicionar')->name('veterinarios.adicionar');
  Route::post('/veterinarios/salvar', 'VeterinariosController@salvar')->name('veterinarios.salvar');
  Route::get('/veterinarios/editar/{id}', 'VeterinariosController@editar')->name('veterinarios.editar');
  Route::put('/veterinarios/atualizar/{id}', 'VeterinariosController@atualizar')->name('veterinarios.atualizar');
  Route::get('/veterinarios/deletar/{id}', 'VeterinariosController@deletar')->name('veterinarios.deletar');

  Route::get('/usuario', 'LoginController@usuario')->name('usuario');
  Route::get('/usuario/adicionar', 'LoginController@usuarioadicionar')->name('usuario.adicionar');
  Route::post('/usuario/salvar', 'LoginController@usuariosalvar')->name('usuario.salvar');
  Route::get('/usuario/editar/{id}', 'LoginController@usuarioeditar')->name('usuario.editar');
  Route::put('/usuario/atualizar/{id}', 'LoginController@usuarioatualizar')->name('usuario.atualizar');
  Route::get('/usuario/deletar/{id}', 'LoginController@usuariodeletar')->name('usuario.deletar');
});
