<?php
echo '<link href="../styles/generales.css" type="text/css" rel="stylesheet">';
//suma las columnas de la base de datos:
function getTable($lectura)
{
  include("connection.php");
  $con = connection();

  $sql = "SELECT parti1,parti2,parti3,parti4,parti5, SUM(parlan_1) AS tpn1, SUM(parlan_2) AS tpn2, SUM(parlan_3) AS tpn3, SUM(parlan_4) AS tpn4, SUM(parlan_5) AS tpn5 FROM `votos`";
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
    <link rel="stylesheet" href="/styles/main.css">
  <style data-styled="active" data-styled-version="5.3.11"></style>
    <title>generales</title>
</head>

<body>
  <div class="dv-main">
   
    <?php
    //recorre las columnas de la base de datos:
    function iterateDataToTable($data1)
    {
      $lines = '';
      while ($row = mysqli_fetch_array($data1)) {
  
        $lines .= '
        <input id="e-parti1" value=' . $row['parti1'] . '> </input>
        <input  id="e-tpn1" value=' . $row['tpn1'] . '> </input><br>
        <input  id="e-parti2" value=' . $row['parti2'] . '> </input>
        <input  id="e-tpn2" value=' . $row['tpn2'] . '> </input><br>
        <input  id="e-parti3" value=' . $row['parti3'] . '> </input>
        <input id="e-tpn3" value=' . $row['tpn3'] . '> </input><br>
        <input  id="e-parti4" value=' . $row['parti4'] . '> </input>
        <input  id="e-tpn4" value=' . $row['tpn4'] . '> </input><br>
        <input  id="e-parti5" value=' . $row['parti5'] . '> </input>
        <input  id="e-tpn5" value=' . $row['tpn5'] . '> </input>
        ';
      }
  
      return $lines;
    }
  
    $data1 = getTable('lectura');
    $lines = iterateDataToTable($data1);
    echo $lines;
    ?>  
  </div>

  <h3>Parlamentario Nacional</h3><br><br>
<div class="cont-parla">

  <div class="cont-task3">
    <?php
        //muestra los resultados de la consulta
        //echo $lines;
    ?>
    <img class="h-12-w-12 " src="../assets/logos/000132.png" alt="logo_agrupacion"><br>
    <p class="pf-part" id="pf-part1"></p>
    <hr>
    <p class="sp-votos"><span class="tpr-1" id="tpn-1"> </span> votos</p>
  
</div>

<div class="cont-task1">
    <?php
        //muestra los resultados de la consulta
        //echo $lines;
    ?>
    <img class="h-12-w-12 " src="../assets/logos/000134.png" alt="logo_agrupacion"><br>
    <p class="pf-part" id="pf-part2"></p>
    <hr>
    <p class="sp-votos"><span class="tpr-2" id="tpn-2"> </span> votos</p>
  
</div>

<div class="cont-task2">
    <?php
        //muestra los resultados de la consulta
        //echo $lines;
    ?>
    <img class="h-12-w-12 " src="../assets/logos/000135.png" alt="logo_agrupacion"><br>
    <p class="pf-part" id="pf-part3"></p>
    <hr>
    <p class="sp-votos"><span class="tpr-3" id="tpn-3"> </span> votos</p>
  
</div>
<div class="cont-task4">
    <?php
        //muestra los resultados de la consulta
        //echo $lines;
    ?>
    <img class="h-12-w-12 " src="../assets/logos/000133.png" alt="logo_agrupacion"><br>
    <p class="pf-part" id="pf-part4"></p>
    <hr>
    <p class="sp-votos"><span class="tpr-4" id="tpn-4"> </span> votos</p>
  
</div>
<div class="cont-task5">
    <?php
        //muestra los resultados de la consulta
        //echo $lines;
    ?>
    <img class="h-12-w-12 " src="../assets/logos/000136.png" alt="logo_agrupacion"><br>
    <p class="pf-part" id="pf-part5"></p>
    <hr>
    <p class="sp-votos"><span class="tpr-4" id="tpn-5"> </span> votos</p>
  
</div>
</div>

  <div>
  <p id="tpn-1" > </p> 

  
  <div style="width: 600px">
	<canvas id="grafica"></canvas>
</div>
</div>
  <script src="../scripts/resul-parln.js"></script>
</body>
</html>