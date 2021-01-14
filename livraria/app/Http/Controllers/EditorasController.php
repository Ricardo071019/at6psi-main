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
public function create (){
		return view ('editoras.create');
}
public function store(Request $request){
		$novoEditora = $request->validate([
			'nome'=>['required','min:3', 'max:20'],
			'morada'=>['required','min:3','max:255'],
			'observacoes'=>['required','min:3']
			
		]);

		$editora = Editora::create($novoEditora);

		return redirect()->route('editoras.show',['id'=>$editora->id_editora]);
	}
}
