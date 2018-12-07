@extends('layout')

@section('conteudo')

  <h1>Cidades</h1>
  <p><a href="{{route('cidades.create')}}">Inserir nova cidade</a></p>

<!--aqui usa sintaxe blade-->
  @foreach($cidades as $c)

      <p><a href="{{route('cidades.show',$c->id)}}"> {{ $c -> nome}}-{{$c->estado->sigla}}</a></p>

  @endforeach


@endsection
