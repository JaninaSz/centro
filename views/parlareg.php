<?php
echo '<link href="../styles/generales.css" type="text/css" rel="stylesheet">';
//suma las columnas de la base de datos:
function getTable($lectura)
{
  include("connection.php");
  $con = connection();

  $sql = "SELECT parti1,parti3,parti4, SUM(parlar_1) AS tpr1, SUM(parlar_3) AS tpr3, SUM(parlar_4) AS tpr4 FROM `votos`";
  return mysqli_query($con, $sql);
  //registro: SELECT `circuito`, SUM(`nulpd`) AS nulopd, SUM(`recpd`) AS recupd, SUM(`imppd`) AS impupd, SUM(`compd`) AS comapd, SUM(`blapd`) AS blanpd, SUM(`totpd`) AS totapd FROM `registro` 
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../styles/generales.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/resultados.css">
  <link rel="stylesheet" href="../styles/res-pres.css">
  <style data-styled="active" data-styled-version="5.3.11"></style>
 
  <title>generales</title>
</head>

<body>
  <h3>Parlamentario Regional</h3>
  <?php
  //recorre las columnas de la base de datos:
  function iterateDataToTable($data1)
  {
    $lines = '';
    while ($row = mysqli_fetch_array($data1)) {
      
      $lines.= '
      <input id="e-parti1" value=' . $row['parti1'] . '> </input>
      <input id="e-tpr1" value=' . $row['tpr1'] . '> </input><br>
      <input id="e-parti3" value=' . $row['parti3'] . '> </input>
      <input id="e-tpr3" value=' . $row['tpr3'] . '> </input><br>
      <input id="e-parti4" value=' . $row['parti4'] . '> </input>
      <input id="e-tpr4" value=' . $row['tpr4'] . '> </input>
      ';
      }
    return $lines;
  }
  $data1 = getTable('lectura');
  $lines = iterateDataToTable($data1); 
/*  function leervotos($votos){
    $votos = '';
    while ($row = mysqli_fetch_array($votos)) {
    $votos.= '
    <input id="e-parti1" value=' . $row['parti1'] . '> </input>
    <input id="e-tpr1" value=' . $row['tpr1'] . '> </input>
      ';
    }
    return $votos;
  
  }
    //echo '<script language="javascript"><input id="e-parti1" value=' . $row['parti1'] . '> </input>;</script>';

  $votos=getTable('lectura');
  $totales=leervotos($votos);
  */
  //echo '<script language="javascript">alert("n");</script>';
  echo $lines;
  ?>
 <!-- -->
<div class="cont-parla">
  <div class="cont-task3">
    <?php
        //muestra los resultados de la consulta
        //echo $lines;
    ?>
    <img class="h-12-w-12 " src="../assets/logos/000132.png" alt="logo_agrupacion"><br>
    <p class="pf-part" id="pf-part1"></p>
    <hr>
    <p class="sp-votos"><span class="tpr-1" id="tpr-1"> </span> votos</p>
  
</div>

<div class="cont-task1">
    <?php
        //muestra los resultados de la consulta
        //echo $lines;
    ?>
    <img class="h-12-w-12 " src="../assets/logos/000134.png" alt="logo_agrupacion"><br>
    <p class="pf-part" id="pf-part3"></p>
    <hr>
    <p class="sp-votos"><span class="tpr-3" id="tpr-3"> </span> votos</p>
  
</div>
<div class="cont-task2">
    <?php
        //muestra los resultados de la consulta
        //echo $lines;
    ?>
    <img class="h-12-w-12 " src="../assets/logos/000135.png" alt="logo_agrupacion"><br>
    <p class="pf-part" id="pf-part4"></p>
    <hr>
    <p class="sp-votos"><span class="tpr-4" id="tpr-4"> </span> votos</p>
  
</div>
</div>
<script src="../scripts/resul-parlr.js"></script>
</body>
</html>