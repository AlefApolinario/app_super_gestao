<h3>Fornecedor</h3>

@php
/*
    if(){

    }elseif(){

    }else{

    }*/
@endphp

{{-- @dd($fornecedores) <- imprime a array na tela, sem o comando @dd apenas variaveis comuns podem ser interpretadas pelo blade com ->{{}} --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif










