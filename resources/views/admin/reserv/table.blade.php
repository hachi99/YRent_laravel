<h2> Tabla de Reservaciones</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">office_id</th>
        <th scope="col">collectiondate</th>
        <th scope="col">returndate</th>
        <th scope="col">flot_id</th>
        <th scope="col">promotion_id</th>
        <th scope="col">custom_id</th>
        <th scope="col">insurcar_id</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reservs as $reserv)
          
     
      <tr>
        <th scope="row">{{$reserv-> id}}</th>
        <td scope="row">{{$reserv-> offic_id}}</td>
        <td scope="row">{{$reserv-> collectiondate}}</td>
        <td scope="row">{{$reserv-> returndate}}</td>
        <td scope="row">{{$reserv-> flot_id}}</td>
        <td scope="row">{{$reserv-> promotion_id}}</td>
        <td scope="row">{{$reserv-> custom_id}}</td>
        <td scope="row">{{$reserv-> insurcar_id}}</td>
        <td><a href="/admin/reserv/{{$reserv->id}}/edit">editar</a></td>
        <td><a href="/admin/reserv/{{$reserv->id}}" >borrar</a></td>
      </tr>
      
      @endforeach
    </tbody>
  </table>