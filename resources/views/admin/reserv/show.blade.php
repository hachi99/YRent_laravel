@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
<h1> Informacion de reserva MOSTRAR</h1>
<form class="row g-3" method="POST" action="/admin/reserv/{{$reserv->id}}"  role="form">
  @csrf
  @method('DELETE')  
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">ID de oficina</label>
      <input type="text" class="form-control" id="validationCustom02" name="office_id" value="{{$reserv->office_id}}" disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Fecha de recoleccion</label>
      <div class="input-group has-validation">
      
        <input type="date" class="form-control" id="validationCustomUsername" name="collectiondate" value="{{$reserv->collectiondate}}" aria-describedby="inputGroupPrepend" disabled>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Fecha de devolucion</label>
      <input type="date" class="form-control" id="validationCustom03" name="returndate" value="{{$reserv->returndate}}" disabled>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">ID del vehiculo</label>
      <input type="text" class="form-control" id="validationCustom05" name="flot_id" value="{{$reserv->flot_id}}" disabled>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">ID de la promocion</label>
      <input type="text" class="form-control" id="validationCustom05" name="promotion_id" value="{{$reserv->promotion_id}}" disabled>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">ID del cliente</label>
      <input type="text" class="form-control" id="validationCustom05" name="custom_id" value="{{$reserv->custom_id}}" disabled>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">ID del seguro</label>
      <input type="text" class="form-control" id="validationCustom05" name="insurcar_id" value="{{$reserv->insurcar_id}}" disabled>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
 
    <div class="col-12 py-5">
      <button  class="btn btn-danger" type="submit">Borrar de tabla</button>
    </div>
  </form>
@endsection