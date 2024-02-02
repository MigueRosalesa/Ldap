<!-- <form action="/guardar" method="POST">
  
  <div class="form-group row">
    <label for="inputvehiculo" class="col-sm-2 col-form-label">Alumnos</label>
    <div class="col-sm-10">
      <input name="vehiculo" type="text" class="form-control" id="inputvehiculo" placeholder="Auto o Camioneta">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputmodelo" class="col-sm-2 col-form-label">Modelo</label>
    <div class="col-sm-10">
      <input name="modelo" type="text" class="form-control" id="inputmodelo" placeholder="Modelo">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPuertas" class="col-sm-2 col-form-label">Puertas</label>
    <div class="col-sm-10">
      <input name="puertas" type="text" class="form-control" id="inputPuertas" placeholder="Puertas">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputLuces" class="col-sm-2 col-form-label">Luces</label>
    <div class="col-sm-10">
      <input name="luces" type="text" class="form-control" id="inputLuces" placeholder="Luces">
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="direccion_asistida" type="checkbox" id="lbl_da">
        <label class="col-sm-2 form-check-label" for="lbl_da">
          direccion asistida
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="abs" type="checkbox" id="lbl_abs">
        <label class="col-sm-2 form-check-label" for="lbl_abs">
          ABS
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="airbags" type="checkbox" id="lbl_airbags">
        <label class="col-sm-2 form-check-label" for="lbl_airbags">
          Airbags
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form> -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
