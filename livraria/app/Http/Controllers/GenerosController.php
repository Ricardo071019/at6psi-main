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
}
