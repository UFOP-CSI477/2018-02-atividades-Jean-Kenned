@extends('layout')

@section('conteudo')

  <h1>Inserir Aluno</h1>
  <form action="/alunos" method="post">

    @csrf
    <p>Nome: <input type="text" name="nome"> </p>
    <p>Matricula: <input type="text" name="matricula"></p>
    <p>Email: <input type="text" name="email"></p>
    <p>Cidade:</p>

    <select name="cidade_id">
      @foreach($cidades as $c)
        <option value="{{$c->id}}">{{$c->nome}}-{{$c->estado->sigla}}</option>
      @endforeach
    </select>

    <input type="submit" name="btnSalvar" value="Incluir">
  </form>

@endsection
