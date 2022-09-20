@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Categoria</h1>
        <div>
        <form action="{{url('/categoria/inserir')}}" method="post">
        {{csrf_field()}} 
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Categoria" name="txCategoria" value="Insira uma categoria"/>
        </div>

        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>
        
            @foreach($categoria as $cat)
            <div class="space">
            <h1> Id Categoria: {{$cat->idCategoria}} </h1>
            <p> Categoria: {{$cat->categoria}} </p>
            </div>
            @endforeach
        
    </section>

    @endsection