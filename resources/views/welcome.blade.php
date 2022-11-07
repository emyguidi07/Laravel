    @extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Home </h1>
        <div class= "fundo-image">
        </div>
    </section>  
    
    <section>
        <div>
		<h2 class="subtitle">Pesquisar Produto</h2>

		<form action="{{url('/welcome/pesquisa')}}" method="post">	
		{{csrf_field()}}		
		 	<div class="espaco">
				<input type="text" name="txProduto" placeholder="Produto" /> <br>
			</div>

			<div class="espaco">
				<input type="number" name="valorMin" placeholder="Valor Min." /> <br>
			</div>

			<div class="espaco">
				<input type="number" name="valorMax" placeholder="Valor Max." /> <br>
			</div>

			<div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
            </div>
		</form>
	</div>

	@isset($produto)
    @foreach($produto as $p)
            <div class="space">
            <h1> Produto: {{$p->produto}} </h1>
            <p> IdCategoria: {{$p->idCategoria}} </p>
            <p> IdProduto: {{$p->idProduto}} </p>
            <p> Valor: {{$p->valor}} </p>
            </div>
            @endforeach
	@endisset

    </section>
        
    @endsection
