<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reporte PDF</title>
	<link rel="stylesheet" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
</head>
<body>
	<div class="" style="width: 100%;">
		<h1 class="text-center">Tabla Diligencias</h1>
		<a class="btn btn-success" href="/reportediligencias">Volver</a>
		<table id="tdiligencias" class="table table-light table-striped mt-4 text-center">
				<thead>
					<tr>
						<th scope="col" style="border: 1px solid #000;">N°</th>
			            <th scope="col" style="border: 1px solid #000;">USUARIO</th>
			            <th scope="col" style="border: 1px solid #000;">FECHA Y HORA DE INGRESO</th>
			            <th scope="col" style="border: 1px solid #000;">MOTIVO</th>
			            <th scope="col" style="border: 1px solid #000;">TIEMPO</th>
			            <th scope="col" style="border: 1px solid #000;">FECHA Y HORA DE RETORNO</th>
			            <th scope="col" style="border: 1px solid #000;">DESCRIPCIÓN</th>
			            <th scope="col" style="border: 1px solid #000;">ESTADO</th>
					</tr>
				</thead>
				<tbody>
					@foreach($diligencias as $diligencia)
					<tr>
						<td scope="row" style="border: 1px solid #000;">{{$diligencia->id}}</td>
						<td style="border: 1px solid #000;">{{$diligencia->idusuario}}</td>
						<td style="border: 1px solid #000;">{{$diligencia->fecha_hora_ingreso}}</td>
						<td style="border: 1px solid #000;">{{$diligencia->motivo}}</td>
						<td style="border: 1px solid #000;">{{$diligencia->tiempo}}</td>
						<td style="border: 1px solid #000;">{{$diligencia->fecha_hora_retorno}}</td>
						<td style="border: 1px solid #000;">{{$diligencia->estado}}</td>
						<td style="border: 1px solid #000;">{{$diligencia->descripcion}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
</body>
</html>