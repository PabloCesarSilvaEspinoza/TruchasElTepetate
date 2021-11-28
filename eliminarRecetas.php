<?php
    include('bd.php');
    $id=$_POST['id'];
    $query="DELETE FROM receta WHERE idREceta = '$id'";
    bd_consulta($query);
    header('Location:administrarWReceta.php');


?>