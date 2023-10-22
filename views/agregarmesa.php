<?php
include("connection.php");
$con = connection();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$numescu = $_POST['numescu'];
$numesa = $_POST['numesa'];

$sql = "INSERT INTO mesas VALUES('$numescu','$numesa')";
$query = mysqli_query($con, $sql);
//INSERT INTO `escuela`(`numescu`, `seccion`, `circuito`, `nombre`, `cantime`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5]);
if($query){
    Header("Location: mesa.php");    
}else{
//alert("Error");
echo '<script language="javascript">alert("Error");</script>';
}

?>*/