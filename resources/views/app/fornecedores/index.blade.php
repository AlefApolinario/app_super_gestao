<h3>Fornecedor</h3>

@php
    /*
       if(empty($variavel)) {} //retornar true se a variavel estiver definida
       - ''
       - 0
       - 0.0
       - '0'
       - null
       - false
       - array()
       - $var
    */
@endphp



@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ : {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi informado'}}

    <!--
        $variável testada não estiver definida (isset)
        ou
        $variável testada tiver o valor null.
    -->
@endisset











