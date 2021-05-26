<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Visita;
class PDFVisitaController extends Controller
{
    public function PDF(){
        $visitas = Visita::all();
        $pdf = PDF::loadView('reportevisitas.pdf-visitas',compact('visitas'))->setPaper ('a4','landscape');
        return $pdf->stream('pdf-visitas.pdf');
    }
}
