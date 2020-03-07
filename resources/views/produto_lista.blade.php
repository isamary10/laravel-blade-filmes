<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
        </tr>
        @foreach($produtos as $produto)
        <tr>
            <td>{{ $produto }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>