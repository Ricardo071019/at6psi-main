@foreach($livros as $livro)
<li>
	<a href="{{route('livros.show',['id'=>$livro->id_livro])}}">
		{{$livro->titulo}}
	</a>

</li>
@endforeach
@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
	{{session('mensagem')}}
</div>
	
	@endif
