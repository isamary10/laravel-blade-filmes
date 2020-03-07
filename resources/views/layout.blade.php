<!DOCTYPE html>
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

    @yield('conteudo')
    </body>
</html>