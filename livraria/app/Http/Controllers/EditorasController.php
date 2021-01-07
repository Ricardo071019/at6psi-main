<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;
class EditorasController extends Controller
{
       public function index(){
	//$editora=editora::all()->sortbydesc('ide');
	$editora= Editora::paginate(4);

	return view ('editoras.index', ['editoras'=>$editora]);
}
public function show (Request $request){
	$idEditora=$request->id;

	//$livro = Livro::findOrFail($idLivro);

	//$livro= livro::find($idLivro);

	$editora=Editora::where('id_editora',$idEditora)->first();
	
	return view ('editoras.show',['editora'=>$editora]);
}
}
