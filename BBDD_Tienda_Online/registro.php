<?php
include('config.php');
session_start();
if (isset($_POST['register'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM login WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">El email ya esta registrado!</p>';
        echo '<a href="loginprueba.php">Volver a la Pagina</a>';
    }
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO login(Nombre,Apellido,usuario,contraseña,email) VALUES (:nombre,:apellido,:username,:password_hash,:email)");
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("apellido", $apellido, PDO::PARAM_STR);
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Te has registrado correctamente!</p>';
            echo  '<a href="index.php">Volver a la Pagina</a>';
        } else {
            echo '<p class="error">Algo ha salido mal!</p>';
            echo '<a href="index.php">Volver a la Pagina</a>';
        }
    }
}
?>