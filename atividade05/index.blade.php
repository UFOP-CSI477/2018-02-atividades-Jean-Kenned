@extends('layout')

@section('conteudo')

  <h1>Cidades</h1>
  <p><a href="{{route('cidades.create')}}">Inserir nova cidade</a></p>

<!--aqui usa sintaxe blade-->
  @foreach($cidades as $c)

    <p>{{ $c -> nome}}-{{$c->estado->sigla}}</p>

  @endforeach

@endsection
