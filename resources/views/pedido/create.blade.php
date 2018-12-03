<h1>Formulário de Cadastro de Pedidos</h1>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif -->

<form action="/pedidos" method="post">
	{{ csrf_field() }}
	Tipo: <select name="tipo_id">
			@foreach($tipos as $tipo)
				<option value="{{$tipo->id}}">{{$tipo->desc}}</option>
			@endforeach
		  </select><br>
	

	Sabor 1: <select name="sabor1_id">
			@foreach($sabores as $tipo)
				<option value="{{$tipo->id}}">{{$tipo->titulo}} - {{$tipo->descricao}}</option>
			@endforeach
		  </select><br>

	Sabor 2: <select name="sabor2_id">
			@foreach($sabores as $tipo)
				<option value="{{$tipo->id}}">{{$tipo->titulo}} - {{$tipo->descricao}}</option>
			@endforeach
		  </select><br>

	Sabor 3: <select name="sabor3_id">
			@foreach($sabores as $tipo)
				<option value="{{$tipo->id}}">{{$tipo->titulo}} - {{$tipo->descricao}}</option>
			@endforeach
		  </select><br>

	<input type="submit" value="Salvar">
</form>
