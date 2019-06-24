<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MaxElec - Administracion </title>
    {!!Html::style('css/bootstrap2.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">MAXELEC.SA</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        UsuarioPostVta1 <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="{!!URL::to('/login')!!}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li class="">
                            <a href="#"><i class="fa fa-gavel fa-fw"></i> Reclamos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/reclamoCreate')!!}"><i class='fa fa-plus fa-fw'></i> Nuevo Reclamo</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/listareclamos')!!}"><i class='fa fa-list-ol fa-fw'></i> Lista de Reclamos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide">
                            <a href="#"><i class="fa fa-phone fa-fw"></i> Llamadas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Registrar Llamada</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Lista de Llamadas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide">
                            <a href="#"><i class="fa fa-paper-plane fa-fw"></i> Consultas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Formularios Pendientes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Asistencias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/listaasistencias')!!}"><i class='fa fa-list-ol fa-fw'></i> Asistencias Pendientes</a>
                                </li>
                            </ul>
                        </li>
                       

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap2.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

</body>

</html>