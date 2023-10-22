<?php
include("connection.php");
$con = connection();

$seccion = $_POST['seccion'];
$circuito = $_POST['circuito'];
$num_esa = $_POST['numesa'];
$cantiso = $_POST['cant_sob'];
$cantivo = $_POST['cant_vot'];
$nulpd = $_POST['nulpd'];
$recpd = $_POST['recpd'];
$imppd = $_POST['imppd'];
$compd = $_POST['compd'];
$blapd = $_POST['blapd'];
$totpd = $_POST['totpd'];

$nulpn = $_POST['nulpn'];
$recpn = $_POST['recpn'];
$imppn = $_POST['imppn'];
$compn = $_POST['compn'];
$blapn = $_POST['blapn'];
$totpn = $_POST['totpn'];

$nuldp = $_POST['nuldp'];
$recdp = $_POST['recdp'];
$impdp = $_POST['impdp'];
$comdp = $_POST['comdp'];
$bladp = $_POST['bladp'];
$totdp = $_POST['totdp'];

$nulpr = $_POST['nulpr'];
$recpr = $_POST['recpr'];
$imppr = $_POST['imppr'];
$compr = $_POST['compr'];
$blapr = $_POST['blapr'];
$totpr = $_POST['totpr'];

$numesa = $_POST['numesa'];
$numlis1 = $_POST['parti1'];
$parti1 = $_POST['nombre_partido_1'];
$pres_1 = $_POST['presidente_1'];
$parlan_1 = $_POST['parlanac_1'];
$dip_1 = $_POST['diputado_1'];
$parlar_1 = $_POST['parlareg_1'];

$numlis2 = $_POST['parti2'];
$parti2 = $_POST['nombre_partido_2'];
$pres_2 = $_POST['presidente_2'];
$parlan_2 = $_POST['parlanac_2'];

$numlis3 = $_POST['parti3'];
$parti3 = $_POST['nombre_partido_3'];
$pres_3 = $_POST['presidente_3'];
$parlan_3 = $_POST['parlanac_3'];
$dip_3 = $_POST['diputado_3'];
$parlar_3 = $_POST['parlareg_3'];

$numlis4 = $_POST['parti4'];
$parti4 = $_POST['nombre_partido_4'];
$pres_4 = $_POST['presidente_4'];
$parlan_4 = $_POST['parlanac_4'];
$dip_4 = $_POST['diputado_4'];
$parlar_4 = $_POST['parlareg_4'];

$numlis5 = $_POST['parti5'];
$parti5 = $_POST['nombre_partido_5'];
$pres_5 = $_POST['presidente_5'];
$parlan_5 = $_POST['parlanac_5'];

$sql = "INSERT INTO registro VALUES('$seccion','$circuito','$num_esa','$cantiso','$cantivo','$nulpd','$recpd','$imppd','$compd','$blapd','$totpd','$nulpn','$recpn','$imppn','$compn','$blapn','$totpn','$nuldp','$recdp','$impdp','$comdp','$bladp','$totdp','$nulpr','$recpr','$imppr','$compr','$blapr','$totpr')";
$sql1 = "INSERT INTO votos VALUES('$numesa','$numlis1','$parti1','$pres_1','$parlan_1','$dip_1','$parlar_1','$numlis2','$parti2','$pres_2','$parlan_2','$numlis3','$parti3','$pres_3','$parlan_3','$dip_3','$parlar_3','$numlis4','$parti4','$pres_4','$parlan_4','$dip_4','$parlar_4','$numlis5','$parti5','$pres_5','$parlan_5')";

$ejecutar=mysqli_query($con,$sql);
$query1 = mysqli_query($con,$sql1); 


if(!$ejecutar && $query1){
 
    printf("Errormessage: %s\n", mysqli_error($con));
    //echo"Hubo Algun Error";
   }else{ 
    echo '<script language="javascript">alert("Ingreso correcto. Haga clic en Regresar.");</script>';
    echo '<script language="javascript">window.history.back();</script>';
    
    
  }
 
?>