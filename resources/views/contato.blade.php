@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Contato</h1>
        <div class="space">
        @foreach($contato as $c)
        <h1> Id : {{$c->idContato}} </h1>
        <p> Nome: {{$c->nome}} </p>
        <p> Email: {{$c->email}} </p>
        <p> Telefone:{{$c->fone}} </p>
        <p> Assunto: {{$c->assunto}} </p>
        <p> Mensagem: {{$c->mensagem}} </p>
        @endforeach
        </div>
    </section>

    @endsection