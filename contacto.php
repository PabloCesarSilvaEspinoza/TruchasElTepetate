<?php
    include('bd.php');
    $query="SELECT * 
		FROM contacto";
    $result=bd_consulta($query);
    $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<!--Página de contacto -->
<html lang="es">
  <head>
    <title> Contacto</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="descripcion" content="Contacto con Truchas el Tepetate"/>
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

        <h3 class="center">Contacto</h3>
        <!--Tabla de información -->
        <div class="section container">
            <div class="row">
                <div class="col s12 l6 center">
                    <div class="col s12">
                        <div class="col s12 m6 l12">
                            <h5>Dirección</h5>
                            <h6><?php echo "".$row['Direccion']."" ?></h6>
                        </div>
                        <div class="col l12 divider hide-on-med-and-down"></div>
                        <div class="col s12 m6 l12 ">
                            <h5>Teléfono</h5>
                            <h6><?php echo "".$row['telefono']."" ?></h6>
                        </div>
                    </div>
                    <div class="col l12 divider hide-on-med-and-down"></div>
                    <div class="col s12">
                        <div class="col s12 m6 l12 ">
                            <h5>Celular</h5>
                            <h6><?php echo "".$row['celular']."" ?></h6>
                        </div>
                        <div class="col l12 divider hide-on-med-and-down"></div>
                        <div class="col s12 m6 l12 ">
                            <h5>Correo</h5>
                            <h6><?php echo "".$row['correo']."" ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120198.74997104122!2d-101.27616529981242!3d19.70364166
                    1134476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0ba2b29da7e3%3A0x4016978679c8620!2sMorelia%2C%20Mich.!5e0
                    !3m2!1ses-419!2smx!4v1585893011300!5m2!1ses-419!2smx" width="100%" height="330" frameborder="0" style="border:0;" allowful
                    screen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col s12 center">
                <h5>Redes sociales:</h5> <a href="https://web.facebook.com/Granja-de-Trucha-Tepetates-1125220357665723/" target="_blank"><img src="Facebook-símbolo.png" width="100" height="50"></a>
                </div>
            </div>
        </div>
        
      </body>
</html>

