<?php
    include('bd.php');
    $id=$_POST['opc'];
    $cant=$_POST['cantidad'];
    
    $query1="SELECT * FROM stock WHERE idStock='".$id."'";
    $result=bd_consulta($query1);
    $row=mysqli_fetch_assoc($result);
            
            $canti=$row['cantidad'];
            $canti=$canti+$cant;
            
            $query="UPDATE stock 
                    SET 
                    cantidad = '".$canti."'
                    WHERE
                    idStock = '".$id."' "; 
            $result=bd_consulta($query);
    header('Location:administrarStock.php');
?>