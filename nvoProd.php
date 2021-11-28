<?php
    include('bd.php');
    $producto=$_POST['nombre'];
    $unidad=$_POST['unidad'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $trucha=$_POST['opcion'];

   if($_FILES['foto']['error']){
}
    else{
        $archivo = $_FILES["foto"]["tmp_name"]; 
        $tamanio = $_FILES["foto"]["size"];
        $tipo = $_FILES["foto"]["type"];
        $nombre = $_FILES["foto"]["name"];
        $permitidos=array("image/jpeg","image/png");
        $limitkb=800;
        if(in_array($_FILES['foto']['type'],$permitidos) && $_FILES['foto']['size']<=$limitkb*1024){
            $fp = fopen($archivo, "rb");
            $contenido = fread($fp, $tamanio);
            $contenido = addslashes($contenido);
            fclose($fp); 
            $query="INSERT INTO presentacion (idTrucha,nombrePresentacion,unidadMedida,precio,descripcion,foto)
           VALUES('".$trucha."','".$producto."','".$unidad."','".$precio."','".$descripcion."','".$contenido."')";
            bd_consulta($query);
            header('Location:administrarWProducto.php');  
        }
        else{
            header('Location:administrarWProducto.php');
        }
    }
?>
