@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
    <form action="/personas/{{$permiso->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="idnivel" class="form-label">Nivel</label>
          <input type="text" class="form-control" name="idnivel" id="idnivel" tabindex="1" value="{{$permiso->idnivel}}">
        </div>
        <div class="mb-3">
          <label for="usuarios" class="form-label">Usuarios</label>
          <input type="text" class="form-control" name="usuarios" id="usuarios" tabindex="2" value="{{$permiso->usuarios}}">
        </div>
        <div class="mb-3">
          <label for="personas" class="form-label">Personas</label>
          <input type="text" class="form-control" name="personas" id="personas" tabindex="3" value="{{$permiso->personas}}">
        </div>
        <div class="mb-3">
          <label for="visitas" class="form-label">Visitas</label>
          <input type="text" class="form-control" name="visitas" id="visitas" tabindex="4" value="{{$permiso->visitas}}">
        </div>
        <div class="mb-3">
          <label for="permisos" class="form-label">Permisos</label>
          <input type="text" class="form-control" name="permisos" id="permisos" tabindex="5" value="{{$permiso->permisos}}">
        </div>
        <div class="mb-3">
          <label for="reportepermisos" class="form-label">Reporte Permisos</label>
          <input type="text" class="form-control" name="reportepermisos" id="reportepermisos" tabindex="6" value="{{$permiso->reporte_permisos}}">
        </div>
        <div class="mb-3">
          <label for="diligencias" class="form-label">Diligencias</label>
          <input type="text" class="form-control" name="diligencias" id="diligencias" tabindex="7" value="{{$permiso->diligencias}}">
        </div>
        <div class="mb-3">
          <label for="reportediligencias" class="form-label">Reporte Diligencias</label>
          <input type="text" class="form-control" name="reportediligencias" id="reportediligencias" tabindex="8" value="{{$permiso->reporte_diligencias}}">
        </div>
        <a href="/permisos" class="btn btn-secondary" tabindex="9">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
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
