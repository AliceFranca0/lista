<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Par/Ímpar e Positivo/Negativo</title>
</head>
<body>
    <h1>Exercício 02 - Verificar Número</h1>

    <form method="POST" action="{{ url('/exercicio02') }}">
        @csrf
        <label for="numero">Digite um número inteiro:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    @if (isset($error))
        <p style="color: red;">{{ $error }}</p>
    @endif

    @if (isset($num))
        <p>O número {{ $num }} é {{ $parImpar }} e {{ $posiNeg }}.</p>
    @endif
</body>
</html>
