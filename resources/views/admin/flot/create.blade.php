<h1> Registrar nuevo vehiculo en la flota</h1>
<form class="row g-3" method="POST" action="/admin/flot"  enctype="multipart/form-data" role="form">
  @csrf
<form class="row g-3" novalidate>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Detalles</label>
      <input type="text" class="form-control" id="validationCustom02" name="details" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Pasajeros</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="validationCustomUsername" name="passenger" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div> 
    </div>
    <div class="col-md-2">
      <label for="validationCustom03" class="form-label">Puertas</label>
      <input type="text" class="form-control" id="validationCustom03" name="doors" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom05" class="form-label">Precio</label>
      <input type="text" class="form-control" id="validationCustom05" name="cost" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-6">
      <label for="formFile" class="form-label">Select Image</label>
      <input class="form-control" type="file" id="formFile" name="pic" accept="image/*" required>
    <div class="invalid-feedback">
      Please provide a valid file.
    </div>
  </div>

    <div class="col-12 py-5">
      <button class="btn btn-primary" type="submit">Subir a tabla</button>
    </div>
  </form>