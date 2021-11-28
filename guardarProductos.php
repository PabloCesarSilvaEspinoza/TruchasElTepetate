<?php
    include('bd.php');
    $nombre=$_POST['nombre'];
    $unidad=$_POST['unidad'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $tipo=$_POST['tipo'];
    $id=$_POST['opc'];
    $limitkb=800;

    if($tipo=="Blanca") $tipo=1;
    if($tipo=="Salmonada") $tipo=2;
    
    $query="UPDATE presentacion 
            SET 
            nombrePresentacion = '".$nombre."',idTrucha='".$tipo."',unidadMedida='".$unidad."',precio='".$precio."',descripcion='".$descripcion."'
            WHERE idPresentacion='".$id."'
            "; 
            $result=bd_consulta($query);    
        
    if($_FILES['foto']['error']  && $_FILES['foto']['size']>=$limitkb*1024){
            $query="UPDATE presentacion 
            SET 
            nombrePresentacion = '".$nombre."',idTrucha='".$tipo."',unidadMedida='".$unidad."',precio='".$precio."',descripcion='".$descripcion."'
            WHERE idPresentacion='".$id."'
            "; 
            $result=bd_consulta($query);     }
    else{
        $archivo = $_FILES["foto"]["tmp_name"]; 
        $tamanio = $_FILES["foto"]["size"];
        $tipo = $_FILES["foto"]["type"];
        $nombre = $_FILES["foto"]["name"];
        $permitidos=array("image/jpeg","image/png");
        if(in_array($_FILES['foto']['type'],$permitidos) && $_FILES['foto']['size']<=$limitkb*1024){
            $fp = fopen($archivo, "rb");
            $contenido = fread($fp, $tamanio);
            $contenido = addslashes($contenido);
            fclose($fp); 
            
            $query="UPDATE presentacion 
            SET 
            foto = '".$contenido."'
            WHERE idPresentacion='".$id."'
            "; 
            $result=bd_consulta($query);
                        header('Location:administrarWProducto.php');
        }
        else{
            header('Location:administrarWProducto.php');
        }
    }
?>