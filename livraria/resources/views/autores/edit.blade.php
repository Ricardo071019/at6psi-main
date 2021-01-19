<form action="{{route('autores.store',['id'=>$autor->id_autor])}}" method="post">

@csrf
@method('patch')

	Nome: <input type="text" name="nome" value="{{$autor->nome}}"><br>
	@if ($errors -> has('nome'))
	Deverá indicar um Nome correto
	@endif

	Nacionalidade: <input type="text" name="nacionalidade" value="{{$autor->nacionalidade}}"><br>
	@if ($errors -> has('nacionalidade'))
	Deverá indicar uma Nacionalidade correta
	@endif

	Data_Nascimento: <input type="text" name="data_nascimento" value="{{$autor->data_nascimento}}"><br>
	@if ($errors -> has('data_nascimento'))
	Deverá indicar uma Data de Nascimento correta
	@endif

	Fotografia: <input type="text" name="fotografia" value="{{$autor->fotografia}}"><br>
	@if ($errors -> has('fotografia'))
	Deverá indicar uma fotografia 
	@endif

	

<input type="submit" name="enviar">


</form>
	
