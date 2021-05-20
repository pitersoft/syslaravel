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
        $visitas->created_at = $request->get('fhingreso');
        $visitas->updated_at = $request->get('fhsalida');

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
        $visita = Visita::find($id);

        $visita->idpersona = $request->get('idpersona');
        $visita->created_at = $request->get('fhingreso');
        $visita->updated_at = $request->get('fhsalida');

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
