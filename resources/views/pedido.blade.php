@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Pedido</h1>
    <div>
            <form>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="IdCategoria" name="txIdcategoria" value="Insira o ID da categoria"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Quantidade de produtos" name="txQtd" value="Insira a qtd de produtos"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="IdProduto" name="txIdproduto" value="Insira o ID do produto"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Data de saída - escreva em XXXX-XX-XX" name="txDatas" value="Insira a data de saída"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Data de entrega - escreva em XXXX-XX-XX" name="txDatae" value="Insira a data de entrega"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Valor total da compra" name="txValor" value="Insira o valor"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>
       
        <div class="space">
            @foreach($pedido as $pe)
            <h1> IdPedido: {{$pe->idPedido}} </h1>
            <p> IdCategoria:{{$pe->idCategoria}} </p>
            <p> Quantidade de produtos: {{$pe->qtd_produto}} </p>
            <p> IdProduto: {{$pe->idProduto}} </p>
            <p> Data de entrega: {{$pe->data_entrega}} </p>
            <p> Data de saída:  {{$pe->data_saida}} </p>
            <p> Valor total: {{$pe->valortotal}} </p>
        @endforeach
    <div class="space">
    </section>

    @endsection