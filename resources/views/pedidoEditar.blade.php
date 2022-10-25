@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Pedido Edição</h1>
    <div>
        <form action="{{{url('/pedido-alterar/'.$pedido->idPedido)}}}" method="post">
        {{csrf_field()}} 
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="IdCategoria" name="txIdcategoria" value="{{$pedido->idCategoria}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Quantidade de produtos" name="txQtd" value="{{$pedido->qtd_produto}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="IdProduto" name="txIdproduto" value="{{$pedido->idProduto}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Produto" name="txIdcliente" value="{{$pedido->idCliente}}"/>
        </div>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Data de saída - escreva em XXXX-XX-XX" name="txDatas" value="{{$pedido->data_saida}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Data de entrega - escreva em XXXX-XX-XX" name="txDatae" value="{{$pedido->data_entrega}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Valor total da compra" name="txValor" value="{{$pedido->valortotal}}"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

        </form>
        </div>

        
    </section>

    @endsection