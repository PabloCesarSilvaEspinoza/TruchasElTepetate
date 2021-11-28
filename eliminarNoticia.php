<?php
    include('bd.php');
    $id=$_POST['id'];
    $query="DELETE FROM noticia WHERE idNoticia = '$id'";
    bd_consulta($query);
    header('Location:administrarWinicio.php');


?>