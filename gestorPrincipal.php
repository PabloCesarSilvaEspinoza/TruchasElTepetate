<?php
    SESSION_START();
    $nombre=$_SESSION['Nombre'];
?>
<!DOCTYPE html>

<!--Página principal gestor -->
<html lang="es">
    
    <head>
        <title> Sistema Gestor</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content=""/>
        <meta name="descripcion" content="Sistema de gestion de Truchas el Tepetate"/>
        <meta name="author" content=""/>
        <!--materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <!--Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified JavaScript -->
        <script src="js/materialize.min.js"></script>
        <!--Informar que el sitio esta optimizado para moviles-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
  <body>
      
    <!--Menu vertical estilo hamburguesa new-->
    <nav class="cyan darken-2">
        <div class="nav-wrapper">
        <a href="#" data-target="menu" class="sidenav-trigger show-on-large"><i class="material-icons left">menu</i>Menu</a>
        <ul class="sidenav grey lighten-4" id="menu">
            <li class="center"><img class="responsive-img" src="user.png" alt="Imagen del actual usuario" width="120"></li>
            <li class="cyan darken-2 center"><a class="white-text" href="modificarInfPersonal.html">José A.</a></li>
            <li><a class="cyan-text text-darken-2" href="gestorPrincipal.php">Inicio<i class="material-icons right black-text">arrow_back</i></a></li>
            <li><a class="dropdown-trigger cyan-text text-darken-2" href="#!" data-target="desplegable_Registrar">Registrar<i class="material-icons right">expand_more</i></a></li>
            <li><a class="dropdown-trigger cyan-text text-darken-2" href="#!" data-target="desplegable_Consumo">Consumo<i class="material-icons right">expand_more</i></a></li>
            <li><a class="dropdown-trigger cyan-text text-darken-2" href="#!" data-target="desplegable_Consultar">Consultar<i class="material-icons right">expand_more</i></a></li>
            <li><a class="dropdown-trigger cyan-text text-darken-2" href="#!" data-target="desplegable_Administrar">Administrar<i class="material-icons right">expand_more</i></a></li>
            <li><a class="cyan-text text-darken-2" href="salir.php">Cerar Sesion</a></li>
        </ul>   
        <!--Menu desplegable Registrar-->
        <ul id="desplegable_Registrar" class="dropdown-content">
            <li class="divider blue lighten-5"></li>
            <li class="cyan darken-2 center"><a class="white-text" href="#!">Gasto</a></li>
            <li class="divider blue-grey lighten-5"></li>
            <li><a class="cyan-text text-darken-2" href="registrarGServicio.php">Operacional</a></li>
            <li><a class="cyan-text text-darken-2" href="registrarGSalario.php">Salarios</a></li>
            <li><a class="cyan-text text-darken-2" href="registrarGInsumo.php">Registro de Insumos</a></li>
            <li class="divider blue lighten-5"></li>
            <li class="cyan darken-2 center"><a class="white-text" href="#!">Ingreso</a></li>
            <li class="divider blue-grey lighten-5"></li>
            <li><a class="cyan-text text-darken-2" href="registrarIVenta.php">Ventas</a></li>
            <li><a class="cyan-text text-darken-2" href="registrarIOtro.php">Otros</a></li>
        </ul>
        <!--Menu desplegable Consumo-->
        <ul id="desplegable_Consumo" class="dropdown-content">
            <li class="divider blue lighten-5"></li>
            <li class="cyan darken-2 center"><a class="white-text" href="#!">Consumo</a></li>
            <li class="divider blue-grey lighten-5"></li>
            <li><a class="cyan-text text-darken-2" href="Consumos.php">Consumir</a></li>
        </ul>
        <!--Menu desplegable Consultar-->
        <ul id="desplegable_Consultar" class="dropdown-content">
            <li class="divider blue lighten-5"></li>
            <li class="cyan darken-2 center"><a class="white-text" href="#!">Gastos</a></li>
            <li class="divider blue-grey lighten-5"></li>
            <li><a class="cyan-text text-darken-2" href="consultarGServicio.php">Servicio</a></li>
            <li><a class="cyan-text text-darken-2" href="consultarGSalario.php">Salario</a></li>
            <li><a class="cyan-text text-darken-2" href="consultarGInsumo.php">Insumos</a></li>
            <li class="divider blue lighten-5"></li>
            <li class="cyan darken-2 center"><a class="white-text" href="#!">Ingresos</a></li>
            <li class="divider blue-grey lighten-5"></li>
            <li><a class="cyan-text text-darken-2" href="consultarIVenta.php">Ventas</a></li>
            <li><a class="cyan-text text-darken-2" href="consultarIOtro.php">Otros</a></li>
            <li class="divider blue-grey lighten-5"></li>
            <li><a class="cyan-text text-darken-2" href="#!">Resumen</a></li>
        </ul>
        <!--Menu desplegable Administrar-->
        <ul id="desplegable_Administrar" class="dropdown-content">
            <li class="divider blue lighten-5"></li>
            <li class="cyan darken-2 center"><a class="white-text" href="#!">Produccion</a></li>
            <li class="divider blue-grey lighten-5"></li>
            <li><a class="cyan-text text-darken-2" href="administrarPEstanque.php">Editar estanque</a></li>
            <li><a class="cyan-text text-darken-2" href="administrarStock.php">Stock</a></li>
            <li><a class="cyan-text text-darken-2" href="administrarPResumen.php">Resumen</a></li>
            <li class="divider blue lighten-5"></li>
            <li class="cyan darken-2 center"><a class="white-text" href="#!">Pagina Web</a></li>
            <li class="divider blue-grey lighten-5"></li>
            <li><a class="cyan-text text-darken-2" href="administrarWInicio.php">Inicio</a></li>
            <li><a class="cyan-text text-darken-2" href="administrarWConocenos.php">Conocenos</a></li>
            <li><a class="cyan-text text-darken-2" href="administrarWReceta.php">Recetas</a></li>
            <li><a class="cyan-text text-darken-2" href="administrarWProducto.php">Productos</a></li>
            <li><a class="cyan-text text-darken-2" href="administrarWContacto.php">Contacto</a></li>
        </ul>
        </div>
    </nav>
    
    <h3 class="center">¡Bienvenido!</h3>
    <h1 class="center"><img class="responsive-img center" src="logo.png" alt="Logo de la empresa el Tepetate" width="535"></h1>

    <!--Script para la ativación del menu vertical -->
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>
      
    <!--Script para la ativación del menu desplegable -->
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems,{coverTrigger:false});
        });
    </script>

  </body>
</html>
