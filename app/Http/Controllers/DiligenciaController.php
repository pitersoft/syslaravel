<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diligencia;
class DiligenciaController extends Controller
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
         $diligencias = Diligencia::all();
        return view('diligencias.index')->with('diligencias',$diligencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diligencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diligencias = new Diligencia();

        $diligencias->idusuario = $request->get('idusuario');
        $diligencias->fecha_hora_ingreso = $request->get('fechahoraingreso');
        $diligencias->motivo = $request->get('motivo');
        $diligencias->tiempo = $request->get('tiempo');
        $diligencias->fecha_hora_retorno = $request->get('fechahoraretorno');
        $diligencias->estado = $request->get('estado');
        $diligencias->descripcion = $request->get('descripcion');

        $diligencias->save();

        return redirect('diligencias');
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
         $diligencia = Diligencia::find($id);
        return view('diligencias.edit')->with('diligencia',$diligencia);
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
        $diligencia = Diligencia::find($id);

        $diligencia->idusuario = $request->get('idusuario');
        $diligencia->fecha_hora_ingreso = $request->get('fechahoraingreso');
        $diligencia->motivo = $request->get('motivo');
        $diligencia->tiempo = $request->get('tiempo');
        $diligencia->fecha_hora_retorno = $request->get('fechahoraretorno');
        $diligencia->estado = $request->get('estado');
        $diligencia->descripcion = $request->get('descripcion');

        $diligencia->save();

        return redirect('diligencias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diligencia = Diligencia::find($id);
        $diligencia->delete();
        return redirect('diligencias')->with('eliminar','ok');
    }
}
