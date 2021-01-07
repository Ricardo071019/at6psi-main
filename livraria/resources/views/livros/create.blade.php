<form action="{{route('livros.store')}}" method="post">
	
	@csrf
	Titulo: <input type="text" name="titulo" value="{{old('titulo')}}"><br>
	@if ($errors -> has('titulo'))
	Deverá indicar um Titulo correto
	@endif

	Idioma: <input type="text" name="idioma" value="{{old('idioma')}}"><br>
	@if ($errors -> has('idioma'))
	Deverá indicar um Idioma correto 
	@endif

	Total páginas: <input type="text" name="total_paginas" value="{{old('total_paginas')}}"><br>
	@if ($errors -> has('total_paginas'))
	Deverá indicar um Total de Páginas correto
	@endif

	Data Edição: <input type="text" name="data_edicao" value="{{old('data_edicao')}}"><br>
	@if ($errors -> has('data_edicao'))
	Deverá indicar uma data de edicao correta
	@endif
	
	ISBN: <input type="text" name="isbn" value="{{old('isbn')}}"><br>
	@if ($errors -> has('isbn'))
	Deverá indicar um ISBN correto (13 caracteres)
	@endif

	Observações: <input type="text" name="observacoes" value="{{old('observacoes')}}"><br>
	@if ($errors -> has('observacoes'))
	Deverá indicar as observações corretas 
	@endif

	Imagem capa: <input type="text" name="imagens_capa" value="{{old('imagem_capa')}}"><br>
	@if ($errors -> has('imagem_capa'))
	Deverá indicar as imagens de capa corretas
	@endif

	Género: <input type="text" name="id_genero" value="{{old('id_genero')}}"><br>
	@if ($errors -> has('id_genero'))
	Deverá indicar o genero correto 
	@endif

	Autor: <input type="text" name="id_autor" value="{{old('id_autor')}}"><br>
	@if ($errors -> has('id_autor'))
	Deverá indicar o autor correto
	@endif

	Sinopse: <textarea name="sinopse"> {{old('sinopse')}}</textarea><br>
	@if ($errors -> has('sinopse'))
	Deverá indicar uma sinopse
	@endif

	<input type="submit" name="enviar"><br>
	


</form>