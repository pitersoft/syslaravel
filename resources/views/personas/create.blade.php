@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nuevo Registro</h1>
@stop

@section('content')
    <form action="/personas" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nombres" class="form-label">Nombres</label>
          <input type="text" class="form-control" name="nombres" id="nombres" tabindex="1">
        </div>
        <div class="mb-3">
          <label for="apellidopat" class="form-label">Apellido Paterno</label>
          <input type="text" class="form-control" name="apellidopat" id="apellidopat" tabindex="2">
        </div>
        <div class="mb-3">
          <label for="apellidomat" class="form-label">Apellido Materno</label>
          <input type="text" class="form-control" name="apellidomat" id="apellidomat" tabindex="3">
        </div>
        <div class="mb-3">
          <label for="dni" class="form-label">DNI</label>
          <input type="text" class="form-control" name="dni" id="dni" tabindex="4">
        </div>
        <div class="mb-3">
          <label for="fechanacimiento" class="form-label">Fecha Nacimiento</label>
          <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" tabindex="5">
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="number" class="form-control" name="telefono" id="telefono" tabindex="6">
        </div>
        <div class="mb-3">
          <label for="direccion" class="form-label">Dirección</label>
          <input type="text" class="form-control" name="direccion" id="direccion" tabindex="7">
        </div>
        <a href="/personas" class="btn btn-secondary" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
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
