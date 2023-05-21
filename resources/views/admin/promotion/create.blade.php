<h1> Promociones</h1>
<form class="mt-8" method="POST" action="/admin/promotion"  role="form">
  @csrf
    
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Tipo</label>
      <input type="text" class="form-control" id="validationCustom02" name="type" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Detalles</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="validationCustomUsername" name="detail" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Validez</label>
      <input type="date" class="form-control" id="validationCustom03" name="validity" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-12 py-5">
      <button class="btn btn-primary" type="submit">Subir a tabla</button>
    </div>
  </form>