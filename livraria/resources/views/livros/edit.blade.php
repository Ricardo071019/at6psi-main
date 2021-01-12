<form action="{{route('livros.update',['id'=>$livro->id_livro])}}
" method="post">
	@csrf
	@method('patch')

Titulo: <input type="text" name="titulo" value="{{$livro->titulo}}"><br>
@if ($errors->has('titulo'))
Deverá indicar um titulo válido<br>
@endif



Idioma: <input type="text" name="idioma" value="{{$livro->idioma}}"><br>
@if($errors->has('idioma'))
Deverá indicar um Idioma correto<br>
@endif

Total páginas: <input type="text" name="total_paginas" value="{{$livro->total_paginas}}"><br>@if($errors->has('total_paginas'))
Deverá indicar um total de paginas correto<br>
@endif


Data Edição: <input type="date" name="data_edicao" value="{{$livro->data_edicao}}"><br>@if($errors->has('data_edicao'))
Deverá indicar uma data de edicao correta<br>
@endif


ISBN:<input type="text" name="isbn" value="{{$livro->isbn}}"><br>
@if($errors->has('isbn'))
Deverá indicar um ISBN correto(13 caracteres)<br>
@endif

Observações:<textarea name="observacoes"></textarea><br>



Sinopse:<textarea name="sinopse">{{$livro->sinopse}}</textarea><br><br>	

<input type="submit" name="enviar">


</form>