<h1> Informacion de reserva</h1>
<form class="row g-3" method="POST" action="/admin/reserv"  role="form">
  @csrf
    
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">ID de oficina</label>
      <input type="text" class="form-control" id="validationCustom02" name="offic_id"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Fecha de recoleccion</label>
      <div class="input-group has-validation">
      
        <input type="date" class="form-control" id="validationCustomUsername" name="collectiondate" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Fecha de devolucion</label>
      <input type="date" class="form-control" id="validationCustom03" name="returndate" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">ID del vehiculo</label>
      <input type="text" class="form-control" id="validationCustom05" name="flot_id" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">ID de la promocion</label>
      <input type="text" class="form-control" id="validationCustom05" name="promotion_id"required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">ID del cliente</label>
      <input type="text" class="form-control" id="validationCustom05" name="custom_id" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">ID del seguro</label>
      <input type="text" class="form-control" id="validationCustom05" name="insurcar_id" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
 
    <div class="col-12 py-5">
      <button class="btn btn-primary" type="submit">Subir a tabla</button>
    </div>
  </form>