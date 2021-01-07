<form action="" method="post">
	@csrf
Titulo: <input type="text" name="titulo" value=""><br>
@if ($errros->has('titulo'))
Deverá indicar um titulo válido<br>
@endif

Idioma: <input type="text" name="idioma" value=""><br>

Total páginas: <input type="text" name="total_paginas" value=""><br>





</form>