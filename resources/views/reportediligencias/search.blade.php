<?php
use App\Models\Diligencia;
?>
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Reporte Diligencias</h1>
@stop

@section('content')
	<?php
		$hostbd = "localhost";
		$usuariobd = "root";
		$clavebd = "";
		$bdbd = "syslaravel";

		$conexion = mysqli_connect($hostbd,$usuariobd,$clavebd,$bdbd);
		$conexion = mysqli_connect($hostbd,$usuariobd,$clavebd,$bdbd);
		$fhinicio = mysqli_escape_string($conexion, $_GET['fhinicio']." 00:00:00");
		$fhfinal = mysqli_escape_string($conexion, $_GET['fhfinal']." 23:59:59");
		$diligencias = Diligencia::whereBetween('fecha_hora_ingreso',array(strtotime($fhinicio),strtotime($fhfinal)))->get();
	?>
	<div class="container" style="display: flex;flex-direction: row;">
		<form style="display: flex;flex-direction: row; margin-left: 200px;" action="search-diligencias" method="GET">
			@csrf
			<?php 
				$año = date('Y');
				$añosiguiente = $año+1; 
			?>
	        <div class="mb-3" style=" margin-right: 30px;">
	          <label for="fhinicio" class="form-label">Fecha Inicial</label>
	          <input type="date" class="form-control" name="fhinicio" id="fhinicio" value="<?php echo $_GET['fhinicio']; ?>" tabindex="2">
	        </div>
	        <div class="mb-3" style=" margin-right: 30px;">
	          <label for="fhfinal" class="form-label">Fecha Final</label>
	          <input type="date" class="form-control" name="fhfinal" id="fhfinal" value="<?php echo $_GET['fhfinal']; ?>" tabindex="3">
	        </div>
	        <button style="height: 40px;margin-top: 30px; margin-right: 30px;" type="submit" class="btn btn-primary" tabindex="5">Buscar</button>
		</form>
		<a style="height: 40px;margin-top: 30px;" class="btn btn-dark" href="{{route('PDF-diligencias')}}">Generar Reporte</a>
	</div>
	<br><br><br>
	<div class="card">
		<div class="card-body">
			<table id="tdiligencias" class="table table-light table-striped mt-4">
				<thead>
					<tr>
						<th>N°</th>
			            <th>USUARIO</th>
			            <th>FECHA Y HORA DE INGRESO</th>
			            <th>MOTIVO</th>
			            <th>TIEMPO</th>
			            <th>FECHA Y HORA DE RETORNO</th>
			            <th>DESCRIPCIÓN</th>
			            <th>ESTADO</th>
					</tr>
				</thead>
				<tbody>
					@foreach($diligencias as $diligencia)
					<tr>
						<td>{{$diligencia->id}}</td>
						<td>{{$diligencia->idusuario}}</td>
						<td>{{$diligencia->fecha_hora_ingreso}}</td>
						<td>{{$diligencia->motivo}}</td>
						<td>{{$diligencia->tiempo}}</td>
						<td>{{$diligencia->fecha_hora_retorno}}</td>
						<td>{{$diligencia->estado}}</td>
						<td>{{$diligencia->descripcion}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('js')
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#tdiligencias').DataTable({
        	responsive: true,
        	autoWidth: false,
        	"language": {
	            "lengthMenu": "Mostrar _MENU_ registros por página",
	            "zeroRecords": "Nada encontrado - lo sentimos",
	            "info": "Mostrando la página _PAGE_ de _PAGES_",
	            "infoEmpty": "No hay registros disponibles",
	            "infoFiltered": 
	            "(filtrado de _MAX_ registros totales)",
	            'search': 'Buscar:',
	            'paginate':{
	            	'next': 'Siguiente',
	            	'previous': 'Anterior'
	            }
	        }
        });
    </script>
@stop