<h2>Deseja eliminar o Genero </h2>
<h2>{{$genero->dsignacao}}</h2>
<form method="post" action="{{route('generos.destroy',['id'
=>$genero->id_genero])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">
</form>