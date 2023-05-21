<h2> Tabla de Flotilla</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">details</th>
        <th scope="col">passenger</th>
        <th scope="col">doors</th>
        <th scope="col">cost</th>
        <th scope="col">pic</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($flots as $flot)
          
     
      <tr>
        <th scope="row">{{$flot-> id}}</th>
        <td scope="row">{{$flot-> details}}</td>
        <td scope="row">{{$flot-> passenger}}</td>
        <td scope="row">{{$flot-> doors}}</td>
        <td scope="row">{{$flot-> cost}}</td>
        <td><img src={{asset('storage/flot/'.$flot-> pic)}} style="width:60px;height:60px;"></td>
        <td><a href="/admin/flot/{{$flot->id}}/edit">editar</a></td>
        <td><a href="/admin/flot/{{$flot->id}}" >borrar</a></td>
        
      </tr>
      
      @endforeach
    </tbody>
  </table>