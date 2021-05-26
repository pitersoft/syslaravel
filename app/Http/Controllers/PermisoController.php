<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permiso;
use App\Models\Nivel;
class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permiso::all();
        return view('permisos.index')->with('permisos',$permisos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permisos = new Permiso();

        $permisos->nombres = $request->get('nombres');
        $permisos->apellido_pat = $request->get('apellidopat');
        $permisos->apellido_mat = $request->get('apellidomat');
        $permisos->dni = $request->get('dni');
        $permisos->fecha_nacimiento = $request->get('fechanacimiento');
        $permisos->telefono = $request->get('telefono');
        $permisos->direccion = $request->get('direccion');

        $permisos->save();

        return redirect('permisos');    
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
        $permiso = Permiso::find($id);
        return view('permisos.edit')->with('permiso',$permiso);
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
        $permiso = Permiso::find($id);

        $permiso->nombres = $request->get('nombres');
        $permiso->apellido_pat = $request->get('apellidopat');
        $permiso->apellido_mat = $request->get('apellidomat');
        $permiso->dni = $request->get('dni');
        $permiso->fecha_nacimiento = $request->get('fechanacimiento');
        $permiso->telefono = $request->get('telefono');
        $permiso->direccion = $request->get('direccion');

        $permiso->save();

        return redirect('permisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permiso = Permiso::find($id);
        $permiso->delete();
        return redirect('permisos')->with('eliminar','ok');    
    }
}
