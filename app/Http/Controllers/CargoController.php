<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos=Cargo::all();
        return view('Cargos.index',compact('cargos'));
    }
    public function create()
    {
        return view('Cargos.create');
    }

    public function store(Request $request)
    {
        $cargos= new Cargo();
        $cargos->descripcioncargo = $request->txtdescripcion;
        $cargos->sueldo = $request->txtsueldo;
        $cargos->save();
        return redirect('Cargo');
    }
    
    public function edit($Cargo)
    {
        $cargos = Cargo::findOrFail($Cargo);
        return view('Cargos.edit',compact('cargos'));
    }
    public function update(Request $request,$id)
    {
        $cargos = Cargo::findOrFail($id);
        $cargos->descripcioncargo = $request->descripcion;
        $cargos->sueldo = $request->sueldo;
        $cargos->save();
        return Redirect()->route('Cargo.index');
    }

    public function destroy($id)
    {
        $cargos = Cargo::find($id);
        $cargos->delete();
        return redirect()->route('Cargo.index');
    }
}
