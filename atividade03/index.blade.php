@extends('layout')

@section('conteudo')

  <h1>Cidades</h1>

<!--aqui usa sintaxe blade-->
  @foreach($cidades as $c)

    <p>{{ $c -> nome}}-{{$c->estado->sigla}}</p>

  @endforeach

@endsection
