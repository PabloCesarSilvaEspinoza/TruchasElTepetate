<?php
    include('bd.php');
    $peso=$_POST['peso'];
    $cantidad=$_POST['cantidad'];
    $idPres=$_POST['opc'];

    if($peso==0){
        $query="INSERT INTO stock (idPresentacion,cantidad)
        VALUES('".$idPres."','".$cantidad."')";
        $result=bd_consulta($query);    
    }
    else{
        $query="INSERT INTO stock (idPresentacion,cantidad,peso)
        VALUES('".$idPres."','".$cantidad."','".$peso."')";
        $result=bd_consulta($query);        
    }
    header('Location:administrarStock.php');
    
?>