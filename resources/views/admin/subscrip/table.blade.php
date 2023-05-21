<h2>Tabla lista de correos</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">telephone</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($subscrips as $subscrip)
          
     
      <tr>
        <th scope="row">{{$subscrip-> id}}</th>
        <td scope="row">{{$subscrip-> Name}}</td>
        <td scope="row">{{$subscrip-> email}}</td>
        <td scope="row">{{$subscrip-> telephone}}</td>
        <td><a href="/admin/subscrip/{{$subscrip->id}}/edit">editar</a></td>
        <td><a href="/admin/subscrip/{{$subscrip->id}}" >borrar</a></td>
        
      </tr>
      
      @endforeach
    </tbody>
  </table>