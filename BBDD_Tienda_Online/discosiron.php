<?php

require_once 'bbdd.php';

$sql = "SELECT * FROM discos WHERE nombre LIKE '%iron maiden%' ";
$result = mysqli_query($conection, $sql);

if (mysqli_num_rows($result) > 0) {
    $response = array();
    while($row = mysqli_fetch_assoc($result)) {
        $response[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    echo "0 resultados";
}

mysqli_close($conection);

?>
