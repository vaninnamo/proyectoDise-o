@extends('layouts.admin')
@section('content')

<div class="col-md-8 order-md-1">
    <br>
    <div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissible hide text-center" id="alert" >
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Usuario Eliminado correctamente! </strong>
   </div>
    <table class="table">
        <thead>
                
                <th>Usuario</th>
                <th>Contraseña</th>  
                <th></th>              
            
        </thead>
        <tbody>
            <tr>
                <td>postvta1</td>
                <td>1234</td>
                <td class="text-center" ><button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/usuedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
                
            </tr>
            <tr>
                
                <td>postvta2</td>
                <td>1234</td>
                <td class="text-center"><button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/usuedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
                
            </tr>
            <tr>
                <td>postvta3</td>
                <td>1234</td>
                <td class="text-center"><button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/usuedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>      
            </tr>
            <tr>
                <td>tecnico1</td>
                <td>1234</td>
                <td class="text-center"><button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/usuedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>      
            </tr>
            <tr>
                <td>tecnico2</td>
                <td>1324</td>
                <td class="text-center"><button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/usuedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>      
            </tr>
            <tr>
                <td>gerente1</td>
                <td>1234</td>
                <td class="text-center"><button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/usuedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>      
            </tr>
            <tr>
                <td>gerente2</td>
                <td>1234</td>
                <td class="text-center"><button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/usuedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>   
            </tr>
            <tr>
                <td>gerente3</td>
                <td>1234</td>
                <td class="text-center"><button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/usuedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>   
            </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro de eliminar el usuario?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="eliminar"onclick="mostrar()">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    
    
    function mostrar(){
      $('#alert').replaceWith('<div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissible text-center" id="alert" ><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Usuario Eliminado correctamente! </strong></div>');                 
      
    }
    
</script>
   
@endsection