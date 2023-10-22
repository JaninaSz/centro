<?php
include("connection.php");
$con = connection();

$seccion = $_POST['seccion'];
$circuito = $_POST['circuito'];
$num_esa = $_POST['numesa'];
$cantiso = $_POST['cant_sob'];
$cantivo = $_POST['cant_vot'];
$nulos = $_POST['nula'];
$recur = $_POST['reca'];
$impug = $_POST['impa'];
$coman = $_POST['coma'];
$blanco = $_POST['blaa'];
$totalvo = $_POST['tota'];

$numesa = $_POST['numesa'];
$numlis = $_POST['parti1'];
$partido = $_POST['nombre_partido_1'];
$pres_1 = $_POST['presidente_1'];
$parlan_1 = $_POST['parlanac_1'];
$dip_1 = $_POST['diputado_1'];
$parlar_1 = $_POST['parlareg_1'];

$sql1 = "INSERT INTO registro VALUES('$seccion','$circuito','$num_esa','$cantiso','$cantivo','$nulos','$recur','$impug','$coman','$blanco','$totalvo')";
$sql2= "INSERT INTO part1 VALUES('$numesa','$numlis','$partido','$pres_1','$parlan_1','$dip_1','$parlar_1')";
//$query1 = mysqli_query($con,$sql1);
$query2 = mysqli_query($con, $sql2); 
//INSERT INTO `escuela`(`numescu`, `seccion`, `circuito`, `nombre`, `cantime`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5]);
/*if($query1 ){
    Header("Location: actas.php");
}else{
//alert("Error");
//echo '<script language="javascript">alert("Error");</script>';
echo '<script language="javascript">alert("'.$sql1.'");</script>';
}*/
$ejecutar=mysqli_query($con,$sql1);
if(!$ejecutar && $query2){
 
    printf("Errormessage: %s\n", mysqli_error($con));
    //echo"Hubo Algun Error";
   }else{
   }
?>

