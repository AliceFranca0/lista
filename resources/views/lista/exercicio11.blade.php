<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inverter Nome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #333;
        }
        .resultado {
            font-size: 24px;
            color: #ff4500;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Exercício 11 - Nome Invertido</h1>
    
    <div class="resultado">
        <p>Nome original: {{ $nome }}</p>
        <p>Nome invertido: {{ $nomeInvertido }}</p>
    </div>
</body>
</html>
