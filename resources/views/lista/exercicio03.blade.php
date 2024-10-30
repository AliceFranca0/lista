<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Cálculo de Salário</title>
</head>
<body>
    <h1>Exercício 03 - Cálculo de Salário do Operário</h1>

    <form method="POST" action="{{ url('/exercicio03') }}">
        @csrf
        <label for="codigo">Digite o código do operário:</label>
        <input type="text" id="codigo" name="codigo" required>
        <br><br>
        
        <label for="horas_trabalhadas">Digite o número de horas trabalhadas:</label>
        <input type="number" id="horas_trabalhadas" name="horas_trabalhadas" required>
        <br><br>

        <button type="submit">Calcular Salário</button>
    </form>

    @if (isset($salarioTotal))
        <h2>Resultados</h2>
        <p>Código do operário: {{ $codigo }}</p>
        <p>Salário base: R$ {{ number_format($salarioBase, 2, ',', '.') }}</p>
        <p>Salário excedente: R$ {{ number_format($salarioExcedente, 2, ',', '.') }}</p>
        <p>Salário total: R$ {{ number_format($salarioTotal, 2, ',', '.') }}</p>
    @endif
</body>
</html>
