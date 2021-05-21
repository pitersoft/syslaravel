@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Reporte Permisos</h1>
@stop

@section('content')
	<a class="btn btn-dark" href="{{route('PDF-permisos')}}">Generar Reporte</a>
	<br><br><br>
	<div class="card">
		<div class="card-body">
			<table id="tpermisos" class="table table-light table-striped mt-4">
				<thead>
					<tr>
						<th>N°</th>
			            <th>NIVEL</th>
			            <th>USUARIOS</th>
			            <th>PERSONAS</th>
			            <th>R_VISITAS</th>
			            <th>PERMISOS</th>
			            <th>R_PERMISOS</th>
			            <th>DILIGENCIAS</th>
			            <th>R_DILIGENCIAS</th>
					</tr>
				</thead>
				<tbody>
					@foreach($permisos as $permiso)
					<tr>
						<td scope="row">{{$permiso->id}}</td>
						<td>{{$permiso->idnivel}}</td>
						<td><?php if($permiso->usuarios==1){echo "Activo";}else{echo"Desactivo";} ?></td>
						<td><?php if($permiso->personas==1){echo "Activo";}else{echo"Desactivo";} ?></td>
						<td><?php if($permiso->visitas==1){echo "Activo";}else{echo"Desactivo";} ?></td>
						<td><?php if($permiso->permisos==1){echo "Activo";}else{echo"Desactivo";} ?><td><?php if($permiso->reporte_permisos==1){echo "Activo";}else{echo"Desactivo";} ?></td>
						<td><?php if($permiso->diligencias==1){echo "Activo";}else{echo"Desactivo";} ?></td>
						<td><?php if($permiso->reporte_diligencias==1){echo "Activo";}else{echo"Desactivo";} ?></td>
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
        $('#tpermisos').DataTable({
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
