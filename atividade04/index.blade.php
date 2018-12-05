@extends('layout')

@section('conteudo')

  <h1>Alunos</h1>

<!--aqui usa sintaxe blade-->
  @foreach($alunos as $a)

    <p>Nome:{{ $a -> nome}}</p>
    <p>Matricula:{{ $a -> matricula}}</p>
    <p>Email:{{ $a -> email}}</p>
    <p>Cidade:{{$a->cidade->nome}}-{{$a->cidade->estado->sigla}} </p>
    <br>
  @endforeach

@endsection
