@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Contato</h1>
        <div>
            <form>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Nome" name="txNome" value="Insira seu nome"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email" placeholder="Email" name="txEmail" value="Insira seu email"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Telefone" name="txTel" value="Insira seu Telefone"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea" placeholder="Assunto" name="txAssunto" value="Insira seu assunto"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Mensagem" name="txMsg" value="Insira sua mensagem"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>
        <div class="space">
            @foreach($contato as $c)
            <h1> Id : {{$c->idContato}} </h1>
            <p> Nome: {{$c->nome}} </p>
            <p> Email: {{$c->email}} </p>
            <p> Telefone:{{$c->fone}} </p>
            <p> Assunto: {{$c->assunto}} </p>
            <p> Mensagem: {{$c->mensagem}} </p>
            @endforeach
        </div>
    </section>

    @endsection