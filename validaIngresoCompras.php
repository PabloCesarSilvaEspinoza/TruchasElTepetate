<?php
	include('bd.php');	
	$usuario=$_POST['usuario'];
	$pass=$_POST['password'];
	$query="select *
			FROM administrador
			WHERE nick='".$usuario."' AND admipass='".$pass."'";
	$result=bd_consulta($query); 
	if( $row = mysqli_fetch_assoc($result)){
		SESSION_START();
		$_SESSION['userOK']=true;
		$_SESSION['Nombre']=$row['Nombre'];
		$_SESSION['A_Paterno']=$row['A_Paterno'];
		$_SESSION['nick']=$usuario;
		header('Location: gestorPrincipal.php?op=1');
	}
	else{
		header('Location: gestorPrincipal.php?op=-1');
	}

?>