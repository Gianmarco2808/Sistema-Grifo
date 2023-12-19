<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $vendedores = DB::select('select * from users u inner join cargos c on c.id = u.cargo_id');
        
        return view('vendedor.index',compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        return view('vendedor.create',compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendedor = new User();
        $vendedor->name = $request ->txtnombres;
        $vendedor->apellidos = $request ->txtapellidos;
        $vendedor->telefono = $request -> txttelefono;
        $vendedor->email = $request -> txtcorreo;
        $vendedor->password = bcrypt('password');
        $vendedor->direccion = $request->txtdireccion;
        $vendedor->genero = $request->txtgenero;
        $vendedor->fechanacimiento = $request->txtfechanacimiento;
        $vendedor->dni = $request->txtdni;
        $vendedor->cargo_id = $request->cargo;

        
        $user = User::where('email', '=', $request->txtcorreo)->first();

        if ($user === null) {
        $vendedor->save();
        return redirect('vendedor');
        }

        return redirect('vendedor/create')->withErrors(['Email ya registrado', 'Sin stock disponible']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedor=User::find($id);
        return view('vendedor.show',compact('vendedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $vendedor)
    {
        $vendedor=User::find($vendedor->id);
        $cargos = Cargo::all();
        return view('vendedor.edit',compact('vendedor','cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $vendedor)
    {
        $vendedor = User::find($vendedor->id);
        $vendedor->name = $request ->txtnombres;
        $vendedor->apellidos = $request ->txtapellidos;
        $vendedor->telefono = $request -> txttelefono;
        $vendedor->email = $request -> txtcorreo;
        $vendedor->estado = 'ACTIVO';
        $vendedor->direccion = $request->txtdireccion;
        $vendedor->genero = $request->txtgenero;
        $vendedor->fechanacimiento = $request->txtfechanacimiento;
        $vendedor->dni = $request->txtdni;
        $vendedor->cargo_id = $request->cargo;

        $vendedor->save();
        return redirect('vendedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inhabilitar($id)
    {
        $vendedor = User::find($id);
        $aux="";
        
        if ($vendedor->estado=='INACTIVO') {
            $vendedor->estado = 'ACTIVO';
            $aux = $vendedor->email;
            $vendedor->email =   $vendedor->telefono;
            $vendedor->telefono=$aux;
        }

        if($vendedor->estado=='ACTIVO')
        {
            $vendedor->estado = 'INACTIVO';
            $aux = $vendedor->email;
            $vendedor->email =   $vendedor->telefono;
            $vendedor->telefono = $aux;
        }

        $vendedor->save();

        return redirect()->back();
    }
}
