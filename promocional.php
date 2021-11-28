<?php
    include('bd.php');
    $query="SELECT * 
		FROM noticia";
    $result=bd_consulta($query);
    
    $query2="SELECT * 
		FROM informacion";
    $result2=bd_consulta($query2);
    $row2=mysqli_fetch_assoc($result2);
?>

<!DOCTYPE html>
<!--Página principal -->
<html lang="es">
  <head>
    <title> Sistemas Truchas</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="Truchas"/>
    <meta name="descripcion" content="Pantalla principal de Truchas el Tepetate"/>
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
    <!--Menu para pantallas pequeñas y medianas -->
    <nav class="cyan darken-2 nav-extended hide-on-large-only">
        <div class="container">
            <div class="nav-wrapper">
              <ul id="nav-mobile" class="center">
                  <li><a href="index.html" class="cyan darken-3">
                  <i class="material-icons grey-text text-darken-3">home_work</i></a></li>
                  <li><a href="conocenos.php">Conocenos</a></li>
                  <li><a href="collapsible.php">Recetas</a></li>
              </ul>
              <ul>
                  <a href="#" class="brand-logo right"><img class="responsive-img" src="logo.png" alt="Logo de la empresa el Tepetate" width="100"></a>
              </ul>
            </div>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left">
            <li><a href="producto.php">Productos</a></li>
            <li><a href="logcompras.php">Comprar</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left">
            
            <li><a href="trabajador.php">Ingresar</a></li>
            <li><a href="registrarUsr.php">Registrarse</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Menu para pantallas grandes -->
    <nav class="cyan darken-2 hide-on-med-and-down">
        <div class="container">
            <div class="nav-wrapper">
              <ul id="nav-mobile" class="center">
                  <li><a href="index.html" class="cyan darken-3">
                  <i class="material-icons grey-text text-darken-3">home_work</i></a></li>
                  <li><a href="conocenos.php">Conocenos</a></li>
                  <li><a href="receta.php">Recetas</a></li>
                  <li><a href="producto.php">Productos</a></li>
                  <li><a href="logcompras.php">Comprar</a></li>
                  <li><a href="contacto.php">Contacto</a></li>
                  <li><a href="ingresar.php">Ingresar</a></li>
                  <li><a href="registrarUsr.php">Registrarse</a></li>
              </ul>
              <ul>
                  <a href="#" class="brand-logo right"><img class="responsive-img" src="logo.png" alt="Logo de la empresa el Tepetate" width="120"></a>
              </ul>
            </div>
        </div>
    </nav>

  <!--Slider -->
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="trucha_plato.jpg" alt="Imagen promocional con slogan">
              <div class="caption right-align">
                <h2 class="grey-text text-lighten-4">Truchas el Tepetate</h2>
                <h3 class="light grey-text text-lighten-4"><?php echo "".$row2['slogan'].""; ?></h3>
              </div>
            </li>
            <li>
              <img src="trucha_plato2.jpeg">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<!--Tabla de noticias -->
  <div class='section container'>
    <h2>Noticias</h2>
    <div class='row'>
        <?php  while($row=mysqli_fetch_array($result)){
            echo "<div class='col s12 m6 l4 section'>
                <div class='card'>
                    <div class='card-image'>
                        <img style='height:230px; width:100%;' src='data:image/*;base64,".base64_encode( $row['foto'] )."'>
                    </div>
                    <div class='card-content'>
                        <span class='card-title'>".$row['titulo']."</span>
                        <p>".$row['resumen']."</p>
                    </div>
                    <div class='card-action'>
                        <a href='#'>Ir a la noticia</a>
                    </div>
                </div>
            </div>";  
            }
            ?>
    </div>
  </div>
    

  <!--Script de activación del slider -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.slider');
      var instances = M.Slider.init(elems,{interval:3500});
    });
  </script>
  </body>
</html>
