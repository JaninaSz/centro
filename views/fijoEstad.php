<?php
 include("connection.php");
//suma las columnas de la base de datos:
function getTable($registro){
    $con = connection();
    
    $sql= "SELECT COUNT(*) as cantReg, SUM(nulpd) AS tnpd ,SUM(recpd) AS trpd,SUM(imppd) AS tipd,SUM(compd) AS tcpd,SUM(blapd) AS tbpd,SUM(totpd) AS ttpd FROM `registro`";
   
    return mysqli_query($con,$sql);
    //registro: SELECT `circuito`, SUM(`nulpd`) AS nulopd, SUM(`recpd`) AS recupd, SUM(`imppd`) AS impupd, SUM(`compd`) AS comapd, SUM(`blapd`) AS blanpd, SUM(`totpd`) AS totapd FROM `registro` 
}
/*
function cantireg($cantreg){
   
    $conn = connection();
    $cantregistros=0;

    $sql1= "SELECT COUNT(*) as cantReg FROM `registro`";
    return mysqli_query($conn,$sql1);

}*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/generales.css" rel="stylesheet">
    <script src="../scripts/index.js"></script>
    <script src="../scripts/resul.js"></script>
  <link rel="stylesheet" href="../styles/main.cssc">
  <style data-styled="active" data-styled-version="5.3.11"></style>
      <title>Estadis</title>
</head>

<body>
    <div class="dv-load" onclick="actualizar()" display="none" style="background-color: tomato;"> 
        <img class="load" src="../assets/img/loading.gif" alt="cargando">
    </div>   
    <?php
//recorre las columnas de la base de datos:
function iterateDataToTable($data1){
    $lines='';
    while($row = mysqli_fetch_array($data1)) {
    
       $lines.= '
        <input type="hidden" id="e-tnpd" value=' . $row['tnpd'] . '> </input>
        <input type="hidden" id="e-trpd" value=' . $row['trpd'] . '> </input>
        <input type="hidden" id="e-tipd" value=' . $row['tipd'] . '> </input>
        <input type="hidden" id="e-tcpd" value=' . $row['tcpd'] . '> </input>
        <input type="hidden" id="e-tbpd" value=' . $row['tbpd'] . '> </input>
        <input type="hidden" id="e-ttpd" value=' . $row['ttpd'] . '> </input>
        <input type="hidden" id="e-cantReg" value=' . $row['cantReg'] . '> </input>
        ';
    }
    
    return $lines;
    
}

$data1=getTable('registro');
$lines=iterateDataToTable($data1);
echo $lines;
/*
function leerdatos($cantregistros){
    $registrados='';
    while($row = mysqli_fetch_array($cantregistros)) {
    
        $registrados.= '
            <input id="e-cantReg" value=' . $row['cantReg'] . '> </input>
        ';
    }
    
    return $registrados;
    
}

$cantregistros=getTable('cantreg');
$registrados=leerdatos($cantregistros);
echo $registrados;*/
?>
  <header>
  <div class="columns">
    <span class="dv-frencur" onclick="showTime()"> 
        <img class="logo" src="../assets/img/FRC 4x4.jpg" alt="frencur"  width="100" height="100">;
    </span>
    <div class="dv-estadisticas">
    <div class="tabll">
        <p><img src='../assets/img/blanco.png' class='i'><b> Blancos: </b><span id="por-bla"> </span>&nbsp;</p>        
        <p><img src='../assets/img/anulados.png' class='i'><b> Anulados: </b><span id="por-anu"> </span>&nbsp;</p>
        <p><img src='../assets/img/participacion.png' class='i' onclick="actualizar()" > <b>&nbsp;Participación:</b><span id="por-par"> </span>&nbsp;%</p>
        <!--table width='100%'>
        <tr>
            
            <td class='aj'><img src='../assets/img/blanco.png' class='i'></td>
            <td class='aj'><b>Blancos:</b><span class="por-bla"> 8</span>&nbsp;%</td>
            <td class='aj'><img src='../assets/img/anulados.png' class='i'></td>
            <td class='aj'><b>Anulados:</b><span class="por-anu"> 1,2</span>&nbsp;%</td>
            <td class='aj'><img src='../assets/img/participacion.png' class='i'></td>
            <td class='aj'><b>&nbsp;Participación:</b><span class="por-anu"> 69,6</span>&nbsp;%</td>
        </tr>
    </table--></div>
<hr><div>
    <table width='100%'>
        <tr>
            <td colspan="3"> </td><td colspan="3"><b>Votos:</b>&nbsp;<small id="tolvo"> </small> | <b>Escrutado:</b>&nbsp; <small id="escrut"> </small> mesas |
                <b>Actualizado:</b>&nbsp;<large>22/10/2023 <span id="resul"> </span></large> </td>
        </tr>
    </table>
</div></div>
</div>
</header>
  <!--button onclick="showTime()">Hora actual</button>
        <p id="resul"><b></b></p-->
<script src="../scripts/resul.js"></script>
</body>
</html>