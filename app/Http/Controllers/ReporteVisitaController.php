<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visita;
class ReporteVisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $fhinicial = date('2018-01-01');
        // $fhfinal = date('2098-12-30');
        // $fhinicial = date(request()->get('fhinicial'));
        // $fhfinal = date(request()->get('fhfinal'));
        $visitas = Visita::all();
        return view('reportevisitas.index')->with('visitas',$visitas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportevisitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visitas = new Visita();

        $visitas->idpersona = $request->get('idpersona');
        $visitas->fh_ingreso = $request->get('fhingreso');
        $visitas->fh_salida = $request->get('fhsalida');

        $visitas->save();

        return redirect('reportevisitas'); 
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
        $visita = Visita::find($id);
        return view('reportevisitas.edit')->with('visita',$visita);
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
        $permiso = Visita::find($id);

        $visita->idpersona = $request->get('idpersona');
        $visita->fh_ingreso = $request->get('fhingreso');
        $visita->fh_salida = $request->get('fhsalida');

        $visita->save();

        return redirect('reportevisitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visita = Visita::find($id);
        $visita->delete();
        return redirect('reportevisitas')->with('eliminar','ok'); 
    }
}
