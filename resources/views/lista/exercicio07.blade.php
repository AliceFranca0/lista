<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 - Números Aleatórios</title>
</head>
<body>
    <h1>Exercício 07 - Geração de Números Aleatórios</h1>

    <h2>Números Gerados:</h2>
    <ul>
        @foreach ($array as $numero)
            <li>{{ $numero }}</li>
        @endforeach
    </ul>

    <h3>Resultados:</h3>
    <p><strong>Maior valor:</strong> {{ $maior }}</p>
    <p><strong>Menor valor:</strong> {{ $menor }}</p>
    <p><strong>Média dos valores:</strong> {{ $media }}</p>
</body>
</html>
