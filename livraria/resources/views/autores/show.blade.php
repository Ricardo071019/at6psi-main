ID:{{$autor->id_autor}}<br>
Nome:{{$autor->nome}}<br>
Nacionalidade:{{$autor->nacionalidade}}
@foreach($autor->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach
@foreach($autor->livros as $livro)
@endforeach
<br>
<a href="{{route('autores.edit',['id'=>$autor->id_autor]) }}">Editar</a>
<a href="{{route('autores.delete',['id'=>$autor->id_autor])}}">Eliminar</a>