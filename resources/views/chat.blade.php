@extends('layouts.sistema')
@section('content')

<div class="divChat">
    <h1>Seja bem-vindo(a) {{Auth::user()->name}}!</h1>
    <p>
        Estou vendo que você é novo(a) por aqui! Para começar a enviar suas mensagens, vamos criar um número para você!
    </br>
        Clique no Botão abaixo e solicite um numero.
    </p>
    <form action="" method="post">
        @csrf
        <input type="submit" value="SOLICITAR NÚMERO" class="btnSolicitar">
    </form>
    <p>
        O seu número é: <span>000001</span>
    </p>

    <div class="divLinha"></div>

    <h1>Espanda sua rede, procure novas pessoas!</h1>

    <div class="divLinha"></div>

    <h1>Adicione pessoas através do número</h1>

</div>



@endsection