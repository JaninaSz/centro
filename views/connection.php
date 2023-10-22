<?php
function connection(){
    $host = "127.0.0.1:3306";
    $user = "root";
    $pass = "";

    $bd = "centro";

    $connect=mysqli_connect($host, $user, $pass, $bd);

    mysqli_select_db($connect, $bd);
    return $connect;
    
    /*if(!$connect){
        die("Conexion fallida: ".mysqli_connect_error());
    }else{
        echo "Conexion exitosa";
    mysqli_close($connect);}*/
}
