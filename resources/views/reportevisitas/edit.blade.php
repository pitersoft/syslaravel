@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
    <form action="/reportevisitas/{{$visita->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="idpersona" class="form-label">Nombres</label>
          <input type="text" class="form-control" name="idpersona" id="idpersona" tabindex="1" value="{{$visita->idpersona}}">
        </div>
        <div class="mb-3">
          <label for="fhingreso" class="form-label">Fecha Ingreso</label>
          <input type="text" class="form-control" name="fhingreso" id="fhingreso" tabindex="2" value="{{$visita->fh_ingreso}}">
        </div>
        <div class="mb-3">
          <label for="fhsalida" class="form-label">Fecha Salida</label>
          <input type="text" class="form-control" name="fhsalida" id="fhsalida" tabindex="3" value="{{$visita->fh_salida}}">
        </div>
        <a href="/reportevisitas" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
        <br>
        <br>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        
    </script>
@stop
