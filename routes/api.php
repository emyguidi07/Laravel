<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//consulta com web service
Route::get('/contato','ContatoController@contatos');
Route::get('/contato/{id}','ContatoController@contatoById');
Route::get('/produto','ProdutoController@produtos');
Route::get('/produto/{id}','ProdutoController@produtoById');

//inserção com web service
Route::post('/contato','ContatoController@contatoSalvar');
Route::post('/contato','ContatoController@produtoSalvar');

