<?php
// Establecer conexión con la base de datos
include('config.php');
// Recuperar los datos del formulario
echo '<link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">';
    echo '<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>';
echo '<link rel="stylesheet" href="loginprueba.css">';
echo '<div class="contenedor-formularios">';


$email = $_POST['email'];



// Buscar la contraseña en la base de datos
$query = $connection->prepare("SELECT * FROM login WHERE email=:email");
$query->bindParam("email", $email, PDO::PARAM_STR);
$query->execute();

if ($query->rowCount() > 0) {

    $new_password = generate_password();
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    
    $update_query = "UPDATE login SET contraseña = '$hashed_password' WHERE email = '$email'";

    
    $destinatario = $email;
    $asunto = "Recuperación de contraseña";
    $mensaje = "Su contraseña es: " . $new_password;
    $headers = "From: IronSound@gmail.com" . "\r\n" .
               "Reply-To: tuemail@tudominio.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        
        echo "<h1>Se ha enviado su contraseña al correo electrónico ingresado.</h1>";
        echo "<h1>Introduzca el numero que se ha enviado a su correo</h1>";
        echo '<div class="contenedor-input">';
        echo '<label>';
        echo 'Contraseña nueva <span class="req">*</span>';
        echo '</label>';
        echo '<input type="password" name="password" required>';
        echo '</div>';
        echo '<input type="submit" class="button button-block" name="enviar" value="Enviar">';
        
    } else {
        
        echo "<h1>Ha ocurrido un error al enviar su contraseña.</h1>";
       
    } 
    echo '<br><a href="loginprueba.php">Volver a la Pagina</a>';
}

if ($query->rowCount() == 0) {
    echo '<p class="error">El correo no existe!</p>';
    echo '<br><a href="index.php">Volver a la Pagina</a>';
}
echo '</div>';
echo '<script src="loginprueba.js"></script>';


function generate_password(){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $new_password = "";
    for($i = 0; $i < 8; $i++){
      $new_password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $new_password;
  }
?>