<?php
	SESSION_START();
	include('bd.php');
        $id=$_SESSION['idUsuario'];        
        $cantgast=$_POST['cantgast'];
        $descrip=$_POST['descrip'];
      date_default_timezone_set('America/Mexico_City');
        $fecha=date('Y-m-d');
            $query="INSERT INTO gastoop (costo,descripcion,fecha,idAdministrador,empleado)
            VALUES('".$cantgast."','".$descrip."','".$fecha."','".$id."','Gasto Operacional')";
            bd_consulta($query);
            header("Location: registrar.php");
?>