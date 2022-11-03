@extends('template.default')
    @section('content')
    <section >
        <h1 class="titulo">Produto</h1>
        <div>
        <form action="{{url('/produto/inserir')}}" method="post">
        {{csrf_field()}}  
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Produto" name="txProduto" value="Insira o produto"/>
        </div>
        
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="IdCategoria" name="txIdCategoria" value="Insira o ID da categoria"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Valor" name="txValor" value="Insira o valor"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>

            <div>

                <h2 class="subtitle"> Buscas de produtos</h2>
                <form action="{{url('/produto')}}" method="get">
                    <div class="espaco">
                    <input  class="form-control" type="text" placeholder="Produto" name="txProdutoConsulta" value="Buscar produto"/>
                    </div>
                    <div class="espaco">
                    <input class="btn btn-danger" type="submit" value="Buscar"/>
                    </div>
                </form>

            </div>

            <div>

                <h2 class="subtitle"> Buscas de valores</h2>
                <form action="{{url('/produto')}}" method="get">
                <div class="espaco">
                <input  class="form-control" type="text" placeholder="INICIAL" name="txProdutoValorI" value="Valor Inicial"/>
                </div>
                <div class="espaco">
                <input  class="form-control" type="text" placeholder="FINAL" name="txProdutoValorF" value="Valor Final"/>
                </div>
                <div class="espaco">
                <input class="btn btn-danger" type="submit" value="Buscar"/>
                </div>
                </form>

            </div>

            @foreach($produto as $p)
            <div class="space">
            <h1> IdProduto: {{$p->idProduto}} </h1>
            <p> IdCategoria: {{$p->idCategoria}} </p>
            <p> Produto: {{$p->produto}} </p>
            <p> Valor: {{$p->valor}} </p>
            <a href="/produto/{{$p->idProduto}}" class="link"><span class="material-symbols-outlined">delete</span></a>
            <a href="/produtoEditar/{{$p->idProduto}}/editar" class="link"><span class="material-symbols-outlined">edit</span></a>
            </div>
            @endforeach


            @if(count($produto) == 0 && $searchnome)
                <p>Não foi possível encontrar nenhum produto por {{ $searchnome }}  </p>
            @elseif(count($produto) == 0 && $searchvalori && $searchvalorf)
                 <p>Não foi possível encontrar nenhum valor entre {{ $searchvalori }} e {{ $searchvalorf }} </p>
            @elseif(count($produto) == 0)
                <p>Não há produtos cadastrados</p>
            @endif

        
    </section>
    @endsection