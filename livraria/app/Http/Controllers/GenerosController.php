<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
class GenerosController extends Controller
{
    //
           public function index(){
//$genero=genero::all()->sortbydesc('idg');
	$genero= Genero::paginate(4);

	return view ('generos.index', ['generos'=>$genero]);
}
public function show (Request $request){
	$idGenero=$request->id;

	//$livro = Livro::findOrFail($idLivro);

	//$livro= livro::find($idLivro);

	$genero=Genero::where('id_genero',$idGenero)->with('livros')->first();
	
	return view ('generos.show',['genero'=>$genero]);
}
	public function create (){
		$generos = Genero::all();
		$autores = Autor::all();
		return view ('generos.create',[
			'generos'=>$generos]);
	}
	public function store(Request $request){
		$novoGenero = $request->validate([
			'designacao'=>['required','min:3', 'max:20'],
			'observacoes'=>['required','min:3','max:255'],
		]);
		$generos = $request->id_genero;
		$genero= Genero::create($novoGenero);
		$genero->generos()->attach($generos);

		return redirect()->route('generos.show',['id'=>$genero->id_genero]);
	}
	public function edit (Request $request){
		$idGenero = $request->id;
		$genero = Genero::where('id_genero',$idGenero)->first();
		return view('generos.edit',['genero'=>$genero]);
	}
	public function update (Request $request){
		$idGenero = $request->id;
		$genero = Genero::findOrFail($idGenero);

		$atualizarGenero = $request->validate([                 
			'designacao'=>['required','min:3', 'max:20'],
			'observacoes'=>['required','min:3','max:255'],
		]);
		$genero->update($atualizarGenero);

		return redirect()->route('generos.show',[
		'id'=>$genero->id_genero]);

	}
	public function delete (Request $request){
		$idGenero = $request->id;
		$genero=Genero::where('id_genero',$idGenero)->first();
		return view ('generos.delete',['genero'=>$genero]);
	}
	public function destroy (Request $request){
		$idGenero = $request->id;

		$genero = Genero::findOrFail($idGenero);
		$genero->delete();

		return redirect()->route('generos.index')->with('mensagem','Genero eliminado!');

	}
}
