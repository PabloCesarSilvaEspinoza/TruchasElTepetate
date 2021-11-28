<?php
    include('bd.php');
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $celular=$_POST['celular'];
    $correo=$_POST['correo'];
    
        $query="UPDATE contacto 
            SET 
            Direccion = '".$direccion."',
            telefono = '".$telefono."',
            celular = '".$celular."',
            correo = '".$correo."'
            "; 
            $result=bd_consulta($query);
    header("Location:administrarWContacto.php");
?>