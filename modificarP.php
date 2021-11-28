<?php
    include('bd.php');
    $opc=$_POST['opcion'];
    $query="SELECT * FROM presentacion WHERE idPresentacion='$opc'";
    $result=bd_consulta($query);
    $row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<!--Página administrar -->
<html lang="es">
  <head>
    <title>ModificarProducto</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="descripcion" content="Sistema de administración de página web 'Conocenos'"/>
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

    <h4 class="center">Modificar Producto</h4>

    <div class="section container">
        <form action="guardarProductos.php" method="post" enctype="multipart/form-data">
          <div class="row">

            <div class="input-field col s12">      
                <textarea class="black-text" for="opc" id="opc" name="opc"style="display:none;">
                    <?php echo $row['idPresentacion']?>    
                </textarea>

            </div>
            
            <div class="input-field col s12">      
              <label class="black-text" for="nombre">Nombre</label>
              <textarea placeholder="Nombre del Producto" id="nombre" name="nombre" class="materialize-textarea"><?php echo "".$row['nombrePresentacion']."" ?></textarea>
            </div>
              
            <div class="input-field col s12">
              <label class="black-text" for="unidad">Unidad de Venta</label>
              <textarea placeholder="Unidad de Venta" id="unidad" name="unidad" class="materialize-textarea"><?php echo "".$row['unidadMedida']."" ?></textarea>
            </div>
              
            <div class="input-field col s12">
              <label class="black-text" for="precio">Precio de Venta</label>
            <input value="<?php echo "".$row['precio']."" ?>" id="cantgast" name="precio" type="number" class="validate" required min=0 step="any">
            </div>
              
            <div class="input-field col s12">
              <label class="black-text" for="descripcion">Descripcion</label>
              <textarea placeholder="Descripcion del Producto" id="descripcion" name="descripcion" class="materialize-textarea"><?php echo "".$row['descripcion']."" ?></textarea>
            </div>
                   
            <div class="input-field col s12">
              <label class="black-text" for="tipo">Tipo Trucha</label>
              <textarea placeholder="Tipo de Trucha" id="tipo" name="tipo" class="materialize-textarea"><?php       if($row['idTrucha']==1) echo "Blanca";
                else echo "Salmonada";?></textarea>
            </div>
        
            <div class="col s12">
            <div class='card-image'>
            <?php echo"
            <img  style='height:100%; width:350px;' class='responsive-img' src='data:image/*;base64,".base64_encode($row['foto'])."'"
                    
                    ?>
                </div>
             </div>
        
        <div class="col s12">
        <div class="file-field input-field">
                        <div class="btn">
                            <span>Seleccionar foto</span>
                            <input type="file" name="foto"  accept="image/*">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" >
                        </div>
        </div>
        </div>              
            <div class="col s12">
            <button class="btn waves-effect waves-light" type="submit" name="btn" onClick="alert('Guardar Cambios')">Confirmar
            </button>
          </div>
          </div>
        </form>
      </div>

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
