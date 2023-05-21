@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')

<h1> Registrar nuevo vehiculo en la flota</h1>
<form class="row g-3" method="POST" action="/admin/flot/{{$flot->id}}" enctype="multipart/form-data" role="form">
  @csrf
  @method('PUT')
<form class="row g-3">
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Detalles</label>
      <input type="text" class="form-control" id="validationCustom02" name="details" value="{{$flot->details}}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Pasajeros</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="validationCustomUsername" name="passenger" value="{{$flot->passenger}}" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <label for="validationCustom03" class="form-label">Puertas</label>
      <input type="text" class="form-control" id="validationCustom03" name="doors" value="{{$flot->doors}}" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Precio</label>
      <input type="text" class="form-control" id="validationCustom05" name="cost" value="{{$flot->cost}}" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-6 my-2">
      <label for="formFile" class="form-label">Reemplazar imagen</label>
      <input class="form-control" type="file" id="formFile" name="pic"  value="{{$flot->pic}}">
    </div>
    <div class="col-md-6">
      Imagen Actual: --->
      <img src="{{ asset('storage/flot/'.$flot->pic)}}" style="width:25%;" alt="Imagen actual">
      
    </div>
    <div class="col-12 py-5">
      <button class="btn btn-primary" type="submit">Subir a tabla</button>
    </div>
  </form>
@endsection 