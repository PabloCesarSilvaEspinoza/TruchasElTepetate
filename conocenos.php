<?php
    include('bd.php');
    $query="SELECT * 
	FROM informacion";
    $result=bd_consulta($query);
    $row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<!--Página de conocenos -->
<html lang="es">
  <head>
    <title> Conocenos</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="descripcion" content="Conocenos, Truchas el Tepetate"/>
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

      <div class="row">
        <div class="col s12 grey darken-2">
          <h4 class="center white-text">Conocenos</h4>
        </div>
         <div class="col s12 deep-orange lighten-1">
           <div class="col s12 m6 deep-orange lighten-1">
             <h6><?php echo "".$row['slogan']."" ?></h6>
             <img src="logo.png" width="70%" alt  ="Logo de la empresa el Tepetate" class="responsive-img">
           </div>
           <div class="col s12 m6 deep-orange lighten-2">
             <div class="card-panel teal">
               <h6>Misión</h6>
               <span><?php echo "".$row['mision']."" ?></span>
             </div>
             <div class="card-panel teal">
               <h6>Visión</h6>
               <span><?php echo "".$row['vision']."" ?></span>
             </div>
             <div class="card-panel teal">
               <h6>Valores</h6>
               <span><?php echo "".$row['valores']."" ?></span>
             </div>
           </div>
         </div>
      </div>

      </body>
</html>

