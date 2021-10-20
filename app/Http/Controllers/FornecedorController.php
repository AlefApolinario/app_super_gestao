<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1',
                  'status' => 'N',
                  'cnpj' => ''],
            1 => ['nome' => 'Fornecedor 2',
                  'status' => 'S',
                 ]
        ];

        /*
        condição ? se verdade : se falso;
        condição ? se verdade : (condição ? se verdade : se falso); encadeamento de testes (não recomendado)
         */
        $msg = isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;

    return view('app.fornecedores.index', compact('fornecedores'));
    }
}
