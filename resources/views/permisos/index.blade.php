@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Permisos</h1>
@stop

@section('content')
	<a href="permisos/create" class="btn btn-success">CREAR</a>
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
			            <th>VISITAS</th>
			            <th>PERMISOS</th>
			            <th>REPORTE_PERMISOS</th>
			            <th>DILIGENCIAS</th>
			            <th>REPORTE_DILIGENCIAS</th>
			            <th>ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					@foreach($permisos as $permiso)
					<tr>
						<td>{{$permiso->id}}</td>
						<td>{{$permiso->idnivel}}</td>
						<td>{{$permiso->usuarios}}</td>
						<td>{{$permiso->personas}}</td>
						<td>{{$permiso->visitas}}</td>
						<td>{{$permiso->permisos}}</td>
						<td>{{$permiso->reporte_permisos}}</td>
						<td>{{$permiso->diligencias}}</td>
						<td>{{$permiso->reporte_diligencias}}</td>
						<td>
							<form action="{{ route ('permisos.destroy',$permiso->id)}}" method="POST" class="formulario-eliminar">
							<a href="permisos/{{$permiso->id}}/edit" class="btn btn-warning">Editar</a>
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
    @if (session('eliminar') == 'ok')
    	<script>
    		Swal.fire(
		      '¡Eliminado!',
		      'Este registro ha sido eliminado.',
		      'success'
		    )
    	</script>
    @endif
    <script>
    	$('.formulario-eliminar').submit(function(e){
    		e.preventDefault();
    		Swal.fire({
			  title: '¿Está seguro?',
			  text: "¡No podrás revertir esto!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  cancelButtonText: 'Cancelar',
			  confirmButtonText: '¡Sí, bórralo!'
			}).then((result) => {
			  if (result.value) {
			    this.submit();
			  }
			})
    	})
    </script>
@stop
