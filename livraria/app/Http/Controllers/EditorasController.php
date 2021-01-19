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
		$generos = Genero::all();
		$autores = Autor::all();
		return view ('editoras.create',['generos' =>$generos,'autores' =>$autores]);
}
		public function store(Request $request){
		$novoEditora = $request->validate([
			'nome'=>['required','min:3', 'max:20'],
			'morada'=>['required','min:3','max:255'],
			'observacoes'=>['required','min:3']
			
]);
		$editoras = $request->id_editora;
		$editora= Editora::create($novoEditora);
		$editora->editoras()->attach($editoras);


		return redirect()->route('editoras.show',['id'=>$editora->id_editora]);
		
		

	}
	public function edit (Request $request){
		$idEditora = $request->id;
		$editora = Editora::where('id_editora',$idEditora)->first();
		return view('editoras.edit',['editora'=>$editora]);

	
}
public function update (Request $request){
$idEditora = $request->id;
$editora = Editora::findOrFail($idEditora);

$atulizarEditora = $request->validate([
			'nome'=>['required','min:3', 'max:20'],
			'morada'=>['required','min:3','max:255'],
			'observacoes'=>['required','min:3'],
		]);


$editora->update($atulizarEditora);
return redirect()->route('editoras.show',[
'id'=>$editora->id_editora]);
}

public function delete (Request $request){
		$idEditora = $request->id;
		$editora=Editora::where('id_editora',$idEditora)->first();
		return view ('editoras.delete',['editora'=>$editora]);
}

public function destroy (Request $request){
	$idEditora = $request->id;
    $editora = Editora::findOrFail($idEditora);
	$editora->delete();
	
	return redirect()->route('editoras.index')->with('mensagem','Editora eliminada!');

}


}