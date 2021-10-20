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
    @foreach ($fornecedores as $indice => $fornecedor )
        
   
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ : {{ $fornecedor['cnpj'] ?? 'Dado não foi informado'}}
        <br>
        Telefone : {{ $fornecedor['ddd'] ?? '' }} {{$fornecedor['telefone'] ?? '' }}
        <hr>
     @endforeach
@endisset















