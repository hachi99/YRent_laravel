<h2> Tabla de seguros</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">type</th>
        <th scope="col">characteristic</th>
        <th scope="col">cost</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($insurcars as $insurcar)
          
     
      <tr>
        <th scope="row">{{$insurcar-> id}}</th>
        <td scope="row">{{$insurcar-> type}}</td>
        <td scope="row">{{$insurcar-> characteristic}}</td>
        <td scope="row">{{$insurcar-> cost}}</td>
        <td><a href="/admin/insurcar/{{$insurcar->id}}/edit">editar</a></td>
        <td><a href="/admin/insurcar/{{$insurcar->id}}" >borrar</a></td>
      
      </tr>
      
      @endforeach
    </tbody>
  </table>