<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return 'Olá seja bem vindo';
});*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

/*Usa-se as regex (expressões regulares) para controlar o que pode ser passado como parâmetro no caso, o parâmetro categoria_id
só pode receber algarismos de 0 a 9 e o + indica que deve haver pelo menos um valor, o parâmetro nome só recebe letras de A a Z maiusculo ou minusculo, pelo menos uma letra
caso as condições não sejam atendidas a rota não será chamada, isso evita erros*/ 
Route::get('/contato/{nome}/{categoria_id}',
        function(
            string $nome = 'Desconhecido',
            int $categoria_id = 1
        ) {
            echo "Estamos aqui: $nome - $categoria_id";
       }   
    )->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');