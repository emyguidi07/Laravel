@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Cliente</h1>
        @foreach($cliente as $pe)
        <h1> {{$pe->idCliente}} </h1>
        <p> {{$pe->nome}} </p>
        <p> {{$pe->dataNasc}} </p>
        <p> {{$pe->genero}} </p>
        <p> {{$pe->estadoCivil}} </p>
        <p> {{$pe->endereco}} </p>
        <p> {{$pe->numero}} </p>
        <p> {{$pe->complemento}} </p>
        <p> {{$pe->cep}} </p>
        <p> {{$pe->bairro}} </p>
        <p> {{$pe->cidade}} </p>
        <p> {{$pe->rg}} </p>
        <p> {{$pe->telefone}} </p>
        <p> {{$pe->email}} </p>
        <p> {{$pe->celular}} </p>
        @endforeach
    </section>

    @endsection