<?php
echo '<link href="../styles/generales.css" type="text/css" rel="stylesheet">';
//suma las columnas de la base de datos:
function getTable($lectura)
{
  include("connection.php");
  $con = connection();

  $sql = "SELECT parti1,parti3,parti4, SUM(dip_1) AS tdp1, SUM(dip_3) AS tdp3, SUM(dip_4) AS tdp4 FROM `votos`";
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
    <link rel="stylesheet" href="/styles/main.cssc">
  <style data-styled="active" data-styled-version="5.3.11"></style>
    <title>generales</title>
</head>

<body>
  <h3>Diputados Nacionales</h3>
  <?php
  //recorre las columnas de la base de datos:
  function iterateDataToTable($data1)
  {
    $lines = '';
    while ($row = mysqli_fetch_array($data1)) {

      $lines .= '
      <input id="e-parti1" value=' . $row['parti1'] . '> </input>
      <input id="e-tdp1" value=' . $row['tdp1'] . '> </input><br>
      <input id="e-parti3" value=' . $row['parti3'] . '> </input>
      <input id="e-tdp3" value=' . $row['tdp3'] . '> </input><br>
      <input id="e-parti4" value=' . $row['parti4'] . '> </input>
      <input id="e-tdp4" value=' . $row['tdp4'] . '> </input>
      ';
    }

    return $lines;
  }

  $data1 = getTable('lectura');
  $lines = iterateDataToTable($data1);
  echo $lines;
  ?>

    <div class="dv-main">
        <section class="sct-candi" name="agrupaciones">
            <div class="dv-datos">
              <div class="flex-1">
                <ul class="p-4 md:p-0  ">
                  <!--inicio-->
                  <li>
                    <div class="escrutinio_customGridItem2__2Ah9k">
                      <div style="font-weight: bold;">Diputados</div>
                      <div>
                          <div class="recharts-responsive-container" width="593" height="300"
                              style="width: 100%; height: 300px; min-width: 0px;">
                              <div class="recharts-wrapper" role="region"
                                  style="position: relative; cursor: default; width: 593px; height: 300px;"><svg
                                      class="recharts-surface" width="593" height="300" viewBox="0 0 593 300">
                                      <title></title>
                                      <desc></desc>
                                      <defs>
                                          <clipPath id="recharts4-clip">
                                              <rect x="150" y="30" height="240" width="363"></rect>
                                          </clipPath>
                                      </defs>
                                      <g class="recharts-cartesian-grid">
                                          <g class="recharts-cartesian-grid-horizontal">
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="150" y1="32" x2="513"
                                                  y2="32"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="150" y1="92" x2="513"
                                                  y2="92"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="150" y1="152" x2="513"
                                                  y2="152"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="150" y1="212" x2="513"
                                                  y2="212"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="150" y1="30" x2="513"
                                                  y2="30"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="150" y1="270" x2="513"
                                                  y2="270"></line>
                                          </g>
                                          <g class="recharts-cartesian-grid-vertical">
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="150" y1="30" x2="150"
                                                  y2="270"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="240.75" y1="30"
                                                  x2="240.75" y2="270"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="331.5" y1="30"
                                                  x2="331.5" y2="270"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="422.25" y1="30"
                                                  x2="422.25" y2="270"></line>
                                              <line stroke="#f5f5f5" fill="none" x="150" y="30" width="363"
                                                  height="240" offset="[object Object]" x1="513" y1="30" x2="513"
                                                  y2="270"></line>
                                          </g>
                                      </g>
                                      <g class="recharts-layer recharts-cartesian-axis recharts-yAxis yAxis">
                                          <line width="150" orientation="left" height="240" x="0" y="30"
                                              class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                              x1="150" y1="30" x2="150" y2="270"></line>

                                          <g class="recharts-cartesian-axis-ticks">
                                              <g class="recharts-layer recharts-cartesian-axis-tick">
                                                  <line width="150" orientation="left" height="240" x="0" y="30"
                                                      class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                      fill="none" x1="144" y1="32" x2="150" y2="32"></line><text
                                                      width="150" orientation="left" height="240" x="142" y="32"
                                                      stroke="none" fill="#666" font-size="12"
                                                      class="recharts-text recharts-cartesian-axis-tick-value"
                                                      text-anchor="end">
                                                      <tspan x="142" dy="-0.145em">JUNTOS</tspan>
                                                  </text>
                                              </g>

                                              <g class="recharts-layer recharts-cartesian-axis-tick">
                                                  <line width="150" orientation="left" height="240" x="0" y="30"
                                                      class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                      fill="none" x1="144" y1="92" x2="150" y2="92"></line><text
                                                      width="150" orientation="left" height="240" x="142" y="92"
                                                      stroke="none" fill="#666" font-size="12"
                                                      class="recharts-text recharts-cartesian-axis-tick-value"
                                                      text-anchor="end">
                                                      <tspan x="142" dy="0.355em">UNION POR LA PATRIA</tspan>
                                                  </text>
                                              </g>

                                              <g class="recharts-layer recharts-cartesian-axis-tick">
                                                  <line width="150" orientation="left" height="240" x="0" y="30"
                                                      class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                      fill="none" x1="144" y1="152" x2="150" y2="152"></line><text
                                                      width="150" orientation="left" height="240" x="142" y="152"
                                                      stroke="none" fill="#666" font-size="12"
                                                      class="recharts-text recharts-cartesian-axis-tick-value"
                                                      text-anchor="end">
                                                      <tspan x="142" dy="-0.145em">LIBERTAD</tspan>
                                                  </text>
                                              </g>
                                              
                                          </g>
                                      </g>
                                      <g class="recharts-layer recharts-bar">
                                          <g class="recharts-layer recharts-bar-rectangles">
                                              <g class="recharts-layer">
                                                  <g class="recharts-layer recharts-bar-rectangle" role="img">
                                                      <path width="308.82225" height="20"
                                                          name="ECO + VAMOS CORRIENTES" color="#1EC225" x="150"
                                                          y="50" fill="#1EC225" radius="0"
                                                          class="recharts-rectangle"
                                                          <!--barra
                                                          d="M 150,50 h 308.82225 v 20 h -308.82225 Z"></path>
                                                  </g>
                                                  
                                                  <g class="recharts-layer recharts-bar-rectangle" role="img">
                                                      <path width="129.954" height="20" name="FRENTE DE TODOS"
                                                          color="#1880D1" x="150" y="110" fill="#1880D1"
                                                          radius="0" class="recharts-rectangle"
                                                          d="M 150,110 h 129.954 v 20 h -129.954 Z"></path>
                                                  </g>
                                                  <g class="recharts-layer recharts-bar-rectangle" role="img">
                                                      <path width="90.574124999999981" height="20"
                                                          name="GANEMOS CORRIENTES" color="#6e2284" 
                                                          x="150" y="170" fill="#6e2284" radius="0"
                                                          class="recharts-rectangle"
                                                          d="M 150,170 h 90.574124999999981 v 20 h -90.574124999999981 Z">
                                                      </path>
                                                  </g>
                                                 
                                              </g>
                                          </g>
                                          <g class="recharts-layer"></g>
                                          <g class="recharts-layer recharts-label-list">
                                              <g><text x="458.82225" y="60" font-size="14" dx="4"
                                                      dominant-baseline="middle" text-anchor="right">384806
                                                      (68,06%)</text></g>
                                              <g><text x="279.954" y="120" font-size="14" dx="4"
                                                      dominant-baseline="middle" text-anchor="right">161953
                                                      (28,64%)</text></g>
                                              <g><text x="237.57412499999998" y="180" font-size="14" dx="4"
                                                      dominant-baseline="middle" text-anchor="right">11957
                                                      (2,11%)</text></g>                                              
                                          </g>
                                      </g>
                                  </svg>
                                  <div tabindex="-1" role="dialog" class="recharts-tooltip-wrapper"
                                      style="pointer-events: none; visibility: hidden; position: absolute; top: 0px; left: 0px;">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
                  </li>
              </div>
            </div>
          </section>
    </div>

    <script src="../scripts/resul.js"></script>
</body>
</html>