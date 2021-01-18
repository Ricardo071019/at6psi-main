ID:{{$livro->id_livro}}<br>
Titulo:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>
@if(isset($livro->genero->designacao))
{{$livro->genero->designacao}}<br>
@endif
@if(isset($livro->autores->nome))
{{$livro->autores->nome}}<br>
@endif

@if(count($livro->autores)>0)
@foreach($livro->autores as $autor)
{{$autor->nome}}<br>
@endforeach

@else
<div class="alert alert-danger" role='alert'>
	sem autor definido
</div>
@endif

@if(count($livro->editoras)>0)
@foreach($livro->editoras as $editora)
{{$editora->nome}}<br>
@endforeach

@else
<div class="alert alert-danger" role='alert'>
	sem editora definido
</div>
@endif
Idioma:{{$livro->isbn}}<br>
<a href="{{route('livros.edit',['id'=>$livro->id_livro]) }}">Editar</a>
<a href="{{route('livros.delete',['id'=>$livro->id_livro])}}">Eliminar</a>