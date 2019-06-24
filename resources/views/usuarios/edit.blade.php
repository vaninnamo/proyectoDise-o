@extends('layouts.admin')
@section('content')
<div class="col-md-8 order-md-1">
     <br>
      <form class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-4 mb-2">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" id="usuario" placeholder="Ingrese usuario" value="UsuariopOpVta1" required>
          </div>
          <div class="col-md-4 mb-2">
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" placeholder="Ingrese contraseña" value="psvta1" required>
          </div>
          <div class="col-md-4 mb-2">
            <label for="permiso">Permiso</label>
            <select class="form-control" id="permiso" required="">
                <option value="">Categoría 2</option>
                <option>Categoría 1</option>
                <option>Categoría 2</option>
                <option>Categoría 3</option>
            </select>
           </div>
        </div>        
        <hr class="mb-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Guardar
        </button>
       
      </form>
    </div>
    <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Usuario Editado</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
             El usuario ah sido modificado correctamente
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href='{!!URL::to('/listausu')!!}'">Cerrar</button>
            </div>

          </div>
        </div>
      </div>
    
        
@endsection