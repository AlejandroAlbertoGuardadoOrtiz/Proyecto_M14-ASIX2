<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="script.js" async></script>
    <title>Tienda de Discos</title>
</head>
<body>
    <header>
        <?php
        session_start();
        // Muestra el nombre del usuario si existe la sesión.
        if(isset($_SESSION['user_name'])) {
            echo '<a name="login" href="datosusuarios.php" style="color:#FFFFFF; float:left; margin-top: 10px; font-size: 18px;">Bienvenido/a: ' . $_SESSION['user_name'] . '</a>';
            echo '<a name="login" href="cerrarsesion.php" style="color:#FFFFFF; float:right; margin-top: 10px; font-size: 18px;">Cerrar sesión </a></br>';

        } else {
            echo '<a name="login" href="loginprueba.php" style="color:#FFFFFF; float:left; margin-top: 10px; font-size: 18px;">Iniciar Sesion/Registrarse</a></br>';
        }
        echo "<h1>Tienda Online <br>IronSound</br></h1>";
        echo "<center> <a name='volver' href='index.php' style='color:#FFFFFF; font-size: 18px' >Inicio</a></center></br>";
        
        
       echo " <br>";
     
    echo "</header>";

    // Conecta a la base de datos
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

}

// Ejecuta la consulta para sabe que usuario está logueado y mostrar sus datos
$resultado = mysqli_query($conection, 'SELECT * FROM login WHERE usuario = "'.$_SESSION['userid'].'"' );

// Verifica si hubo un error en la consulta
if (!$resultado) {
    die('Error en la consulta: ' . mysqli_error($conection));
}

// Verifica si se encontró el usuario
if (mysqli_num_rows($resultado) > 0) {
    // Obtiene los datos del usuario
    $usuario = mysqli_fetch_assoc($resultado);
    
    // Muestra los datos del usuario
    echo '<br><fieldset height:50px>';
    echo '<b>Nombre:</b> ' . $usuario['Nombre'] . '<br>';
    echo '<b>Apellido:</b> ' . $usuario['Apellido'] . '<br>';
    echo '</fieldset><br>';
    echo '<fieldset>';
    echo '<b>Usuario:</b> ' . $usuario['usuario'] . '<br>';
    echo "<b>Contraseña:</b> " . $usuario['contraseña'] . " <a href='cambiarcontraseña.php'><input type='button' value='Cambiar contraseña'</input></a>";
    echo '</fieldset>';
    echo '<br><fieldset>';
    echo '<b>Correo electrónico:</b> ' . $usuario['email'] . '<br>';

    echo '</fieldset>';

} else {
    echo 'No se encontró el usuario.';
}

// Cierra la conexión
mysqli_close($conection);
?>
</body>
</html>