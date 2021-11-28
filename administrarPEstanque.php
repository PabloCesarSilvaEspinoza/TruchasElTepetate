<?php
    include('bd.php');    
    SESSION_START();
    $nombre=$_SESSION['Nombre'];
    $query2="SELECT idEstanque,nombre,tipoTrucha,numTruchas,etapa,peso,longitud,biomasa
        FROM estanque
        INNER JOIN trucha
        ON estanque.idTrucha=trucha.idTrucha";
    $result2=bd_consulta($query2);
?>
<!DOCTYPE html>

<!--Página principal gestor -->
<html l ang="es">
    
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
            <li><a class="cyan-text text-darken-2" href="administrarPEstanque.php">Estanques</a></li>
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
    
    <h3 class="center">Gestor de Estanques</h3>

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

  
  <!--Tabla de estanques -->
   <div class='section container'>
        <h3 class='center'>Estanques</h3>
       <div class='row'>
            <div class='col s12'>
                <?php  
                $estanques=9;
                $contador=0;
                
                while($estanques > $contador){
                    $row=mysqli_fetch_array($result2);
                    $contador++;
                    echo "
                        <div class='col s12 m6 l4'>
                            <div class='card'>
                                <div class='card-image waves-effect waves-block waves-light'>
                                    <img class='activator' style='height:230px; width:100%;' src='logo.png'>
                                </div>
                                <div class='card-content'>
                                    <span class='card-title activator grey-text text-darken-4'> " .$row['nombre']."<i class='material-icons right'>more_vert</i></span>
                                    <p><span class='cyan-text text-darken-2' style='font-size: 1.3em'>Tipo Trucha: </span>
                                    <span class='orange-text text-linghten-3' style='font-size: 1.3em'> " .$row['tipoTrucha']."</span>
                                    </p>
                                    <p>
                                    <span class='cyan-text text-darken-2' style='font-size: 1.3em'>Etapa: </span>
                                    <span class='orange-text text-linghten-3' style='font-size: 1.3em'> " .$row['etapa']."</span>
                                    </p>
                                </div>
                                <div class='card-reveal'>
                                    <span class='card-title grey-text text-darken-4'> " .$row['nombre']."<i class='material-icons right'>close</i></span>
                                    <li class='collection-item' style='font-size: 1.2em'>Descripción</li>
                                    <p style='font-size: 1.2em'>Tipo trucha: " .$row['tipoTrucha']."</p>
                                    <p style='font-size: 1.2em'>Cantidad: " .$row['numTruchas']."</p>
                                    <p style='font-size: 1.2em'>Peso Promedio: " .$row['peso']."</p>
                                    <p style='font-size: 1.2em'>Longitud Promedio: " .$row['longitud']."</p>
                                    <p style='font-size: 1.2em'>Biomasa: " .$row['biomasa']."</p>
                                </div>
                            </div>
                        </div>";
                    
                }
                ?>
            </div>
            
        </div>
    </div>
    
    <div class="section container">
        <form action="editEstanque.php" method="post" enctype="multipart/form-data">
         <div class="row">
             <div class="input-field col s20 m4">
                 <p></p>
                 <select name="opcion">
          <option value="" disabled selected></option>        
                     <?php 
                        mysqli_data_seek($result2,0);
                        while ($row=mysqli_fetch_assoc($result2)){ 
                        ?>
                        <OPTION value="<?php echo $row['idEstanque']?>"><?php echo $row['nombre'];?></OPTION>
                        <?php 
                        }
                     ?>
                 </select>
                 <label class="black-text col2" for="opcion" ><h6>¿Cual estanque deseas modificar?</h6></label>
             </div> 
            <div class="col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Confirmar
            </button>
                <a href="gestorPrincipal.php"><button class="btn waves-effect waves-light" type="button">atras</button></a>
          </div>
          </div>
        </form>
      </div>

  <!--Script de activación del slider -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.slider');
      var instances = M.Slider.init(elems,{interval:3500});
    });
  </script>
  <!--Mostrar contenido lista-->
  <script>
     document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
        });  
    </script>
  </body>
</html>
