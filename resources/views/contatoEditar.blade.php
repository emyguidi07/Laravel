@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Contato edição</h1>
        <div>
        <form action="{{url('/contatoEditar/editar')}}" method="post">
        {{csrf_field()}}                
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Nome" name="txNome" value="{{$contato->nome}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email" placeholder="Email" name="txEmail" value="{{$contato->email}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Telefone" name="txTel" value="{{$contato->fone}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea" placeholder="Assunto" name="txAssunto" value="{{$contato->assunto}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Mensagem" name="txMsg" value="{{$contato->mensagem}}"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>
    </section>

    @endsection