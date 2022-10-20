@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Cliente Edição</h1>
        <div>
        <form action="{{url('/clienteEditar/editar')}}" method="post">
        {{csrf_field()}}  
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Nome" name="txNome" value="{{$cliente->nome}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Data de nascimento - escreva em XXXX-XX-XX" name="txData" value="{{$cliente->dataNasc}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Estado civil" name="txEst" value="{{$cliente->estadoCivil}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Gênero" name="txGen" value="{{$cliente->genero}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea" placeholder="Endereço" name="txEnd" value="{{$cliente->endereco}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" placeholder="Número" name="txNum" value="{{$cliente->numero}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Complemento" name="txCom" value="{{$cliente->complemento}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" placeholder="CEP" name="txCEP" value="{{$cliente->cep}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Bairro" name="txBai" value="{{$cliente->bairro}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Cidade" name="txCid" value="{{$cliente->cidade}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="RG" name="txRG" value="{{$cliente->rg}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Telefone" name="txTel" value="{{$cliente->telefone}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email" placeholder="Email" name="txEmail" value="{{$cliente->email}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Celular" name="txCel" value="{{$cliente->celular}}"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>
        
    </section>

    @endsection