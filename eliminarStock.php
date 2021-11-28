<?php
    include('bd.php');
    $id=$_POST['id'];
    $query="DELETE FROM stock WHERE idStock = '$id'";
    bd_consulta($query);
    header('Location:administrarStock.php');


?>