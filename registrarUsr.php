<!DOCTYPE html>
<!--Página de registro a nuevos usuarios -->
<html lang="es">
  <head>
    <title> Registro</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="descripcion" content="Registro al sistema"/>
    <meta name="author" content=""/>

    <!--materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js"></script>
    <!--Informar que el sitio esta optimizado para moviles-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="js/prototype.js" type="text/javascript"></script>
    <script type="text/jscript">
        function registrarusuario(usuario){
        var url='registrarusuario.php';
        var parametros='usuario='+usuario.value;
        var ajax=new Ajax.Updater('comprobarusuario',url,{
        method: 'get',parameters: parametros
        });
        }
     </script>
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
        <form action="validaIngreso.php" method="post" name="ingresar" id="ingresar">
      
        <div class="row s12">
        <div class="col s6 m5">
        <div class="col s12">
          <div class="input-field col s11 ">
            <label class="black-text" for="nombre">Nombre(s)</label>
            <input placeholder="Tu nombre(s)" id="nombre" name="nombre" type="text" class="validate" required>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field col s11">
            <label class="black-text" for="aPaterno">Apellido paterno</label>
            <input placeholder="Tu apellido paterno" id="aPaterno" name="aPaterno" type="text" class="validate" required>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field col s11 ">
            <label class="black-text" for="aMaterno">Apellido materno</label>
            <input placeholder="Tu apellido materno" id="aMaterno" name="aMaterno" type="text" class="validate" required>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field col s11">
            <i class="material-icons prefix">phone</i>
            <label class="black-text" for="telefono">Teléfono</label>
            <input placeholder="Tu n° de teléfono" name="telefono" id="telefono" type="text" class="validate" required>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field col s11 ">
            <i class="material-icons prefix">account_circle</i>
            <label class="black-text" for="usuario">Nombre de usuario</label>
            <input onblur="registrarusuario(this);" placeholder="Nombre de usuario" id="usuario" name="usuario" type="text" required>
            <span id="comprobarusuario"></span>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field col s11">
            <i class="material-icons prefix">lock</i>
            <label class="black-text" for="contra">Contraseña</label>
            <input placeholder="Contraseña" name="password" id="password" type="password" class="validate" required>
          </div>
        </div>
        </div>
            <div class="col s6 m5">
                <div class="input-field col s12 ">
            <label class="black-text" for="estado">Dirección </label>
            <input placeholder="Estado" id="estado" name="estado" type="text" class="validate" required>

            <input placeholder="Municipio" id="municipio" name="municipio" type="text" class="validate" required>

            <input placeholder="Colonia" id="colonia" name="colonia" type="text" class="validate" required>
              
            <input placeholder="Calle" id="calle" name="calle" type="text" class="validate" required>               
            
            <input pattern="[0-9]{5}" name="codigo" id="codigo" class="validate" placeholder="Código Postal"> 
              
            <input placeholder="No Exterior" id="exterior" name="exterior" type="text" class="validate" required>         
              <input placeholder="No Interior" id="numeroInt" name="numeroInt" type="text" class="validate" >                   
            </div>
            </div>
        </div>      
          

        <div class="col s12">
          <button class="btn waves-effect waves-light" type="submit" >Registrarse</button>
        </div>
    </form>
  </div>

  </body>
</html>
