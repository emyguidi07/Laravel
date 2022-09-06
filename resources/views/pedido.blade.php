@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Pedido</h1>
        @foreach($pedido as $pe)
        <h1> {{$pe->idPedido}} </h1>
        <p> {{$pe->idCategoria}} </p>
        <p> {{$pe->qtd_produto}} </p>
        <p> {{$pe->idProduto}} </p>
        <p> {{$pe->data_entrega}} </p>
        <p> {{$pe->data_saida}} </p>
        <p> {{$pe->valortotal}} </p>
        @endforeach
    </section>

    @endsection