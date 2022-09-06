@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Produto</h1>
        @foreach($produto as $p)
        <h1> {{$p->idProduto}} </h1>
        <p> {{$p->idCategoria}} </p>
        <p> {{$p->produto}} </p>
        <p> {{$p->valor}} </p>
        @endforeach
    </section>
    @endsection