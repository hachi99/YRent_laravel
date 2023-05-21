<h2> Tabla de Promociones</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">type</th>
        <th scope="col">detail</th>
        <th scope="col">validity</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($promotions as $promotion)
          
     
      <tr>
        <th scope="row">{{$promotion-> id}}</th>
        <td scope="row">{{$promotion-> type}}</td>
        <td scope="row">{{$promotion-> detail}}</td>
        <td scope="row">{{$promotion-> validity}}</td>
        <td><a href="/admin/promotion/{{$promotion->id}}/edit">editar</a></td>
        <td><a href="/admin/promotion/{{$promotion->id}}" >borrar</a></td>
      </tr>
      
      @endforeach
    </tbody>
  </table>