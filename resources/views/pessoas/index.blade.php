@extends('template.base')

@section('titulo','Pessoas Cadastradas')

@section('conteudo')
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
            <a href="/pessoas/{{ $p->id }}">excluir</a>
          </td>
        </tr>
        @endforeach
      </table> 
  

      {{ $pessoas->links()}}
      @endsection