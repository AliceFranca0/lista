<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Nomes</title>
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
        .nomes {
            font-size: 20px;
            color: #4682b4;
        }
    </style>
</head>
<body>
    <h1>Lista de Nomes</h1>
    
    <p class="nomes">
        @foreach ($nomes as $nome)
            {{ $nome }} 
        @endforeach
    </p>
</body>
</html>

