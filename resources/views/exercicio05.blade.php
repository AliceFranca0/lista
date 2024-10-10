<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Categoria do Nadador</title>
</head>
<body>
    <h1>Exercício 05 - Categoria do Nadador</h1>

    <form method="POST" action="{{ url('/exercicio05') }}">
        @csrf
        <label for="idade">Digite a idade do nadador:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>

        <button type="submit">Verificar Categoria</button>
    </form>

    @if (isset($categoria))
        <h2>Resultado</h2>
        <p>{{ $categoria }}</p>
    @endif
</body>
</html>
