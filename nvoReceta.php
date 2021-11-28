<?php
    include('bd.php');
    $titulo=$_POST['titulo'];
    $ingredientes=$_POST['ingredientes'];
    $pasos=$_POST['pasos'];
    $resumen=$_POST['resumen'];
    $autor=$_POST['autor'];
   date_default_timezone_set('America/Mexico_City');
    $fecha=date('Y-m-d');
    $limitkb=800; 
        

    if($_FILES['foto']['error']  && $_FILES['foto']['size']>=$limitkb*1024){
    echo "Foto muy grande o error en la foto";
    }
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
            $query="INSERT INTO receta(titulo,resumen,ingredientes,pasos,fecha,autor,fotoreceta) 
             VALUES('".$titulo."','".$resumen."','".$ingredientes."','".$pasos."','".$fecha."','".$autor."','".$contenido."')"; 
            $result=bd_consulta($query);
                        header('Location:administrarWReceta.php');
        }
        else{
            header('Location:administrarWReceta.php');
        }
    }
?>