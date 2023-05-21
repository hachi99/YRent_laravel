<h2> Tabla de Facturacion</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">rfc</th>
        <th scope="col">reserv_id</th>
        <th scope="col">custom_id</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($facts as $fact)
      <tr>
        
        <th scope="row">{{$fact-> id}}</th>
        <td scope="row">{{$fact-> rfc}}</td>
        <td scope="row">{{$fact-> reserv_id}}</td>
        <td scope="row">{{$fact-> custom_id}}</td>
        <td><a href="/admin/fact/{{$fact->id}}/edit">editar</a></td>
        <td><a href="/admin/fact/{{$fact->id}}" >borrar</a></td>
       
      
      @endforeach
    </tbody>
  </table>