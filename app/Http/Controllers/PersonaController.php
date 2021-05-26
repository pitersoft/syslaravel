<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $personas = Persona::all();
        return view('personas.index')->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personas = new Persona();

        $personas->nombres = $request->get('nombres');
        $personas->apellido_pat = $request->get('apellidopat');
        $personas->apellido_mat = $request->get('apellidomat');
        $personas->dni = $request->get('dni');
        $personas->fecha_nacimiento = $request->get('fechanacimiento');
        $personas->telefono = $request->get('telefono');
        $personas->direccion = $request->get('direccion');

        $personas->save();

        return redirect('personas');
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
    public function edit($id)
    {
        $persona = Persona::find($id);
        return view('personas.edit')->with('persona',$persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);

        $persona->nombres = $request->get('nombres');
        $persona->apellido_pat = $request->get('apellidopat');
        $persona->apellido_mat = $request->get('apellidomat');
        $persona->dni = $request->get('dni');
        $persona->fecha_nacimiento = $request->get('fechanacimiento');
        $persona->telefono = $request->get('telefono');
        $persona->direccion = $request->get('direccion');

        $persona->save();

        return redirect('personas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return redirect('personas')->with('eliminar','ok');
    }
}
