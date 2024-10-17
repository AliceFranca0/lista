<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastrarCliente" method="post">
    @csrf
    <P>{{session('mensagem')}}</P>
    Nome: <input type="text" name="nome">
    CPF: <input type="text" name="cpf">
    Telefone: <input type="text" name="telefone">
    Email: <input type="text" name="email">
    <input type="submit" value="Cadastrar">
    </form>

    <a href="listarCliente">Listar Cliente</a>
</body>
</html>