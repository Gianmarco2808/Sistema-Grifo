<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    public function index(){
        $contador = 0;
        $bol = true;
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias','contador','bol'));
    }
    public function edit($id){
        $categoria = Categoria::find($id);
        return view('categoria.editar',compact('categoria'));
    }
    public function store(Request $request){
        $categoria = new Categoria();
        $categoria->descripcion = $request->categoria;
        $categoria->save();
        return Redirect::back()->withErrors(['msg' => 'Categoría registrada']);
    }
    public function destroy($id){
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
    public function update( Request $request, $categorium)
    {
        $categoria = Categoria::findOrFail($categorium);
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return Redirect()->route('categoria.index'); 
    }
}
