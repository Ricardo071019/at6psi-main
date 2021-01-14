<form action="{{route('editoras.store')}}" method="post">
	
	@csrf
	Nome: <input type="text" name="nome" value="{{old('nome')}}"><br>
	@if ($errors -> has('nome'))
	Deverá indicar um Nome correto
	@endif

	Morada: <input type="text" name="morada" value="{{old('morada')}}"><br>
	@if ($errors -> has('morada'))
	Deverá indicar uma morada correto 
	@endif

	Observaçoes: <input type="text" name="observacoes" value="{{old('observacoes')}}"><br>
	@if ($errors -> has('observacoes'))
	Deverá indicar uma observacao correta
	@endif

	<input type="submit" name="enviar"><br>
	


</form>