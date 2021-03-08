<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // objeto de todos los datos del model Empleado
        $empleados = Empleado::all();

        // devolvemos la vista y a empleados como contexto
        return view('index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Almacena los datos enviados por el formulario
    public function store(Request $request)
    {
        Empleado::create($request->all());
        // te devuelve a la ruta 'empleados'
        return redirect('/empleados');
    }

    public function edit($id)
    {
        // guarda la informacion del empleado, recibida del formulario
        $empleado = Empleado::find($id);

        return view('edit')->with('empleado', $empleado); 
    }

    // almacena y cambia los datos editados desde edit
    public function update(Request $request, $id)
    {
        //
        $empleado = Empleado::find($id);
        $empleado->update($request->all());
        return redirect('/empleados');
    }

    public function destroy($id)
    {
        //
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect('/empleados');
    }
}
