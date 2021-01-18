<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Genero;
use App\Models\Autor;

class LivrosController extends Controller
{
public function index(){
	//$livro= Livro::all()->sortbydesc('idl');
	$livro= Livro::paginate(4);

	return view ('livros.index', ['livros'=>$livro]);
}
public function show (Request $request){
	$idLivro=$request->id;

	//$livro = Livro::findOrFail($idLivro);

	//$livro= livro::find($idLivro);

	$livro=Livro::where('id_livro',$idLivro)->with(['genero','autores','editoras'])->first();

	
	return view ('livros.show',['livro'=>$livro]);
}

	public function create ()
	{
		$generos = Genero::all();
		$autores = Autor::all();
		return view ('livros.create',['generos' =>$generos,
			'autores'=>$autores]);
	}

	public function store(Request $request)
	{
		$novoLivro = $request->validate([
		'titulo'=>['required','min:3','max:100'],
		'idioma'=> ['nullable','min:3','max:20'],
		'total_paginas'=>['nullable','numeric','min:1'],
		'data_edicao'=>['nullable','date'],
		'isbn'=>['required','min:13','max:13'],
		'observacoes'=>['nullable','min:3','max:255'],
		'imagem_capa'=>['nullable'],
		'id_genero'=>['numeric','nullable'],
		'sinopse'=>['nullable','min:3','max:255']

	]);
		$autores = $request->id_autor;
		$livro= Livro::create($novoLivro);
		$livro->autores()->attach($autores);
		
		return redirect()->route('livros.show',[
		'id'=>$livro->id_livro
	]);
	}	

public function edit (Request $request){
$idLivro = $request->id;

$generos = Genero::all();
$autores= Autor::all();
$livro = Livro::where('id_livro',$idLivro)->with('autores')->first();
$autoresLivro = [];
//obter id autor dos autores deste livro
foreach($livro->autores as $autor){
	$autoresLivro[] = $autor->id_autor;
}
return view('livros.edit',['livro'=>$livro,
'generos'=>$generos,
'autores' =>$autores,
'autoresLivro'=>$autoresLivro]);
}
public function update (Request $request){
$idLivro = $request->id;
$livro = Livro::findOrFail($idLivro);

$atualizarLivro = $request->validate([                 
	'titulo'=>['required','min:3','max:100'],
		'idioma'=> ['nullable','min:3','max:20'],
		'total_paginas'=>['nullable','numeric','min:1'],
		'data_edicao'=>['nullable','date'],
		'isbn'=>['required','min:13','max:13'],
		'observacoes'=>['nullable','min:3','max:255'],
		'imagem_capa'=>['nullable'],
		'id_genero'=>['numeric','nullable'],
		'sinopse'=>['nullable','min:3','max:255' ],
]);

$autores=$request->id_autor;
$livro->update($atualizarLivro);
$livro->autores()->sync($autores);
return redirect()->route('livros.show',[
'id'=>$livro->id_livro]);

}
public function delete (Request $request){
		$idLivro = $request->id;
		$livro=Livro::where('id_livro',$idLivro)->first();
		return view ('livros.delete',['livro'=>$livro]);
}
public function destroy (Request $request){
	$idLivro = $request->id;

	$livro = Livro::findOrFail($idLivro);
	$autoresLivro = Livro::findOrFail($id_livro)->autores;
	$livro->autores()->detach($autoresLivro);

	$livro->delete();

	return redirect()->route('livros.index')->with('mensagem','Livro eliminado!');

}


}

