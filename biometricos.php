<?php 
include('bd.php');
    $opc=$_POST['opc'];
    $query="SELECT *
        FROM estanque
        WHERE idEstanque='$opc'";
    $result=bd_consulta($query);
    $row=mysqli_fetch_assoc($result);
$respeso=0;
$reslongi=0;
$muestras=0;
for($i=1;$i<=30;$i++){
    $peso=$_POST['peso'.$i.''];
    $longi=$_POST['longi'.$i.''];
    if($peso>0 && $longi>0){    
        $muestras++;
    }
    $respeso=$respeso+$peso;
    $reslongi=$reslongi+$longi;
}
$promediopeso=$respeso/$muestras;
$promediolongi=$reslongi/$muestras;
$biomasa=($row['numTruchas']*$promediopeso)/1000;
$query="UPDATE estanque 
            SET 
            longitud = '".$promediolongi."',
            peso = '".$promediopeso."',
            biomasa = '".$biomasa."'
            WHERE idEstanque='".$opc."'";
$result=bd_consulta($query);
header('Location:administrarPEstanque.php');
?>
