
<h1> Clientes</h1>
<form class="row g-3" method="POST" action="/admin/custom"  role="form">
  @csrf
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" name="name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="validationCustom02" name="last_name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Email</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03"  class="form-label">Telefono - Maximo 11 caracteres numericos</label>
      <input type="phone" class="form-control" id="validationCustom03" name="telephone"  required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Numero de licencia</label>
      <input type="text" class="form-control" id="validationCustom05" name="license"  required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-12 py-5">
      <button  class="btn btn-primary" type="submit">Subir a tabla</button>
    </div>
  </form>

 