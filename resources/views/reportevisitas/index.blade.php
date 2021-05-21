@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Reporte Visitas</h1>
@stop

@section('content')
	<div class="container" style="display: flex;flex-direction: row;">
		<a style="height: 40px;margin-top: 30px; margin-right: 200px;" href="reportevisitas/create" class="btn btn-success">Nuevo</a>
		<form style="display: flex;flex-direction: row;" action="/reportevisitas" method="POST">
			@csrf
	        <div class="mb-3" style=" margin-right: 30px;">
	          <label for="fhinicio" class="form-label">Fecha Inicial</label>
	          <input type="date" class="form-control" name="fhinicio" id="fhinicio" tabindex="2">
	        </div>
	        <div class="mb-3" style=" margin-right: 30px;">
	          <label for="fhfinal" class="form-label">Fecha Final</label>
	          <input type="date" class="form-control" name="fhfinal" id="fhfinal" tabindex="3">
	        </div>
	        <button style="height: 40px;margin-top: 30px; margin-right: 30px;" type="submit" class="btn btn-primary " tabindex="5">Buscar</button>
		</form>
		<a style="height: 40px;margin-top: 30px;" class="btn btn-dark" href="{{route('PDF-visitas')}}">Generar Reporte</a>
	</div>
	<br><br><br>
	<div class="card">
		<div class="card-body">
			<table id="tvisitas" class="table table-light table-striped mt-4">
				<thead>
					<tr>
						<th>N°</th>
			            <th>NOMBRE</th>
			            <th>FECHA INGRESO</th>
			            <th>FECHA SALIDA</th>
			            <th>ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					@foreach($visitas as $visita)
					<tr>
						<td>{{$visita->id}}</td>
						<td>{{$visita->idpersona}}</td>
						<td>{{$visita->created_at}}</td>
						<td>{{$visita->updated_at}}</td>
						<td>
							<form action="{{ route ('reportevisitas.destroy',$visita->id)}}" method="POST" class="formulario-eliminar">
							<a href="reportevisitas/{{$visita->id}}/edit" class="btn btn-warning">Editar</a>
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
        $('#tvisitas').DataTable({
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
