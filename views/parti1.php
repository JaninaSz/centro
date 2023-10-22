<?php
include("connection.php");
$con = connection();
//$sql = "SELECT * FROM part1" or die("problemas con la tabla, parti");
$numesa = $_POST['numesa'];
$numlis = $_POST['parti1'];
$partido = $_POST['nombre_partido_1'];
$pres_1 = $_POST['presidente_1'];
$parlan_1 = $_POST['parlanac_1'];
$dip_1 = $_POST['diputado_1'];
$parlar_1 = $_POST['parlareg_1'];

//'$numesa',
$sql = "INSERT INTO part1 VALUES('$numesa','$numlis','$partido','$pres_1','$parlan_1','$dip_1','$parlar_1')";
//$sql2 = "INSERT INTO part1 VALUES('$pres_1','$parlan_1','$dip_1','$parlar_1')";
/*$query = mysqli_query($con,$sql);//or die("problemas con la base de datos, parti");

if($query){
    header("location: actas.php");
echo "Conexion";
}else{
    echo '<script language="javascript">alert("Error de consulta");</script>';
echo '<script language="javascript">alert("'.$sql.'");</script>';
}*/

$ejecutar=mysqli_query($con,$sql);
/*if(!$ejecutar){
 echo"Hubo Algun Error";
}else{
    Header("Location: actas.php") or die("problemas al conectarla, parti");
 echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
}*/
if(!$ejecutar){
 
    printf("Errormessage: %s\n", mysqli_error($con));
    echo"Hubo Algun Error";
   }else{
    echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
   }
?>