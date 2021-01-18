<form action="{{route('autores.store')}}" method="post">

@csrf
@method('patch')

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

	<select name="id_genero">
		@foreach($generos as $genero)
		<option value="{{$genero->id_genero}}"
			@if($genero->id_genero==$livro->id_genero)selected @endif
		>{{$genero->designacao}}</option>
		@endforeach
	</select><br><br>

	Autor(es)
<select name="id_autor" multiple="multiple">
		@foreach($autores as $autor)
		<option value="{{$autor->id_autor}}"
			@if(in_array($autor->id_autor,$autoresLivro))selected @endif >{{$autor->nome}}</option>
		@endforeach
	</select>


<input type="submit" name="enviar">


</form>
	
