<?php
session_start();
require_once 'bbdd.php';

if(isset($_SESSION['user_name'])) {
    $sql = "SELECT nombre FROM login WHERE nombre = '{$_SESSION['user_name']}'";
    $result = mysqli_query($conection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nombre = $row["nombre"];
    }    
} else {
    $nombre = "Usuario";
}

echo "$nombre";
mysqli_close($conection);

?>
