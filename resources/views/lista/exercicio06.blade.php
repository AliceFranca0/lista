<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 - Números Ímpares</title>
</head>
<body>
    <h1>Exercício 06 - Números Ímpares entre 101 e 199</h1>

    <ul>
        @foreach ($numerosImpares as $numero)
            <li>{{ $numero }}</li>
        @endforeach
    </ul>
</body>
</html>
