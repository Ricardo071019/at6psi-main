<form action="{{route('autores.store')}}" method="post">
	
	@csrf
	Nome: <input type="text" name="nome" value="{{old('nome')}}"><br>
	@if ($errors -> has('nome'))
	Deverá indicar um Nome correto
	@endif

	Nacionalidade: <input type="text" name="nacionalidade" value="{{old('nacionalidade')}}"><br>
	@if ($errors -> has('nacionalidade'))
	Deverá indicar uma Nacionalidade correta
	@endif

	Data_Nascimento: <input type="text" name="data_nascimento" value="{{old('data_nascimento')}}"><br>
	@if ($errors -> has('data_nascimento'))
	Deverá indicar uma Data de Nascimento correta
	@endif

	Fotografia: <input type="text" name="fotografia" value="{{old('fotografia')}}"><br>
	@if ($errors -> has('fotografia'))
	Deverá indicar uma fotografia 
	@endif
	

<input type="submit" name="enviar"><br>
	


</form>