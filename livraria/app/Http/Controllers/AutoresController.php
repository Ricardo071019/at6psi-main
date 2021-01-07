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
		return view ('autores.create');
	}

	public function store(Request $request){
		$novoAutor = $request->validate([
			'nome'=>['required','min:3', 'max:20'],
			'nacionalidade'=>['required','min:3','max:255'],
			'data_nascimento'=>['nullable','date'],
			'fotografia'=>['nullable']
		]);

		$autor = Autor::create($novoAutor);

		return redirect()->route('autores.show',['id'=>$autor->id_autor]);
	}

}
