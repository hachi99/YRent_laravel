@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
     
@section('contenido')
<h1> Registrar nuevo vehiculo en la flota MOSTRAR</h1>
<form class="row g-3" method="POST" action="/admin/flot/{{$flot->id}}" enctype="multipart/form-data" role="form">
  @csrf
  @method('DELETE')
<form class="row g-3">
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Detalles</label>
      <input type="text" class="form-control" id="validationCustom02" name="details" value="{{$flot->details}}" disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Pasajeros</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="validationCustomUsername" name="passenger" value="{{$flot->passenger}}" aria-describedby="inputGroupPrepend" disabled>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <label for="validationCustom03" class="form-label">Puertas</label>
      <input type="text" class="form-control" id="validationCustom03" name="doors" value="{{$flot->doors}}" disabled>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Precio</label>
      <input type="text" class="form-control" id="validationCustom05" name="cost" value="{{$flot->cost}}" disabled>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-12 my-5">
      <a>Imagen:</a>
      <img src="{{ asset('storage/flot/'.$flot->pic)}}" style="width:200px;">
      
    </div>

    <div class="col-12 py-5">
      <button  class="btn btn-danger" type="submit">Borrar de tabla</button>
    </div>
  </form>

  @endsection