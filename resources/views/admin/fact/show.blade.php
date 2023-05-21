@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
<h1> Informacion de facturacion</h1>
<form class="mt-8" method="POST" action="/admin/fact/{{$fact->id}}"  role="form">
  @csrf
  @method('DELETE')
<form class="row g-3 needs-validation" novalidate>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">RFC</label>
      <input type="text" class="form-control" id="validationCustom02" name="rfc" value="{{$fact->rfc}}"  disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">ID de Reservacion</label>
      <div class="input-group has-validation">
       
        <input type="text" class="form-control" id="validationCustomUsername" name="reserv_id" value="{{$fact->reserv_id}}" aria-describedby="inputGroupPrepend" disabled>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">ID de Cliente</label>
      <input type="text" class="form-control" id="validationCustom03" name="custom_id" value="{{$fact->custom_id}}"  disabled>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    
    <div class="col-12 py-5">
      <button  class="btn btn-danger" type="submit">Borrar de tabla</button>
    </div>
  </form>
@endsection