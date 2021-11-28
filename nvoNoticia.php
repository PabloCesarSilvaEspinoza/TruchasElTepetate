<?php
    include('bd.php');
    $titulo=$_POST['titulo'];
    $resumen=$_POST['resumen'];
    $link=$_POST['link'];
    date_default_timezone_set('America/Mexico_City');
    $fecha=date('Y-m-d');
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
            if($link==null){
                 $query="INSERT INTO noticia (titulo,resumen,foto,fecha)
                VALUES('".$titulo."','".$resumen."','".$contenido."','".$fecha."')";
                bd_consulta($query);
            }
            else{
            $query="INSERT INTO noticia (titulo,resumen,foto,fecha,link)
           VALUES('".$titulo."','".$resumen."','".$contenido."','".$fecha."','".$link."')";
            bd_consulta($query);
            }
            header('Location:gestorPrincipal.php');  
        }
        else{
            header('Location:administrarWProducto.php');
        }
    }
?>
