@foreach($autores as $autor)
<li>
	<a href="{{route('autores.show',['id'=>$autor->id_autor])}}">
	{{$autor->nome}}
	</a>	
</li>
@endforeach
@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
	{{session('mensagem')}}
</div>
	
	@endif
