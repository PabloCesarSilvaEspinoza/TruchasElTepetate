<!DOCTYPE html>
<!--Página de ingreso a trabajadores -->
<html lang="es">
  <head>
    <title>Compras</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="descripcion" content="Ingreso para Comprar Productos de Truchas el Tepetate"/>
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
    <nav class="cyan darken-2">
      <div class="container">
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="centere">
            <li><a href="promocional.php" class="cyan darken-3">
              <i class="material-icons grey-text text-darken-3 left">home_work</i>Principal</a></li>
            </ul>
            <ul>
              <a href="#" class="brand-logo right"><img class="responsive-img" src="logo.png" alt="Logo de la empresa el Tepetate" width="100"></a>
            </ul>
          </div>
        </div>
      </nav>

      <div class="section container">
        <form action="validaIngresoCompras.php" method="post" name="ingresar" id="ingresar">
      <div class="row">
        <div class="input-field col s11 m4">
          <i class="material-icons prefix ">account_circle</i>
          <label class="black-text" for="usuario">Usuario</label>
          <input placeholder="Ingresa tu nick" id="usuario" name="usuario" type="text" class="validate" required>
        </div>
        <div class="input-field col s11 m4 push-m3">
          <i class="material-icons prefix ">lock</i>
          <label class="black-text" for="contra">Contraseña</label>
          <input placeholder="Ingresa contraseña" name="password" id="password" type="password" class="validate" required>
        </div>
        <div class="col s6">
        <button class="btn waves-effect waves-light"   type="submit" >Ingresar
        </button>
      </div>
      </div>
    </form>
      </div>


      </body>
</html>
