@foreach($sabores as $sabor)
<p>{{$sabor->titulo}}</p>
<p>{{$sabor->descricao}}</p>
<p>{{$sabor->valor}}</p>
@endforeach