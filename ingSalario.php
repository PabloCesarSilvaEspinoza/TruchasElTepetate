<?php
	SESSION_START();
	include('bd.php');
        $id=$_SESSION['idUsuario'];       
        $gasto=$_POST['gasto'];
        $empleado=$_POST['empleado'];
       date_default_timezone_set('America/Mexico_City');
        $fecha=date('Y-m-d');
            $query="INSERT INTO gastoop (costo,descripcion,fecha,idAdministrador,empleado)
            VALUES('".$gasto."','Salario','".$fecha."','".$id."','".$empleado."')";
            bd_consulta($query);
            header("Location: registrar.php");
?>