<?php
// Conexión de a la Base de Datos.
$serverName = "localhost";
$userName = "Admin";
$password = "12345";
$baseDatos = "tienda_online";

//Conectar a la Base de Datos.
$conection = mysqli_connect($serverName, $userName, $password, $baseDatos);

// Si no se ha podido conectar a la Base de Datos.
if (!$conection) {
    echo ('No se ha realizado la conexión'.mysqli_connect_error());
    exit();
}else {
    //echo ("La conexión se ha realizado");
}

?>