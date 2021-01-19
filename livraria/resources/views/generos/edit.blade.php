<form action="{{route('generos.store',['id'=>$genero->id_genero])}}" method="post">
	
	@csrf
	@method('patch')

	DEsiganção: <input type="text" name="designacao" value="{{$genero->designacao}}"><br>
	@if ($errors -> has('designacao'))
	Deverá indicar uma Desigançao correto
	@endif

	Observações: <input type="text" name="observacoes" value="{{$genero->observacoes}}"><br>
	@if ($errors -> has('observacoes'))
	Deverá indicar uma Observação correta
	@endif

	<input type="submit" name="enviar"><br>
</form>