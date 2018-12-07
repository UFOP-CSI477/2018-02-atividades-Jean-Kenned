@extends('layout')

@section('conteudo')

  <h1>Editar Cidade</h1>
  <form action="{{route('cidades.update',$cidade->id)}}" method="post">

    @csrf
  @method('PATCH')
    <p>Nome: <input type="text" name="nome" value="{{$cidade->nome}}"> </p>
    <p>Estado:</p>

    <select name="estado_id">
      @foreach($estados as $e)

        @if($cidade->estado_id == $e->id)
          <option value="{{$e->id}}" selected>{{$e->nome}}</option>

        @else
          <option value="{{$e->id}}">{{$e->nome}}</option>

        @endif

      @endforeach


    </select>

    <input type="submit" name="btnSalvar" value="Incluir">
  </form>

@endsection
