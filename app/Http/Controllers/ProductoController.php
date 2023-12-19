<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::select('select p.id as id,p.descripcion as descripcion, c.descripcion as descripcionc,p.cantidad as cantidad, p.precio as precio from productos p inner join categorias c on c.id = p.categoria_id');
        
        return view('producto.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('producto.create', compact('categorias','proveedores'));
    }

    /** en proveedor cual es ele aearaaaaaraaaaaaaaaaaaaaaaor?
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->descripcion = $request ->txtdescripcion;
        $producto->cantidad = $request -> txtstock;
        $producto->precio = $request -> txtprecio;
        $producto->categoria_id = $request->categoria;
        $producto->proveedor_id = $request->proveedor;
        $producto->save();
        return redirect('producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        
        $producto=Producto::find($producto->id);
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('producto.edit',compact('producto','categorias','proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto = producto::find($producto);        
        $producto->descripcion = $request ->txtdescripcion;
        $producto->cantidad = $request -> txtcantidad;
        $producto->precio = $request -> txtprecio;
        $producto->categoria_id = $request->categoria;
        $producto->proveedor_id = $request->proveedor;

        $producto->save();
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        Producto::find($producto->id)->delete();
        return redirect('producto');
    }
}
