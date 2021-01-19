<h2>Deseja eliminar a Editora </h2>
<h2>{{$editora->nome}}</h2>
<form method="post" action="{{route('editoras.destroy',['id'
=>$editora->id_editora])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">
</form>