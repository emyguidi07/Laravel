@extends('template.default')
    @section('content')
    <section >
        <h1 class="titulo">Produto Edição</h1>
        <div>
        <form action="{{{url('/produto-alterar/'.$produto->idProduto)}}}" method="post">
        {{csrf_field()}}  
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Produto" name="txProduto" value="{{$produto->produto}}"/>
        </div>
        
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="IdCategoria" name="txIdCategoria" value="{{$produto->idCategoria}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Valor" name="txValor" value="{{$produto->valor}}"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>
    
    </section>
    @endsection