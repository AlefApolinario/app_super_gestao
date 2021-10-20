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
    @forelse ($fornecedores as $indice => $fornecedor )
        Iteração Atual : {{$loop -> iteration}}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ : {{ $fornecedor['cnpj'] ?? 'Dado não foi informado'}}
        <br>
        Telefone : {{ $fornecedor['ddd'] ?? '' }} {{$fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop -> first)
            Primeira iteração do Loop
        @endif
        @if ($loop -> last)
            Última Iteração do Loop

            <br>
            Total de Registros : {{$loop -> count}}

        @endif
        <hr>

        @empty
            Não existem fornecedores cadastrados!
     @endforelse
@endisset















