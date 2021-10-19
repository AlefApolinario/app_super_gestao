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

//usar comando php artisan route:list para listar as rotas criadas
Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
Route::get('/login', function(){return'Login';});

//para agrupamento de rotas
Route:: prefix('/app')->group(function(){
    Route::get('/clientes', function(){return'Clientes';});
    Route::get('/fornecedores', function(){return'Fornecedores';});
    Route::get('/produtos', function(){return'Produtos';});
});


