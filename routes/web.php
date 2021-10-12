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

//para interpolar variáveis com string basta usar aspas duplas
//para tornar parâmetros opcionais, basta inserir ? ao final do nome do parâmetro, e atribuir um valor à variável na função de callback
//Obs: existe uma limitação que não permite que se torne apenas alguns parâmetros opcionais, pois o framework se perde ao sequenciar os
//parametros, uma oção é tornar os parâmetros opcionais da direta para esquerda, e passar os parâmetros em ordem, da esqueda pra direita
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
        function(string $nome = 'Desconhecido',
        string $categoria = 'Informação',
        string $assunto = 'Contato',
        string $mensagem = 'Mensagem não Informada' 
        ){

    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});