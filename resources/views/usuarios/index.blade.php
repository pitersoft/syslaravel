@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Personas</h1>
@stop

@section('content')
	<a href="personas/create" class="btn btn-success">CREAR</a>
	<br><br><br>
	<div class="card">
		<div class="card-body">
			<table id="tpersonas" class="table table-light table-striped mt-4">
				<thead>
					<tr>
						<th>N°</th>
			            <th>NOMBRES</th>
			            <th>APELLIDO PATERNO</th>
			            <th>APELLIDO MATERNO</th>
			            <th>DNI</th>
			            <th>FECHA NACIMIENTO</th>
			            <th>TELÉFONO</th>
			            <th>DIRECCIÓN</th>
			            <th>ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					@foreach($personas as $persona)
					<tr>
						<td>{{$persona->id}}</td>
						<td>{{$persona->nombres}}</td>
						<td>{{$persona->apellido_pat}}</td>
						<td>{{$persona->apellido_mat}}</td>
						<td>{{$persona->dni}}</td>
						<td>{{$persona->fecha_nacimiento}}</td>
						<td>{{$persona->telefono}}</td>
						<td>{{$persona->direccion}}</td>
						<td>
							<form action="{{ route ('personas.destroy',$persona->id)}}" method="POST">
							<a href="personas/{{$persona->id}}/edit" class="btn btn-warning">Editar</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Borrar</button>
							</form>
						</td>
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
        $('#tpersonas').DataTable({
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
