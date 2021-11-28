<?php
    include('bd.php');
    $query="SELECT * 
		FROM receta";
$result=bd_consulta($query);
?>

<!DOCTYPE html>
<!--Página de recetas -->
<html lang="es">
  <head>
    <title> Recetas</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="descripcion" content="Recetas de Truchas el Tepetate"/>
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
      
        <div class='container'>
            <h3 class='center'>Nuestras recetas</h3>

            <div class='row'>
                <div class='col s12'>
                   <?php  while($row=mysqli_fetch_array($result)){
                            echo "<div class='col s12 m6 l4 section'>
                             <div class='card'>
                                 <div class='card-image'>
                                     <img style='height:230px; width:100%;' src='data:image/*;base64,".base64_encode( $row['fotoreceta'] )."'>
                                 </div>
                                 <div class='card-content'>
                                     <span class='card-title'>".$row['titulo']."</span>
                                     <p>".$row['resumen']."</p>
                                 </div>
                             </div>
                         </div>";  
                         }
                         ?>
                    </div>
                </div>
            
            </div>
      </body>
</html>
