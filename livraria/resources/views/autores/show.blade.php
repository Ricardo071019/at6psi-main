ID:{{$autor->id_autor}}<br>
Nome:{{$autor->nome}}<br>
Nacionalidade:{{$autor->nacionalidade}}
@foreach($autor->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach
