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
  <link rel="stylesheet" href="../styles/res-pres.css">
  <link rel="stylesheet" href="../styles/main.cssc">
  <style type="text/css">.oculto {display: none;}.visible {display: inline;}</style>
  <style data-styled="active" data-styled-version="5.3.11"></style>
  <script src="../scripts/index.js"></script>
  <title>generales</title>
</head>


<body>
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
     <!--
  <div class="dv-main" onload="mostrar()">
    <div class="st-title" onclick="mostrar()">
      <span class="sp-plus">
        <img class="h-12-w-12 " src="../assets/logos/000134.png" alt="logo_agrupacion" width="95" height="95">
        
      </span>
      <div class="oculto" id="oculto">
          <img class="img-candi" src="../assets/logos/foto01003005.png" alt="foto-perfil"><br>
          <p class="prf-name">MASSA - ROSSI</p>
          <hr>
          <p class="sp-votos"><span>5.070.104</span> votos</p>
        </div>
      </div>
    </div>-->

    <div class="accordion">
        <!--primero-->
      <div class="cont-task1">
        <div  class="section1">
          <input type="checkbox" id="section1" class="accordion__input">
          <span>

            <img class="h-12-w-12 " src="../assets/logos/000132.png" alt="logo_agrupacion">
            <label for="section1" class="accordion__label">JUNTOS POR EL CAMBIO  </label>
          </span>
          <p>Porcentaje</p>

          <div class="accordion__content" id="oculto">

            <img class="img-candi" src="../assets/logos/foto01003008.png" alt="foto-perfil">
            <p class="prf-name">BULLRICH - PETRI</p>
            <hr>
            <p class=""><span>5.070.104</span> votos</p>
          </div>
        </div>
      </div>

      <!--segundo-->.

      
      
          <div class="cont-task2">
          <div class="section2">
            <input type="checkbox" id="section2" class="accordion__input">
            <span>

              <img class="h-12-w-12xx" src="../assets/logos/000133.png" alt="logo_agrupacion">
              <label for="section2" class="accordion__label">HACEMOS POR NUESTRO PAIS</label>
            </span>
            <p>Porcentaje</p>
            <div class="accordion__content" id="oculto">

              <img class="img-candi" src="../assets/logos/foto01003001.png" alt="foto-perfil">
              <p class="prf-name">SCHIARETTI - RANDAZZO</p>
              <hr>
              <p class=""><span>5.070.104</span> votos</p>
            </div>
          </div>
        </div>
      
      <!--tercero-->
      
        <div class="accordion3">
          <div onload="mostrar()" class="section3">
            <input type="checkbox" id="section3" class="accordion__input">
            <div class="accordion__label">

              <img class="h-12-w-12xx" src="../assets/logos/000134.png" alt="logo_agrupacion">
              <label for="section3" class="accordion__label">UNION POR LA PATRIA</label>
            </div><br>
            <p class="pf-porc">Porcentaje</p>
            <div class="accordion__content" id="oculto">

              <img class="img-candi" src="../assets/logos/foto01003005.png" alt="foto-perfil">
              <br>
              <p class="prf-name">MASSA - ROSSI</p>
              <hr>
              <p class=""><span>5.070.104</span> votos</p>
            </div>
          </div>
        </div>
      
      <!--cuarto-->
      <div class="cont-task4">
        <div class="accordion">
          <div onload="mostrar()" class="section4">
            <input type="checkbox" id="section4" class="accordion__input">
            <span class="accordion__label">

              <img class="h-12-w-12 " src="../assets/logos/000135.png" alt="logo_agrupacion">
              <label for="section4" class="accordion__label">LA LIBERTAD AVANZA</label>
            </span><br>
            <p class="pf-porc"> Porcentaje</p>

            <div class="accordion__content" id="oculto">

              <img class="img-candi" src="../assets/logos/foto01003016.png" alt="foto-perfil">
              <p class="prf-name">MILEI - VILLARRUEL</p>
              <hr>
              <p class=""><span>5.070.104</span> votos</p>
            </div>
          </div>
        </div>
      </div>
      <!--quinto-->
      <div class="cont-task5">
        <div class="accordion">
          <div onload="mostrar()" class="section5">
            <input type="checkbox" id="section5" class="accordion__input">
            <span class="accordion__label">

              <img class="h-12-w-12 " src="../assets/logos/000136.png" alt="logo_agrupacion">
              <label for="section5" class="accordion__label">FRENTE DE IZQUIERDA Y DE TRABAJADORES</label>
            </span>
            <p>Porcentaje</p>
            <div class="accordion__content" id="oculto">

              <img class="img-candi" src="../assets/logos/foto01003009.png" alt="foto-perfil">
              <p class="prf-name">BREGMAN - DEL CAÑO</p>
              <hr>
              <p class=""><span>5.070.104</span> votos</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</body>
</html>