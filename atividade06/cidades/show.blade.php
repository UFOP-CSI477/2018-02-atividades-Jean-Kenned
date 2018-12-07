@extends('layout')

@section('conteudo')

<!--aqui usa sintaxe blade-->
  <h1>Cidade:  {{$cidade->nome}}</h1>
  <p>Código: {{$cidade->id}}</p>
  <p>Estado:{{$cidade->estado->nome}}-{{$cidade->estado->sigla}}</p>

  <!--<a href="/estados">Voltar</a> ou -->
  <a href="{{route('cidades.index')}}">Voltar</a>
  <a href="{{route('cidades.edit',$cidade->id)}}">Editar</a>


  <!-- <form  action="{{route('cidades.destroy',$cidade->id)}}" method="post" onsubmit="return confirm('Confirma exclusão da Cidade: {{$cidade->nome}}?');">

    @csrf
    @method('DELETE')
    <input type="submit" value="Excluir">

  </form> -->

@endsection
