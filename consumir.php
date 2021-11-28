<?php
	SESSION_START();
	include('bd.php');
        $id=$_SESSION['idUsuario'];       
        $cant=$_POST['cant'];
        $ite=$_POST['ite'];
        date_default_timezone_set('America/Mexico_City');
        $fecha=date('Y-m-d');
		
        $query="SELECT *
		From item WHERE nombreItem='".$ite."'";
		$result=bd_consulta($query);
        $row=mysqli_fetch_assoc($result);
        
        $idIt=$row['idItem'];

        $query="INSERT INTO consumo (cantidad,fecha,idAdministrador,idItem)
        VALUES('".$cant."','".$fecha."','".$id."','".$idIt."')";
        bd_consulta($query);

        $canti=$row['cantidad']-$cant;
        $query="UPDATE item 
                    SET 
                    cantidad = '".$canti."'
                    WHERE
                    idItem = '".$idIt."' "; 
            $result=bd_consulta($query);
        bd_consulta($query);
       header("Location: Consumos.php");

?>
