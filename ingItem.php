<?php
	SESSION_START();
	include('bd.php');
        $id=$_SESSION['idUsuario'];        
        $monto=$_POST['cantgast'];
        $nvoprod=$_POST['nvoprod'];
        $cant=$_POST['cant'];
        $medida=$_POST['medida'];
        $ite=$_POST['ite'];
       date_default_timezone_set('America/Mexico_City');
        $fecha=date('Y-m-d');
        $idI=0;

        if($ite=="Producto Nuevo"){
            $query="INSERT INTO item (nombreItem,tipoUnidad,cantidad)
            VALUES('".$nvoprod."','".$medida."','".$cant."')";
            bd_consulta($query);
            
            $query1="SELECT * FROM item WHERE nombreItem='".$nvoprod."'";
            $result=bd_consulta($query1);
            $row=mysqli_fetch_assoc($result);
            
            $idI=$row['idItem'];
            
            $query="INSERT INTO gasto (piezas,costo,fecha,idAdministrador,idItem)
            VALUES('".$cant."','".$monto."','".$fecha."','".$id."','".$idI."')";
            bd_consulta($query);

        }
        if($ite!="Producto Nuevo"){
            $query1="SELECT * FROM item WHERE nombreItem='".$ite."'";
            $result=bd_consulta($query1);
            $row=mysqli_fetch_assoc($result);
            
            $canti=$row['cantidad'];
            $idI=$row['idItem'];
            $canti=$canti+$cant;
            
            $query="UPDATE item 
                    SET 
                    cantidad = '".$canti."'
                    WHERE
                    idItem = '".$idI."' "; 
            $result=bd_consulta($query);

            $query="INSERT INTO gasto (piezas,costo,fecha,idAdministrador,idItem)
            VALUES('".$cant."','".$monto."','".$fecha."','".$id."','".$idI."')";
            bd_consulta($query);
        }
       header("Location: registrar.php");


    
        /*$query="INSERT INTO gastoop (costo,descripcion,fecha,idAdministrador,empleado)
            VALUES('".$gasto."','Salario','".$fecha."','".$id."','".$empleado."')";
            bd_consulta($query);
            header("Location: registrar.php");*/

?>