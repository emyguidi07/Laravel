@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Categoria</h1>
        @foreach($categoria as $cat)
        <h1> {{$cat->idCategoria}} </h1>
        <p> {{$cat->categoria}} </p>
        @endforeach
    </section>

    @endsection