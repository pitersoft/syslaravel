<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Permiso;
class PDFPermisoController extends Controller
{
    public function PDF(){
    	$permisos = Permiso::join('nivels', 'nivels.id', '=', 'permisos.idnivel')->select('*')->get();
    	$pdf = PDF::loadView('reportepermisos.pdf-permisos',compact('permisos'))->setPaper ('a4','landscape');
    	return $pdf->stream('pdf-permisos.pdf');
    }
}
