@extends('layouts.plantillabase')
@section('contenido')
  <div class="text-center">
    <br><br><br><br>
    <div class="card card-3">
      <div class="card-body">
        @if($errors->any())
          @foreach($errors->all() as $error)
            <div style="width: 100%;" class="alert alert-danger text-center">{{$error}}</div>
          @endforeach
        @endif
        <div></div>
        <form  action="/login" method="POST" class="form-signin">
            @csrf
            <img class="mb-4" src="../favicons/favicon.ico" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
            <input type="email" id="inputEmail" class="form-control w-3" placeholder="Dirección de correo electrónico"  autofocus name="email" value="{{old('email')}}">
            <br>
            <input type="password" id="inputPassword" class="form-control w-3" placeholder="Contraseña"  name="password">
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="Recuérdame"> Recuérdame
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
            <p class="mt-5 mb-3 text-muted">&copy; {{date('Y')}}</p>
          </form>
      </div>
    </div>
  </div>
@stop
