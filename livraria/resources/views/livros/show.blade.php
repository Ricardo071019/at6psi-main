ID:{{$livro->id_livro}}<br>
Titulo:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}
@if(isset($livro->genero->designacao))
{{$livro->genero->designacao}}
@endif
@if(isset($livro->autores->nome))
{{$livro->autores->nome}}
@endif
@foreach($livro->autores as $autor)
{{$autor->nome}}<br>
@endforeach

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