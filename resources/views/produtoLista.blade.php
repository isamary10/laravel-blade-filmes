@extends('layout')
<?php   $produtos = [
    'Bicicleta',
    'Ovo',
    // 'Antialergico',
    // 'Meia'
];
    //Usuário logado no sistema:
    // $user = "Victor";
 ?>
@section('conteudo')
    <h1>Eu sou um conteudo novo!</h1>
@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <header>
        <nav>  
            @if(isset($user))
            <a href="/logout">Logout</a>
            @endif
        </nav>
    </header>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produtos as $produto)
            <tr>
                <!-- <td><?php // echo $produto ?></td> -->
                <td>{{ $produto }}</td>
            </tr>
            @empty
                <tr><td>Nenhum produto encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html> --}}