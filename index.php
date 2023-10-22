<?php

//include($_SERVER['DOCUMENT_ROOT']."/centro/scripts/connection.php");
include("connection.php");
$conn = connection();

$sql = "SELECT * FROM part1";
$query = mysqli_query($conn, $sql);
?>
<!--
?
;
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/assets/img/icono.png" type="image/x-icon">
    <title>Cómputos Curuzu</title>

    <!-- Bulma Version 0.9.0-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="/scripts/index.js"></script>
</head>

<body>
    <span class="time">
        <p>Hora actual: </p>
        <div id="current_date">
            <script>
                var d = new Date();
                document.write(' ' + d.getHours() + ':' + d.getMinutes() + ': ' + d.getSeconds());
                //document.getElementById("current_date").innerHTML = getHours();

                myDate = new Date();
                hours = myDate.getHours();
                minutes = myDate.getMinutes();
                seconds = myDate.getSeconds();
                if (hours < 10) hours = 0 + hours;
                if (minutes < 10) minutes = "0" + minutes;
                if (seconds < 10) seconds = "0" + seconds;
                let HoraActual = hours + ":" + minutes + ":" + seconds
                //$("#HoraActual").text(hours+ ":" +minutes+ ":" +seconds);
                //alert(hours + ":" + minutes + ":" + seconds); 

                //setTimeout("showTime()", 1000);
                //let hora = HoraActual + d.getHours() + ':' + d.getMinutes() + ': ' + d.getSeconds();
                //console.log(HoraActual+"\nhyt  " +hora +"\nds   " +hours+ ":" +minutes+ ":" +seconds);
                document.getElementById("resul").textContent = hora + "\nEstás por : " + hours + ":" + minutes + ":" + seconds;

            </script>
        </div>
    </span>
    <nav class="navbar topNav">
        <div class="container">
            <div class="navbar-brand">

                <div>
                    <span><a href="index.html"><img src="/assets/img/frente.png" alt="logo Frente Renovador" width="120"
                                height="120"></a> </span>
                    <p><b>Frente Renovador</b></p>
                    
                </div>

            </div>
            <h1>Cómputos Curuzú Cuatiá</h1>
            <div class="navbar-end">
                <p>Cerrar sesión</p>

            </div>
        </div>
    </nav>
    <hr><br>
    <div class="cuadro">
        <label for="user">Usuario: </label>
        <input name="user" id="user" type="text" placeholder ="Yiyi" Usuario> <br>
        <label for="clave">Clave U: </label>
        <input id="clave" type="password" Clave>
        <br>
        <a href="views/escuelas.html"><button class="btn-login" onclick="validar()">Ingresar </button></a>
    </div>
<a href="agregarmesa.php">Agregar mesa</a>
    <!-- 
    <div class="window-notice" id="window-notice">
        <div class="content">
            <div class="content-text">Este sitio es de uso exclusivo para los admnistradores.

                <div class="content-buttons">
                    <button class="close_window" onclick="close"> <a href="" id="close-button">Aceptar</a></button>
                </div>
            </div>

        </div>
    </div>
-->

    <div class="timer">
        <span>Tiempo conectado: </span>
        <input class="timepage" size="5" id="timespent" name="timespent"><br>
        <!--<button id="msj" type="submit">Instrucciones</button>-->
        <input class="btn-instru" type="submit" onclick="clicked();" value="Instrucciones" />
    </div>
    <div id="resul"> </div>
    <footer>
        <div class="container">
            <div class="col-12 color10 text-center">
                <h3 style="text-align:center"><strong>Gisela Yiyi S&aacute;nchez | Todos los derechos reservados

                    </strong></h3>
                <h3 style="text-align:center">3774-455436</h3>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        function clicked() {
            if (confirm('Ingresar con el USUARIO Y CLAVE proporcionados. \n\nLuego seleccionar la Escuela a cargar.\n\nSe habilitarán las mesas para la carga.')) {
                yourformelement.submit();
            } else {
                return false;
            }
        }


        startday = new Date(); clockStart = startday.getTime(); function initStopwatch() { var myTime = new Date(); return ((myTime.getTime() - clockStart) / 1000); }
        function getSecs() { var tSecs = Math.round(initStopwatch()); var iSecs = tSecs % 60; var iMins = Math.round((tSecs - 30) / 60); var sSecs = "" + ((iSecs > 9) ? iSecs : "0" + iSecs); var sMins = "" + ((iMins > 9) ? iMins : "0" + iMins); document.getElementById('timespent').value = sMins + ":" + sSecs; window.setTimeout('getSecs()', 1000); }
        window.onload = function () {
            window.setTimeout('getSecs()', 1);
        }
    </script>
</body>

</html>