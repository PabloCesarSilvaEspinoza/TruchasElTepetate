<?php
    include('bd.php');
    $valores=$_POST['valores'];
    $mision=$_POST['mision'];
    $slogan=$_POST['slogan'];
    $vision=$_POST['vision'];

    $query="UPDATE informacion 
            SET 
            valores = '".$valores."',
            mision = '".$mision."',
            slogan = '".$slogan."',
            vision = '".$vision."'
            "; 
            $result=bd_consulta($query);
    header("Location:administrarWConocenos.php");
?>