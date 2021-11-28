<?php
    include('bd.php');
    $titulo=$_POST['titulo'];
    $resumen=$_POST['resumen'];
    $link=$_POST['link'];
    $id=$_POST['opc'];
    $limitkb=800;
if($link==null){
    $query="UPDATE noticia 
            SET 
            titulo = '".$titulo."',resumen='".$resumen."'
            WHERE idNoticia='".$id."'
            "; 
            $result=bd_consulta($query);   
}
else{
    $query="UPDATE noticia 
            SET 
            titulo = '".$titulo."',resumen='".$resumen."',link='".$link."'
            WHERE idNoticia='".$id."'
            "; 
            $result=bd_consulta($query);    
}
        
    if($_FILES['foto']['error']  && $_FILES['foto']['size']>=$limitkb*1024){
            $query="UPDATE noticia 
            SET titulo = '".$titulo."',resumen='".$resumen."',link='".$link."'
            WHERE idNoticia='".$id."'"; 
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
            
            $query="UPDATE noticia 
            SET 
            foto = '".$contenido."'
            WHERE idNoticia='".$id."'
            "; 
            $result=bd_consulta($query);
                        header('Location:administrarWInicio.php');
        }
        else{
            header('Location:administrarWInicio.php');
        }
    }
?>