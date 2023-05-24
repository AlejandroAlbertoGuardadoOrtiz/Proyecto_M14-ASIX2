<?php
/*Esto es un codigo en PHP para que al usuario nos diga su email para poder recuperar o cambiar su contraseña olvidada. Sin codigos de seguridad */

// Conectamos a la base de datos
include('config.php');

// session_start() inicia la sesión
session_start();

// Condicional si el usuario escribio su email
if (isset($_POST['recuperar'])) {
    $email = $_POST['email'];
    $query = $connection->prepare("SELECT * FROM login WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    // Condicional que comprueba si el email existe en la base de datos.
    if ($query->rowCount() > 0) {
        echo '<p class="success">El email que has introducido existe!</p>';
    }

    // Condicional que comprueba si el email no existe en la base de datos.
    if ($query->rowCount() == 0) {
        echo '<p class="error">El email que has introducido no existe!</p>';
    }
}

// Si el escribio su email le pedirá que escriba su nueva contraseña
if (isset($_POST['cambiar'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM login WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    // Condicional que comprueba si el email existe en la base de datos.
    if ($query->rowCount() > 0) {
        $query = $connection->prepare("UPDATE login SET contraseña=:password_hash WHERE email=:email");
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();

        // Condicional que comprueba si el usuario se ha registrado correctamente.
        if ($result) {
            echo '<p class="success">Tu contraseña se ha cambiado correctamente!</p>';
        
        // Si no se ha registrado correctamente, muestra un mensaje de error.
        } else {
            echo '<p class="error">Error!... algo ha ido mal.</p>';
            echo "<a href='loginprueba.php'>Volver a la página principal.</a>";
        }
    }

    // Condicional que comprueba si el email no existe en la base de datos.
    if ($query->rowCount() == 0) { 
        echo '<p class="error">El email que has introducido no existe!</p>';
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cambio de contraseña</title>
</head>
<style>

body {
    background: url(img/background-shop.jpg);
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    margin: 0;
    padding: 0;
    width: 100vw;
    height: 100vh;
    background-size: cover;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-box {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    padding: 40px;
    width: 400px;
    background: rgba(160, 179, 176, 0.25); /* hacemos transparente el fondo del formulario */
}

h2 {
    color: white;
    font-size: 28px;
    font-weight: normal;
    margin: 0 0 30px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

.user-box {
    position: relative;
    margin-bottom: 30px;
}

input {
    border: none;
    border-bottom: 2px solid #333333;
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    width: 100%;
}

label {
    color: white;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    top: 10px;
    left: 5px;
    transition: 0.2s ease all;
}

input:focus ~ label,
input:not(:placeholder-shown) ~ label {
    color: white;
    font-size: 14px;
    top: -20px;
}

button {
    background-color: #C32604;
    border: none;
    border-radius: 30px;
    color: #ffffff;
    cursor: pointer;
    font-size: 18px;
    margin-top: 30px;
    padding: 10px 20px;
    transition: 0.2s ease all;
}

button:hover {
    background-color: #222222;
}

button:active {
    transform: scale(0.95);
}

button:focus {
    outline: none;
}

button[type="submit"]:disabled {
    background-color: #999999;
    cursor: not-allowed;
}
a {
    color: white;
    text-decoration: none;
    font-size: 14px;
    margin-top: 30px;
    text-align: center;
    display: block;
}

</style>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-12">
                    <h2>Cambiar contraseña</h2>
                    <form action="" method="post">
                        <div class="user-box">
                            <input type="email" name="email" required="">
                            <label>Email</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="password" required="">
                            <label>Nueva contraseña</label>
                        </div>
                        <button type="submit" name="cambiar">Cambiar</button>
                        <a href="datosusuarios.php">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>