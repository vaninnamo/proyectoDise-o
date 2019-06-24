@extends('layouts.admin')
@section('content')

<div class="col-md-10 col-md-offset-4">
<br>
      <h3 class="mb-3" style="color:#337ab7">Registrar usuario</h3>
     <br>
      <form class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-4 mb-2">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" id="usuario" placeholder="Ingrese usuario" value="" required>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4 mb-2">
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" placeholder="Ingrese contraseña" value="" required>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4 mb-2">
            <label for="permiso">Permiso</label>
            <select class="form-control" id="permiso" required="">
                <option value="">Tipo de permiso</option>
                <option>Categoría 1</option>
                <option>Categoría 2</option>
                <option>Categoría 3</option>
                <option>Categoría 4</option>
            </select>
           </div>
        </div>
        <br>
        <div class="col-md-4 mb-2 text-right">
            <hr>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Guardar
          </button>
        </div>        
        
       
        <!-- <button class="btn btn-primary" type="submit" onclick="window.location.href='/page2'">Guardar</button> -->
      </form>
    </div>
    <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Usuario Guardado</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
             El usuario ah sido creado correctamente
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href='{!!URL::to('/listausu')!!}'">Cerrar</button>
            </div>

          </div>
        </div>
      </div>
    
        
@endsection