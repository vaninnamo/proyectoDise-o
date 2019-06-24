<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MaxElec - Autenticacion </title>
    {!!Html::style('css/bootstrap2.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>
        
        <nav class="navbar navbar-primary navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="/admin">MAXELEC.SA</a>
            </div>
        </nav>
            <div class="col-md-8 col-md-offset-2 alert alert-danger alert-dismissible hide text-center" id="alert" >
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error! </strong> Usuario y contraseña incorrecta, vuelva a intentarlo, o comuniquese con el administrador
            </div>
        <div class="col-md-9 col-md-offset-5">
        
            <br>            
            <form name="login" class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-3 mb-2 text-center">
                        <h3 class="" style="color:#337ab7 ">Autenticación</h3>
                    </div>
                </div>                
                <br>
                <div class="row">
                <div class="col-md-3 mb-2 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="usuario" placeholder="Ingrese usuario" value="" required>
                </div>
                </div>
                <br>
                <div class="row">
                <div class="col-md-3 mb-2 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="contraseña" placeholder="Ingrese contraseña" value="" required>
                </div>
                </div>
                <br>
                <div class="col-md-3 mb-2 text-center">
                    <hr>
                <div class="form-inline"></div>
                    <button type="button" class="btn btn-success" onclick="window.location.href='{!!URL::to('/')!!}'">Volver a la Web</button>
                    <button type="button" class="btn btn-info" id="btningresar">Ingresar</button>
                    
            </form>
        </div>
    

 
     {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap2.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

</body>
<script type="text/javascript">
    
    $('#btningresar').click(function() {
        
                var usuario=document.login.usuario.value; 
                var password=document.login.contraseña.value; 
                if (usuario=="postvta1" && password=="1234") { 
                    window.location.href='{!!URL::to('/admin')!!}'; 
                } 
                else if (usuario=="tecnico1" && password=="1234") { 
                    window.location.href='{!!URL::to('/adminT')!!}'; 
                } 
                else if (usuario=="gerente1" && password=="1234") { 
                    window.location.href='{!!URL::to('/adminG')!!}'; 
                } 
                else if (usuario=="admin" && password=="1234") { 
                    window.location.href='{!!URL::to('/adminSGP')!!}'; 
                } 
                else { 
                    $('#alert').replaceWith('<div class="col-md-8 col-md-offset-2 alert alert-danger alert-dismissible text-center" id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error! </strong> Usuario y contraseña incorrecta, vuelva a intentarlo, o comuniquese con el administrador</div>');                 
                } 

    });
    
</script>

</html>