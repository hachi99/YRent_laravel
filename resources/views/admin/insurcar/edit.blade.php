@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
<h1> Registrar nuevo seguro EDITAR</h1>
<form class="mt-8" method="POST" action="/admin/insurcar/{{$insurcar->id}}"  role="form">
  @csrf
  @method('PUT')
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Tipo</label>
      <input type="text" class="form-control" id="validationCustom02" name="type" value="{{$insurcar->type}}"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Caracteristicas</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="validationCustomUsername" name="characteristic" value="{{$insurcar->characteristic}}" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Costo</label>
      <input type="text" class="form-control" id="validationCustom03" name="cost" value="{{$insurcar->cost}}"  required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-12 py-5">
      <button class="btn btn-primary" type="submit">Subir a tabla</button>
    </div>
  </form>
@endsection