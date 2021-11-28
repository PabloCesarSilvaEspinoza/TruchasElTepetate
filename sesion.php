<?php 
	SESSION_START();
	if(!isset($_SESSION['userOK']))
		$_SESSION['userOK']=false;
	if(!isset($_GET['op'])){
		$op=-10; //la aplicación está iniciando
		$mensaje_form="";
	}
	else
		$op=$_GET['op'];
	
?>