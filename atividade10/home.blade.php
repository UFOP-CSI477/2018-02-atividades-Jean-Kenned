@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p>Seja vem vindo {{$user->name}}</p>
                    <p>Seu id de usuário é:{{$id}}</p>
                    <p>Seu email é: {{$user->email}}</p>
                    <p>O registro dessa conta foi feito em:{{$user->created_at}}</p>


                    <a href="/">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
