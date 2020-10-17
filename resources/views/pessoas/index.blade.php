<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pessoas</title>
    <style> table, th, td {
        border: 1px solid black;
      }

      tr {
  width: 100%;
  background-color: #f1f1c1;
}
    </style>

</head>
<body>
    <h1>Pessoas Cadastradas</h1>

    <a href="/pessoas/create">Novo Cadastrar</a>

    <hr>

    <table style="width:100%">
        <tr>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Ações</th>
        </tr>
       @foreach ($pessoas as $p)  
        <tr>
          <td>{{ $p->nome }}</td>
          <td>{{ $p->telefone }}</td>
          <td>{{ $p->email }}</td>
          <td>
            <a href="/pessoas/{{ $p->id }}/edit">Editar</a>
          </td>
        </tr>
        @endforeach
      </table> 


      {{ $pessoas->links()}}
</body>
</html>