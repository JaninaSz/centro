<?php
include("connection.php");
$con = connection();

?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="../assets/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../styles/actas.css">
    <link rel="stylesheet" href="../styles/head.css">
    <script src="../scripts/actas.js"></script>
    <script src="../scripts/index.js"></script>
    <title>Mesa x</title>
</head>

<body onload="ocultar()">

    <span class="time">
        <p>Hora: </p>
        <div id="current_date">
            <script>
                document.getElementById("current_date").innerHTML = Date();
            </script>
        </div>
    </span>
    <nav class="navbar-topNav">
        <div class="cont-title">
            <div class="navbar-brand">

                <div>
                    <span><a href="../index.html"><img src="../assets/img/frente.png" alt="logo Frente Renovador" width="120" height="120"></span>
                    <p><b>Frente Renovador</b></p></a>
                </div>

                <h1>Registrar acta de escrutinio</h1>
                <span class="navbarEnd">Cerrar sesión</span>
            </div>

        </div>
    </nav>

    <nav class="navbar">
        <div class="cont-menu">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/views/escuelas.html">Escuelas </a>
                    <a class="navbar-item" href="/views/mesas.html">Control de mesas</a>
                    <a class="navbar-item" href="">Registro</a>
                    <a class="navbar-item" href="/views/resultados.html">Resultados</a>
                </div>

            </div>
        </div>
    </nav>

    <div class="window-notice" id="window-notice">
        <div class="content">
            <div id="contentText">
                <!--<div class="content-text">Para evitar errores, deberá <b>confirmar</b> la mesa seleccionada.-->
                <p class="p-confirm" id="p-confirm"></p>
                <div class="content-buttons">
                    <button class="close_window" id="close-button" onclick="continuar()" ;> Continuar</button>
                    <button id="btn-confir" onclick="confirmar()">Confirmar</button>
                    <button class="btn-regresar" onclick="regresar()">Regresar</button>
                </div>
            </div>

        </div>
    </div>
    <!--<div><button id="btn-confir" onclick="cargarMesa()" ;> Cargar</button></div-->

    <section class="sct-body">
        <article>
            <h4> </h4>
        </article>
        <div class="columns">
            <div class="column is-14">
                <div class="box content">

                    <div class="form-group">
                        <div class="cont-regresar">
                            <div class="escudo">
                                <a href="registro.html"><img src="../assets/img/escudo.jpg" width="50" height="150" alt=""></a>
                            </div>
                            <h3>Elecciones Generales - 22 de octubre de 2023</h3>
                            <button class="btn-regresar" onclick="regresar()">Volver a Escuela</button>
                        </div>

                        <div class="cont-encab">
                            <h4> Distrito Corrientes</h4>
                            <div>
                                <span class="mesa">Mesa N° </span>
                                <span class="lbl-mesa" id="numMesa"> </span>
                                <br>
                                <!-- 
                                <p id="numMesa">fre</p>
                                <select name="mesa">
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                </select><br>>                                
                                <button type="button" id="verificar_mesa">Verificar Mesa</button-->
                            </div>
                        </div>
                        <article>
                            <p></p>
                            <div class="form-group">
                                <form id="frmActa" action="registro.php" method="POST">

                                    <div>
                                        <span id="seccion">Sección: </span>
                                        <input type="text" name="seccion" value="03">
                                        <span id="circuito">Circuito</span>
                                        <input type="text" name="circuito" value="17">

                                        <input type="hidden" id="numeEsa" name="numesa">
                                        
                                        <span name="cantidad_sobres">Cantidad de sobres:</span>
                                        <input type="number" class="valor-input" id="cantidad_sobres" name="cant_sob" oninput="validity.valid||(value='');" required="">

                                        <label for="cantidad_votaron">Cantidad que votaron:</label>
                                        <input type="number" class="valor-input" id="cantidad_votaron" name="cant_vot" oninput="validity.valid||(value='0');" required="">
                                        <br><div id="verificacion_mensaje"></div>

                                    </div>
                                    <hr>

                            
                            <table border="2px" bordercolor="2D9ADE">
                                <tbody>
                                    <!--tr>
                                        <th>N° Lista</th>
                                        <th>Nombre de Partido</th>
                                        <th>Orden</th>
                                        <th>Presidente</th>
                                        <th>parlanac</th>
                                        <th>Diputados</th>
                                        <th>parlareg_Prov</th>
                                        
                                    </tr-->
                                    <tr>
                                        <td align="center"><b>
                                                <font color="#000000">Lista</font>
                                            </b></td>
                                        <td align="left"><b>
                                                <font color="#000000">Agrupación política</font>
                                            </b></td>
                                        <td align="center"><b>
                                                <font color="#000000">Orden</font>
                                            </b></td>
                                        <td align="center" valign="middle"><b>
                                                <font color="#000000">Presidente-Vice</font>
                                            </b></td>
                                        <td align="center" valign="middle"><b>
                                                <font color="#000000">Parl. Merc. DNac. </font>
                                            </b></td>
                                        <td align="center" valign="middle"><b>
                                                <font color="#000000">Diputados Nac.</font>
                                            </b></td>
                                        <td align="center" valign="middle"><b>
                                                <font color="#000000">Parl. Merc. DReg. </font>
                                            </b></td>
                                    </tr>
                                    <tr>
                                        <td name="parti1" value="132">132</td>
                                        <input type="hidden" name="parti1" value="132">
                                        <td name="JUNTOS" class="nombre-partido">JUNTOS POR EL CAMBIO - BULLRICH</td>
                                        <input type="hidden" name="nombre_partido_1" value="Juntos por el cambio - Bullrich">
                                        <td>1</td>
                                        <td><input type="number" class="valor-input" name="presidente_1" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="parlanac_1" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="diputado_1" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="parlareg_1" oninput="validity.valid||(value='');" required=""></td>


                                    </tr>
                                    <tr>
                                        <td name="133">133</td>
                                        <input type="hidden" name="parti2" value="133">
                                        <td name="HACEMOS" class="nombre-partido">HACEMOS POR NUESTRO PAIS - SCHIARETTI</td>
                                        <input type="hidden" name="nombre_partido_2" value="Hacemos por nuestro pais - Schiaretti">
                                        <td>2</td>
                                        <td><input type="number" class="valor-input" name="presidente_2" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="parlanac_2" oninput="validity.valid||(value='');" required=""></td>
                                        <td align="center" bgcolor="#DDDDDD">
                                            <font color="#000000">NO USAR</font>
                                        </td>
                                        <td align="center" bgcolor="#DDDDDD" bordercolor="2D9ADE">
                                            <font color="#000000">NO USAR</font>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td name="134">134</td>
                                        <input type="hidden" name="parti3" value="134">
                                        <td name="UNION" class="nombre-partido">UNION POR LA PATRIA - MASSA</td>
                                        <input type="hidden" name="nombre_partido_3" value="UNION POR LA PATRIA - MASSA">
                                        <td>3</td>
                                        <td><input type="number" class="valor-input" name="presidente_3" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="parlanac_3" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="diputado_3" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="parlareg_3" oninput="validity.valid||(value='');" required=""></td>

                                    </tr>
                                    <tr>
                                        <td name="135">135</td>
                                        <input type="hidden" name="parti4" value="135">
                                        <td name="LIBERTAD" class="nombre-partido">LIBERTAD AVANZA - MILEI</td>
                                        <input type="hidden" name="nombre_partido_4" value="Libertad avanza - Milei">
                                        <td>4</td>
                                        <td><input type="number" class="valor-input" name="presidente_4" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="parlanac_4" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="diputado_4" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="parlareg_4" oninput="validity.valid||(value='');" required=""></td>

                                    </tr>
                                    <tr>
                                        <td name="136">136</td>
                                        <input type="hidden" name="parti5" value="136">
                                        <td name="FRENTE" class="nombre-partido">FRENTE DE IZQUIERDA Y DE TRABAJADORES - BREGMAN</td>
                                        <input type="hidden" name="nombre_partido_5" value="Fte de izquierda y trab. - Bregman">
                                        <td>5</td>
                                        <td><input type="number" class="valor-input" name="presidente_5" oninput="validity.valid||(value='');" required=""></td>
                                        <td><input type="number" class="valor-input" name="parlanac_5" oninput="validity.valid||(value='');" required=""></td>
                                        <td align="center" bgcolor="#DDDDDD" bordercolor="2D9ADE">
                                            <font color="#000000">NO USAR</font>
                                        </td>
                                        <td align="center" bgcolor="#DDDDDD" border="2px" bordercolor="#000000">
                                            <font color="#000000">NO USAR</font>
                                        </td>

                                    </tr>
                            </table>

                            <table border="2px" bordercolor="2D9ADE">
                                <tr>
                                    <td colspan="2"></td>
                                    <td rowspan="2" colspan="3">Votos nulos</td>
                                    <td style="width:5px"><input type="text" name="nulpd"><br></td>
                                    <td style="width:5px"><input type="text" name="nulpn"><br></td>
                                    <td style="width:5px"><input type="text" name="nuldp"><br></td>
                                    <td style="width:5px"><input type="text" name="nulpr"><br></td>
                                <tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="3">Votos recurridos</td>
                                    <td style="width:5px"><input type="text" name="recpd"><br></td>
                                    <td style="width:5px"><input type="text" name="recpn"><br></td>
                                    <td style="width:5px"><input type="text" name="recdp"><br></td>
                                    <td style="width:5px"><input type="text" name="recpr"><br></td>
                                <tr>
                                <tr>

                                    <td colspan="2"></td>
                                    <td colspan="3">Votos de identidad impugnada</td>

                                    <td style="width:10px"><input type="text" name="imppd"><br></td>
                                    <td style="width:10px"><input type="text" name="imppn"><br></td>
                                    <td style="width:10px"><input type="text" name="impdp"><br></td>
                                    <td style="width:10px"><input type="text" name="imppr"><br></td>
                                <tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="3">Votos del Comando electoral</td>

                                    <td style="width:10px"><input type="text" name="compd"><br></td>
                                    <td style="width:10px"><input type="text" name="compn"><br></td>
                                    <td style="width:10px"><input type="text" name="comdp"><br></td>
                                    <td style="width:10px"><input type="text" name="compr"><br></td>
                                <tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="3">Votos en blanco</td>

                                    <td style="width:10px"><input type="text" name="blapd"><br></td>
                                    <td style="width:10px"><input type="text" name="blapn"><br></td>
                                    <td style="width:10px"><input type="text" name="bladp"><br></td>
                                    <td style="width:10px"><input type="text" name="blapr"><br></td>
                                <tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2" align="right" valign="middle"><b>TOTAL DE VOTOS</b></td>


                                    <td style="width:10px"><input type="text" name="totpd"><br></td>
                                    <td style="width:10px"><input type="text" name="totpn"><br></td>
                                    <td style="width:10px"><input type="text" name="totdp"><br></td>
                                    <td style="width:10px"><input type="text" name="totpr"><br></td>
                                <tr>
                            </table>
                            <div class="cont-btn">
                                
                                <!--input type="submit" width="10" align="center" value="Guardar"-->
                                <button type="submit" class="btn-enviar" onclick="regresar()">Guardar</button>
                                <button class="btn-borrar" onclick="resetear()">Borrar todo</button>
                            </div>
                            </form>
                        </div>
                            
                            <div class="cont-regresar">
                                <button class="btn-regresar" onclick="regresar()">Volver a Escuela</button>
                            </div>
                    </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</body>

</html>