<form action="{{route('editoras.update',['id'=>$editora->id_editora])}}" method="post">
	@csrf
	@method('patch')

	
	Nome: <input type="text" name="nome" value="{{$editora->nome}}"><br>
	@if ($errors -> has('nome'))
	Deverá indicar um Nome correto
	@endif

	Morada: <input type="text" name="morada" value="{{$editora->morada}}"><br>
	@if ($errors -> has('morada'))
	Deverá indicar uma morada correto 
	@endif

	Observaçoes: <input type="text" name="observacoes" value="{{$editora->observacoes}}"><br>
	@if ($errors -> has('observacoes'))
	Deverá indicar uma observacao correta
	@endif

	<input type="submit" name="enviar"><br>
	


</form>