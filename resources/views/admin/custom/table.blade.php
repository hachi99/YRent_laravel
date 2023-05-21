<h2> Tabla de Clientes</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">last_name</th>
        <th scope="col">email</th>
        <th scope="col">telephone</th>
        <th scope="col">license</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customs as $custom)
          
     
      <tr>
        <th scope="row">{{$custom-> id}}</th>
        <td scope="row">{{$custom-> name}}</td>
        <td scope="row">{{$custom-> last_name}}</td>
        <td scope="row">{{$custom-> email}}</td>
        <td scope="row">{{$custom-> telephone}}</td>
        <td scope="row">{{$custom-> license}}</td>
        <td><a href="/admin/custom/{{$custom->id}}/edit">editar</a></td>
        <td><a href="/admin/custom/{{$custom->id}}" >borrar</a></td>
      </tr>
      
      @endforeach
    </tbody>
    <td>
      
          <i class="fa fa-edit"></i>
      </a>
  </td>
  <td>
      
  </table>