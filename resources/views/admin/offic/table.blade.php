<h2> Tabla de Oficinas</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre de la Oficina</th>
        <th scope="col">Direccion</th>
        <th scope="col">Horario</th>
        <th scope="col">Telefono</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($offics as $offic)
          
     
      <tr>
        <th scope="row">{{$offic-> id}}</th>
        <td scope="row">{{$offic-> place_name}}</td>
        <td scope="row">{{$offic-> address}}</td>
        <td scope="row">{{$offic-> schedule}}</td>
        <td scope="row">{{$offic-> telephone}}</td>
        <td><a href="/admin/offic/{{$offic->id}}/edit">editar</a></td>
        <td><a href="/admin/offic/{{$offic->id}}" >borrar</a></td>
      </tr>
      
      @endforeach

    </tbody>
  </table>