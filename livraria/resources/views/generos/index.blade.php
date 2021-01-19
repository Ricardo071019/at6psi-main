@foreach($generos as $genero)
<li>
	<a href="{{route('generos.show',['id'=>$genero->id_genero])}}">
		{{$genero->designacao}}
	</a>
</li>
@endforeach
@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
	{{session('mensagem')}}
</div>
	@endif
