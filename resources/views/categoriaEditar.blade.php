@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Categoria edição</h1>
        <div>
        <form action="{{url('/categoriaEditar/editar')}}" method="post">
        {{csrf_field()}} 
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Categoria" name="txCategoria" value="{{$categoria->categoria}}"/>
        </div>

        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>      
    </section>

    @endsection