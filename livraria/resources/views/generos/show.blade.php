ID:{{$genero->id_genero}}<br>
designação:{{$genero->designacao}}<br>
Observações:{{$genero->observacoes}}
@foreach ($genero->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach
<br>
<a href="{{route('generos.edit',['id'=>$genero->id_genero]) }}">Editar</a>
<a href="{{route('generos.delete',['id'=>$genero->id_genero])}}">Eliminar</a>