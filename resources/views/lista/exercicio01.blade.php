<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <h1>Array Original</h1>
    <pre>{{ print_r($num, true) }}</pre>

    <h1>Array Multiplicado</h1>
    <pre>{{ print_r($armazenaArr, true) }}</pre>

    <h1>Resultado Final</h1>
    @if (is_array($resultado))
        <pre>{{ print_r($resultado, true) }}</pre>
    @else
        <p>O quarto valor do array é maior ou igual a 1000: {{ $resultado }}</p>
    @endif
</body>
</html>
