@extends('layout')

@section('conteudo')

  <h1>Editar Aluno</h1>
  <form action="{{route('alunos.update',$aluno->id)}}" method="post">

    @csrf
  @method('PATCH')
    <p>Nome: <input type="text" name="nome" value="{{$aluno->nome}}"> </p>
    <p>matricula: <input type="text" name="matricula" value="{{$aluno->matricula}}"> </p>
    <p>email: <input type="text" name="email" value="{{$aluno->email}}"> </p>
    <p>cidade:</p>

    <select name="cidade_id">
      @foreach($cidades as $c)

        @if($c->id == $aluno->cidade_id)
          <option value="{{$c->id}}" selected>{{$c->nome}}-{{$c->estado->sigla}}</option>

        @else
          <option value="{{$c->id}}">{{$c->nome}}</option>

        @endif

      @endforeach


    </select>

    <input type="submit" name="btnSalvar" value="Incluir">
  </form>

@endsection
