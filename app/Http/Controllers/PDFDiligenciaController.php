<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Diligencia;
class PDFDiligenciaController extends Controller
{
    public function PDF(){
    	$diligencias = Diligencia::all();
    	$pdf = PDF::loadView('reportediligencias.pdf-diligencias',compact('diligencias'))->setPaper ('a4','landscape');
    	return $pdf->stream('pdf-diligencias.pdf');
    }
}
