@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
<h1> Promos de correos EDITAR</h1>
<form class="row g-3" method="POST" action="/admin/subscrip/{{$subscrip->id}}"  role="form">
  @csrf
  @method('PUT')
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" name="Name" value="{{$subscrip->Name}}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Email</label>
      <input type="text" class="form-control" id="validationCustom02" name="email" value="{{$subscrip->email}}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Telefono</label>
      <div class="input-group has-validation">
        
        <input type="text" class="form-control" id="validationCustomUsername" name="telephone" value="{{$subscrip->telephone}} "aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
   
    <div class="col-12 py-5">
      <button class="btn btn-primary" type="submit">Subir a tabla</button>
    </div>
@endsection