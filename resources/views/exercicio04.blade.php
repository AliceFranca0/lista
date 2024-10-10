<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Índice de Poluição</title>
</head>
<body>
    <h1>Exercício 04 - Avaliação do Índice de Poluição</h1>

    <form method="POST" action="{{ url('/exercicio04') }}">
        @csrf
        <label for="indice">Digite o índice de poluição medido:</label>
        <input type="number" step="0.01" id="indice" name="indice" required>
        <br><br>

        <button type="submit">Verificar Índice</button>
    </form>

    @if (isset($mensagem))
        <h2>Resultado</h2>
        <p>{{ $mensagem }}</p>
    @endif
</body>
</html>
