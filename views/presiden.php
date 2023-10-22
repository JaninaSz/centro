<?php
echo '<link href="../styles/generales.css" type="text/css" rel="stylesheet">';
//suma las columnas de la base de datos:
function getTable($lectura)
{
  include("connection.php");
  $con = connection();

  $sql = "SELECT parti1,parti2,parti3,parti4,parti5, SUM(pres_1) AS tpd1, SUM(pres_2) AS tpd2, SUM(pres_3) AS tpd3, SUM(pres_4) AS tpd4, SUM(pres_5) AS tpd5 FROM `votos`";
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
    <title>pres-vice</title>
</head>

<body>
  <div class="dv-main">
    <h3>Presidente - Vice</h3>
    <?php
    //recorre las columnas de la base de datos:
    function iterateDataToTable($data1)
    {
      $lines = '';
      while ($row = mysqli_fetch_array($data1)) {
  
        $lines .= '
        <input id="e-parti1" value=' . $row['parti1'] . '> </input>
        <input id="e-tpd1" value=' . $row['tpd1'] . '> </input><br>
        <input id="e-parti2" value=' . $row['parti2'] . '> </input>
        <input id="e-tpd2" value=' . $row['tpd2'] . '> </input><br>
        <input id="e-parti3" value=' . $row['parti3'] . '> </input>
        <input id="e-tpd3" value=' . $row['tpd3'] . '> </input><br>
        <input id="e-parti4" value=' . $row['parti4'] . '> </input>
        <input id="e-tpd4" value=' . $row['tpd4'] . '> </input><br>
        <input id="e-parti5" value=' . $row['parti5'] . '> </input>
        <input id="e-tpd5" value=' . $row['tpd5'] . '> </input>
        ';
      }
  
      return $lines;
    }
  
    $data1 = getTable('lectura');
    $lines = iterateDataToTable($data1);
    echo $lines;
    ?>  
  </div>

  <script src="../scripts/resul.js"></script>
</body>
</html>