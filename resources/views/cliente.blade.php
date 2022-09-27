@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Cliente</h1>
        <div>
        <form action="{{url('/cliente/inserir')}}" method="post">
        {{csrf_field()}}  
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Nome" name="txNome" value="Insira seu nome"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Data de nascimento - escreva em XXXX-XX-XX" name="txData" value="Insira sua data de nasc"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Estado civil" name="txEst" value="Insira seu estado civil"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Gênero" name="txGen" value="Insira seu gênero"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea" placeholder="Endereço" name="txEnd" value="Insira seu endereço"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" placeholder="Número" name="txNum" value="Insira seu número"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Complemento" name="txCom" value="Insira seu complemento"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" placeholder="CEP" name="txCEP" value="Insira seu CEP"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Bairro" name="txBai" value="Insira seu bairro"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Cidade" name="txCid" value="Insira sua cidade"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="RG" name="txRG" value="Insira seu RG"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Telefone" name="txTel" value="Insira seu telefone"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email" placeholder="Email" name="txEmail" value="Insira seu email"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Celular" name="txCel" value="Insira seu celular"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>
        
                @foreach($cliente as $pe)
                <div class="space">
                <h1> IdCliente: {{$pe->idCliente}} </h1>
                <p> Nome: {{$pe->nome}} </p>
                <p> Data de Nascimento: {{$pe->dataNasc}} </p>
                <p> Gênero:{{$pe->genero}} </p>
                <p> Estado Civil: {{$pe->estadoCivil}} </p>
                <p> Endereço: {{$pe->endereco}} </p>
                <p> Número: {{$pe->numero}} </p>
                <p> Complemento: {{$pe->complemento}} </p>
                <p> CEP: {{$pe->cep}} </p>
                <p> Bairro:{{$pe->bairro}} </p>
                <p> Cidade: {{$pe->cidade}} </p>
                <p> RG: {{$pe->rg}} </p>
                <p> Telefone: {{$pe->telefone}} </p>
                <p> Email: {{$pe->email}} </p>
                <p> Celular: {{$pe->celular}} </p>
                <a href="/cliente/{{$pe->idCliente}}" class="link"> <span class="material-symbols-outlined">delete</span></a>
                </div>
                @endforeach
        
    </section>

    @endsection