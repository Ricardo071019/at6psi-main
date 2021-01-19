<form action="{{route('generos.store')}}" method="post">
	
	@csrf
	DEsiganção: <input type="text" name="designacao" value="{{old('designacao')}}"><br>
	@if ($errors -> has('designacao'))
	Deverá indicar uma Desigançao correto
	@endif

	Observações: <input type="text" name="observações" value="{{old('observações')}}"><br>
	@if ($errors -> has('observacoes'))
	Deverá indicar uma Observação correta
	@endif

	<input type="submit" name="enviar"><br>
</form>