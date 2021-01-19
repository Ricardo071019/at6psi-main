ID:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Morada:{{$editora->morada}}<br>
Observações:{{$editora->observacoes}}<br>
<div class="alert alert-danger" role='alert'>
	sem editora definido
</div>
<br>
<a href="{{route('editoras.edit',['id'=>$editora->id_editora]) }}">Editar</a>
<a href="{{route('editoras.delete',['id'=>$editora->id_editora])}}">Eliminar</a>

