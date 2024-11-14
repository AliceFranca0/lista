<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Clientes</h1>

        <input type="text" id="search-input" placeholder="Digite para buscar..." />

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>
                        <form action="deletarCliente/{{ $cliente->id }}" method="POST" onsubmit="return confirm('TEM CERTEZA ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                    <td>
                        <a href="editarCliente/{{ $cliente->id }}" class="edit-link">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div id="results"></div>
    </div>

    <script src="{{ asset('js/search.js') }}"></script>

    <div class="wave"></div>
    <div class="wave" style="animation-delay: 2s; opacity: 0.5;"></div>
    <div class="wave" style="animation-delay: 4s; opacity: 0.2;"></div>

</body>
</html>
