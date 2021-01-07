ID:{{$genero->id_genero}}<br>
designação:{{$genero->designacao}}<br>
Observações:{{$genero->observacoes}}
@foreach ($genero->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach