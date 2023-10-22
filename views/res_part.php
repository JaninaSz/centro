<?php

//suma las columnas de la base de datos:
function getTable($lectura)
{
    include("connection.php");
    $con = connection();
    $sql1 = "SELECT `parti1`, SUM(pres_1) AS tpd1 ,SUM(parlan_1) AS tpn1, SUM(dip_1) AS tdp1, SUM(parlar_1) AS tpr1, `parti2`, SUM(pres_2) AS tpd2 ,SUM(parlan_2) AS tpn2,`parti3`, SUM(pres_3) AS tpd3 ,SUM(parlan_3) AS tpn3, SUM(dip_3) AS tdp3, SUM(parlar_3) AS tpr3, `parti4`, SUM(pres_4) AS tpd4 ,SUM(parlan_4) AS tpn4, SUM(dip_4) AS tdp4, SUM(parlar_4) AS tpr4, `parti5`, SUM(pres_5) AS tpd5 ,SUM(parlan_5) AS tpn5 FROM `votos`";
    //$sql2= "SELECT `parti2`, SUM(pres_2) AS totalpd ,SUM(parlan_2) AS totalpn FROM `votos`";
    $ejecutar = mysqli_query($con, $sql1);
    return $ejecutar;
    if (!$ejecutar) {
        printf("Errormessage: %s\n", mysqli_error($con));
        //echo"Hubo Algun Error";
    } else {
        // echo '<script language="javascript">alert("Ingreso correcto. Haga clic en Regresar.");</script>';
        // echo '<script language="javascript">window.history.back();</script>';

    }
}

//recorre los registros para mostrarlos
function iterateDataToTable($data1)
{
    $lines = '';
    //$sum.="SELECT `partido1`, SUM(pres_1) AS total FROM `part1`";
    while ($row = mysqli_fetch_array($data1)) {

        $lines .= 
            '
            <tr>
                <td>' . $row['parti1'] . '</td>
                <td>' . $row['tpd1'] . '</td>
                <td>' . $row['tpn1'] . '</td>
                <td>' . $row['tdp1'] . '</td>
                <td>' . $row['tpr1'] . '</td>
            </tr>
            <th> </th>
            <tr>
                <td>' . $row['parti2'] . '</td>
                <td>' . $row['tpd2'] . '</td>
                <td>' . $row['tpn2'] . '</td>
            </tr>
            <tr>
                <td>' . $row['parti3'] . '</td>
                <td>' . $row['tpd3'] . '</td>
                <td>' . $row['tpn3'] . '</td>
                <td>' . $row['tdp3'] . '</td>
                <td>' . $row['tpr3'] . '</td>
            </tr>
            <tr>
                <td>' . $row['parti4'] . '</td>
                <td>' . $row['tpd4'] . '</td>
                <td>' . $row['tpn4'] . '</td>
                <td>' . $row['tdp4'] . '</td>
                <td>' . $row['tpr4'] . '</td>
            </tr>
            <tr>
                <td>' . $row['parti5'] . '</td>
                <td>' . $row['tpd5'] . '</td>
                <td>' . $row['tpn5'] . '</td>
            </tr>';
    }

    return $lines;
}

$data1 = getTable('lectura');
$lines = iterateDataToTable($data1);

?>
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

    <div class="dv-main">
        <section class="sct-candi" name="agrupaciones">
            <div class="dv-datos">
                <div class="flex-1">
                    <h3> Resultados por partido</h3>
                    <div class="col-md-8">
                        <table class="table">
                            <thead class="table-success table-striped">
                                <tr>
                                    <th>Partidos</th>
                                    
                                    <th>Pres</th>
                                    <th>Parla</th>
                                    <th>Dip</th>
                                    <th>Parla</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                //muestra los resultados de la consulta
                                echo $lines;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</body>

</html>