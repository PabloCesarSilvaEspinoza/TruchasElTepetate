<?php
	include('bd.php');	
	$usuario=$_POST['usuario'];
	$pass=$_POST['password'];
	$query="select *
			FROM usuario
			WHERE nick='".$usuario."' AND password='".$pass."'";
	$result=bd_consulta($query); 

	if( $row = mysqli_fetch_assoc($result)){
		SESSION_START();
        // Verifica si es administrador y proporciona la pagina de gestion
        if($row['idUsuario']==1 ||$row['idUsuario']==2){        
		$_SESSION['userOK']=true;
		$_SESSION['Nombre']=$row['nombre'];
		$_SESSION['A_Paterno']=$row['a_Paterno'];
		$_SESSION['nick']=$usuario;
        $_SESSION['idUsuario']=$row['idUsuario'];
		header('Location: GestionOpciones.php?op=1');
	   }
        // Unicamente clientes
	else{
		header('Location: GestionOpciones.php?op=3');    
    }
    }

        /// Nick o usuario incorrecto
	else{
		header('Location: GestionOpciones.php?op=2');
	}
    

?>