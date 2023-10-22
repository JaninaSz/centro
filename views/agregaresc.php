<?php
include("connection.php");
$con = connection();

$numescu = $_POST['numescu'];
$seccion = $_POST['seccion'];
$circuito = $_POST['circuito'];
$nombre = $_POST['nombre'];
$cantime = $_POST['cantime'];

$sql = "INSERT INTO escuela VALUES('$numescu','$seccion','$circuito','$nombre','$cantime')";
$query = mysqli_query($con, $sql);

//INSERT INTO `escuela`(`numescu`, `seccion`, `circuito`, `nombre`, `cantime`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5]);
if($query){
    Header("Location: esc.php");
}else{
//alert("Error");
//echo '<script language="javascript">alert("Error");</script>';
echo '<script language="javascript">alert("'.$sql.'");</script>';
}

?>*/