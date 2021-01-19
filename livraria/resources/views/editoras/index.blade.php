@foreach($editoras as $editora)
<li>
	<a href="{{route('editoras.show',['id'=>$editora->id_editora])}}">
		{{$editora->nome}}
	 </a>
</li>
@endforeach
@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
	{{session('mensagem')}}
</div>
@endif