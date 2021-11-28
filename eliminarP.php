<?php
    include('bd.php');
    $id=$_POST['id'];
    $query="DELETE FROM presentacion WHERE idPresentacion = '$id'";
    bd_consulta($query);
    header('Location:administrarWProducto.php');


?>