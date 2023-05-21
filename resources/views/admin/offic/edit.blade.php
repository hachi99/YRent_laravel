@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
<h1> Oficinas registradas EDITAR</h1>
<form class="mt-8" method="POST" action="/admin/offic/{{$offic->id}}"  role="form">
  @csrf
  @method('PUT')
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Nombre de la Oficina</label>
      <input type="text" class="form-control" id="validationCustom02" name="place_name" value="{{$offic->place_name}}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Direccion</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="validationCustomUsername" name="address" value="{{$offic->address}}" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Telefono</label>
      <input type="text" class="form-control" id="validationCustom03" name="telephone" value="{{$offic->telephone}}" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Horario</label>
      <input type="text" class="form-control" id="validationCustom05"name="schedule" value="{{$offic->schedule}}" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>

    <div class="col-12 py-5">
      <button class="btn btn-primary" type="submit">Subir a tabla</button>
    </div>
  </form>
@endsection