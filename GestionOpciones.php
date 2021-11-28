<?php
	include('sesion.php');
	$mensaje_form="";
	if(!$_SESSION['userOK']){
		if($op=="2") 
			$mensaje_form="Usuario o contraseña incorrectos";
		include('incorrectos.html');
	}		
	else{
		switch($op){
                //Proporciona la pagina de gestion
            case '1':
				include('gestorPrincipal.php');break;
                //muestra mensaje de error en nick o contraseña
            case'2':
                include('incorrectos.html');break;
                // Mandara a la pagina de Compra
            case'3':
                include('promocional.php');break;
	}		
    }
?>