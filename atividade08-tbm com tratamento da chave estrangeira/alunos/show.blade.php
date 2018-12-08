@extends('layout')

@section('conteudo')

<!--aqui usa sintaxe blade-->
  <h1>Aluno:  {{$aluno->nome}}</h1>
  <p>Matricula:  {{$aluno->matricula}}</p>
  <p>Email:  {{$aluno->email}}</p>
  <p>Código: {{$aluno->id}}</p>
  <p>Cidade:{{$aluno->cidade->nome}}-{{$aluno->cidade->estado->sigla}}</p>



  <!--<a href="/estados">Voltar</a> ou -->
  <a href="{{route('alunos.index')}}">Voltar</a>
  <a href="{{route('alunos.edit',$aluno->id)}}">Editar</a>


  <form  action="{{route('alunos.destroy',$aluno->id)}}" method="post" onsubmit="return confirm('Confirma exclusão do aluno: {{$aluno->nome}}?');">

    @csrf
    @method('DELETE')
    <input type="submit" value="Excluir">

  </form>

@endsection
