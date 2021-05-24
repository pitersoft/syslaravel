@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nuevo Registro</h1>
@stop

@section('content')
    <form action="/users" method="POST">
        @csrf
        <div class="mb-3">
          <label for="idnivel" class="form-label">Nivel</label>
          <input type="text" class="form-control" name="idnivel" id="idnivel" tabindex="1">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nombres</label>
          <input type="text" class="form-control" name="name" id="name" tabindex="2">
        </div>
        <div class="mb-3">
          <label for="apellidos" class="form-label">Apellidos</label>
          <input type="text" class="form-control" name="apellidos" id="apellidos" tabindex="3">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" tabindex="4">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" id="password" tabindex="5">
        </div>
        <div class="mb-3">
          <label for="login" class="form-label">Login</label>
          <input type="text" class="form-control" name="login" id="login" tabindex="6">
        </div>
        <div class="mb-3">
          <label for="estado" class="form-label">Estado</label>
          <input type="text" class="form-control" name="estado" id="estado" tabindex="7">
        </div>
        <a href="/users" class="btn btn-secondary" tabindex="8">Cancelar</a>
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
