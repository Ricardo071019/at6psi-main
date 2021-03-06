<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
class AutoresController extends Controller
{
   public function index(){
	//$autor=autor::all()->sortbydesc('idl');
	$autor= Autor::paginate(4);

	return view ('autores.index', ['autores'=>$autor]);
	}

	public function show (Request $request){
		$idAutor=$request->id;

		//$livro = Livro::findOrFail($idLivro);

		//$livro= livro::find($idLivro);

		$autor=Autor::where('id_autor',$idAutor)->with('livros')->first();
	
		return view ('autores.show',['autor'=>$autor]);

	}

	public function create (){
		$generos = Genero::all();
		$autores = Autor::all();
		return view ('autores.create',['generos' =>$generos,
			'autores'=>$autores]);
	}

	public function store(Request $request){
		$novoAutor = $request->validate([
			'nome'=>['required','min:3', 'max:20'],
			'nacionalidade'=>['required','min:3','max:255'],
			'data_nascimento'=>['nullable','date'],
			'fotografia'=>['nullable']
		]);
		$autores = $request->id_autor;
		$autor= Autor::create($novoAutor);
		$autor->autores()->attach($autores);

		return redirect()->route('autores.show',['id'=>$autor->id_autor]);
	}

	public function edit (Request $request){
		$idAutor = $request->id;
		$autor = Autor::where('id_autor',$idAutor)->first();
		return view('autores.edit',['autor'=>$autor]);
	}
		


	public function update (Request $request){
		$idAutor = $request->id;
		$autor = Autor::findOrFail($idAutor);

		$atualizarAutor = $request->validate([                 
			'nome'=>['required','min:3', 'max:20'],
					'nacionalidade'=>['required','min:3','max:255'],
					'data_nascimento'=>['nullable','date'],
					'fotografia'=>['nullable']
				]);
		$autor->update($atualizarAutor);

		return redirect()->route('autores.show',[
		'id'=>$autor->id_autor]);

	}

	public function delete (Request $request){
		$idAutor = $request->id;
		$autor=Autor::where('id_autor',$idAutor)->first();
		return view ('autores.delete',['autor'=>$autor]);
	}

	public function destroy (Request $request){
		$idAutor = $request->id;

		$autor = Autor::findOrFail($idAutor);
		$autor->delete();

		return redirect()->route('autores.index')->with('mensagem','Autor eliminado!');

	}

}
