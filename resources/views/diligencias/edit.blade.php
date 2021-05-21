@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
    <form action="/diligencias/{{$diligencia->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="idusuario" class="form-label">Usuario</label>
          <input type="text" class="form-control" name="idusuario" id="idusuario" tabindex="1" value="{{$diligencia->idusuario}}">
        </div>
        <div class="mb-3">
          <label for="fechahoraingreso" class="form-label">Fecha y hora de Ingreso</label>
          <input type="datetime-local" class="form-control" name="fechahoraingreso" id="fechahoraingreso" tabindex="2" value="{{$diligencia->fecha_hora_ingreso}}">
        </div>
        <div class="mb-3">
          <label for="motivo" class="form-label">Motivo</label>
          <input type="text" class="form-control" name="motivo" id="motivo" tabindex="3" value="{{$diligencia->motivo}}">
        </div>
        <div class="mb-3">
          <label for="tiempo" class="form-label">Tiempo</label>
          <input type="time" class="form-control" name="tiempo" id="tiempo" tabindex="4" value="{{$diligencia->tiempo}}">
        </div>
        <div class="mb-3">
          <label for="fechahoraretorno" class="form-label">Fecha y hora de Retorno</label>
          <input type="datetime-local" class="form-control" name="fechahoraretorno" id="fechahoraretorno" tabindex="5" value="{{$diligencia->fecha_hora_retorno}}">
        </div>
        <div class="mb-3">
          <label for="estado" class="form-label">Estado</label>
          <input type="text" class="form-control" name="estado" id="estado" tabindex="6" value="{{$diligencia->estado}}">
        </div>
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <textarea class="form-control" name="descripcion" id="descripcion" tabindex="7">{{$diligencia->descripcion}}</textarea>
        </div>
        <a href="/diligencias" class="btn btn-secondary" tabindex="8">Cancelar</a>
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
