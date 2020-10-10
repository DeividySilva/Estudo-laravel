<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulário de Pessoas</title>
</head>
<body>
    <h1>Formulario de pessoa</h1>

    <form action="/pessoas" method="post">
        @csrf
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="telefone" placeholder="Telefone">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Salvar">
</form>

<a href="/pessoas">Voltar</a>
</body>
</html>