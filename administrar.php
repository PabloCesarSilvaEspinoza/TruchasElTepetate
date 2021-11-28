<!DOCTYPE html>
<!--Página administrar -->
<html lang="es">
  <head>
    <title> Sistema de administración</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="descripcion" content="Sistema de administración"/>
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
    <!--Menu vertical estilo hamburguesa-->
    <nav class="cyan darken-2">
      <div class="nav-wrapper">
        <a href="#" data-target="menu" class="sidenav-trigger show-on-large"><i class="material-icons left">menu</i>Menu</a>
        <ul class="sidenav grey lighten-4" id="menu">
          <li class="center"><img class="responsive-img" src="user.png" alt="Imagen del actual usuario" width="120"></li>
          <li class="cyan darken-2 center"><a class="white-text" href="modificarInfPersonal.php">José A.</a></li>
          <h6 class="center black-text">Administrar</h6>
          <li><a class="dropdown-trigger cyan-text text-darken-2" href="#!" data-target="desplegable_produccion">Producción<i class="material-icons right">expand_more</i></a></li>
          <li><a class="dropdown-trigger cyan-text text-darken-2" href="#!" data-target="desplegable_pagina">Página web<i class="material-icons right">expand_more</i></a></li>
          <li><a class="cyan-text text-darken-2" href="gestorPrincipal.php">Regresar a menu principal<i class="material-icons right black-text">arrow_back</i></a></li>
        </ul>
        <!--Menu desplegable Producción-->
        <ul id="desplegable_produccion" class="dropdown-content">
          <li><a class="cyan-text text-darken-2" href="administrarPEstanque.php">Editar estanque</a></li>
          <li class="divider blue-grey lighten-5"></li>
          <li><a class="cyan-text text-darken-2" href="administrarStock.php">Stock</a></li>
          <li class="divider blue-grey lighten-5"></li>
          <li><a class="cyan-text text-darken-2" href="administrarPResumen.php">Resumen</a></li>
        </ul>
        <!--Menu desplegable Página-->
        <ul id="desplegable_pagina" class="dropdown-content">
          <li><a class="cyan-text text-darken-2" href="administrarWConocenos.php">Conocenos</a></li>
          <li class="divider blue-grey lighten-5"></li>
          <li><a class="cyan-text text-darken-2" href="administrarWReceta.php">Recetas</a></li>
          <li class="divider blue-grey lighten-5"></li>
          <li><a class="cyan-text text-darken-2" href="administrarWProducto.php">Productos</a></li>
          <li class="divider blue-grey lighten-5"></li>
          <li><a class="cyan-text text-darken-2" href="administrarWContacto.php">Contacto</a></li>
          <li class="divider blue-grey lighten-5"></li>
          <li><a class="cyan-text text-darken-2" href="administrarWInicio.php">Inicio</a></li>
        </ul>
      </div>
    </nav>

    <h4 class="center">Administrar</h4>

    <!--Script para la ativación del menu vertical estilo hamburguesa -->
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

    <script src="t.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  </body>
</html>
