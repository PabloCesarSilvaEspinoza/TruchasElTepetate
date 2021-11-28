<?php
    include('bd.php');
    $titulo=$_POST['titulo'];
    $ingredientes=$_POST['ingredientes'];
    $pasos=$_POST['pasos'];
    $resumen=$_POST['resumen'];
    $autor=$_POST['autor'];
    $id=$_POST['opc'];
    $limitkb=800;

    $query="UPDATE receta 
            SET 
            titulo = '".$titulo."',resumen='".$resumen."',ingredientes='".$ingredientes."',pasos='".$pasos."',autor='".$autor."'
            WHERE idReceta='".$id."'"; 
            $result=bd_consulta($query);    
        
    if($_FILES['foto']['error']  && $_FILES['foto']['size']>=$limitkb*1024){
    $query="UPDATE receta 
            SET 
            titulo = '".$titulo."',resumen='".$resumen."',ingredientes='".$ingredientes."',pasos='".$pasos."',autor='".$autor."'
            WHERE idReceta='".$id."'"; 
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
            
            $query="UPDATE receta 
            SET 
            titulo = '".$titulo."',resumen='".$resumen."',ingredientes='".$ingredientes."',pasos='".$pasos."',autor='".$autor."',foto = '".$contenido."'
            WHERE idReceta='".$id."'"; 
            $result=bd_consulta($query);
                        header('Location:administrarWReceta.php');
        }
        else{
            header('Location:administrarWReceta.php');
        }
    }
?>