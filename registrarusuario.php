<?php
  include('bd.php');
    $nick=$_REQUEST['usuario'];
    $query="SELECT nick FROM usuario WHERE nick='$nick'";
    $result=bd_consulta($query);
    $row=mysqli_num_rows($result);
    if($row==0)
        echo "Usuario Disponible";
    else 
        echo "Usuario no disponible";

?>