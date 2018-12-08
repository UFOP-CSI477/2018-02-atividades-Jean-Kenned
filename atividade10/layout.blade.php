<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo','Sistema Acadêmico')</title>
    <!--posso setar um titulo, se nada for setado sera sistema academico-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

    <!--Flash: mensagem //-->
    @if (Session::has('mensagem'))
      <p><strong>{{Session::get('mensagem')}}</strong></p>
    @endif

    <!--referencia: obtido através do site: https://getbootstrap.com/docs/4.0/examples/blog -->
    <body>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Sistema academico</h1>
        </div>
      </div>
    <!-- quando tiver @ é um comando do blade-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">Página Inicial</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li>
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('estados')}}">Estados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cidades')}}">Cidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('alunos')}}">Alunos</a>
          </li>


        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>

    <!-- secao de conteudo-->
    @yield('conteudo')

  </body>
</html>
