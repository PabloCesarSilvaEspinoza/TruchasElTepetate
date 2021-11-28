<?php
    include('bd.php');
    $opc=$_POST['opcion'];
    switch($opc){
        case 1: header('Location:editP.php'); break;
        case 2: header('Location:agregarP.php');break;
        case 3: header('Location:elminarP.php');break; 
        case 4:  header('Location:editStock.php');break; 
        case 5:  header('Location:agregarStock.php');break; 
        case 6: header('Location:elminarStock.php');break; 
        case 7:  header('Location:edithome.php');break; 
        case 8:  header('Location:agregarhome.php');break; 
        case 9: header('Location:elminarhome.php');break; 
        case 10:  header('Location:editReceta.php');break; 
        case 11:  header('Location:agregarReceta.php');break; 
        case 12: header('Location:elminarReceta.php');break; 
        case 13: header('Location:editEstanque.php'); break;
        case 14: header('Location:agregarEstanque.php');break;
        case 15: header('Location:elminarEstanque.php');break; 
    }
?>
