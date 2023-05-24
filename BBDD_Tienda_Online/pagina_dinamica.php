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
<?php
		// Conectar a la base de datos
		require "bbdd.php";
		session_start();
		// Consultar los datos de la base de datos
		$sql = "SELECT * FROM discos WHERE alias ='$_GET[alias]'";
		$result = mysqli_query($conection, $sql);

		if (mysqli_num_rows($result) > 0) {
			// Imprimir los datos en la página
			
			while($row = mysqli_fetch_assoc($result)) {
				echo "<header>";
				if(isset($_SESSION['user_name'])) {
					echo '<a name="login" href="loginprueba.php" style="color:#FFFFFF; float:left; margin-top: 10px; font-size: 18px;">Bienvenido/a: ' . $_SESSION['user_name'] . '</a>';
					echo '<a name="login" href="cerrarsesion.php" style="color:#FFFFFF; float:right; margin-top: 10px; font-size: 18px;">Cerrar sesión </a></br>';
		
				} else {
					echo '<a name="login" href="loginprueba.php" style="color:#FFFFFF; float:left; margin-top: 10px; font-size: 18px;">Iniciar Sesion/Registrarse</a></br>';
				}
					echo "<h1>Tienda Online <br>IronSound</br></h1>";
						echo "<center> <a name='volver' href='index.php' style='color:#FFFFFF; font-size: 18px' >Inicio</a></center></br>";
					
				echo "</header>";
			

				echo "<section class='contenedor1'>";    
					echo "<div class='contenedor-items1'>";
						echo "<div class='centrado'>";
							echo "<div class='item'>";
								
								echo "<h2 class='titulo-item'>". $row["nombre"]."</h2><br>";
								echo "<img class='centrado' src='". $row["imagen"]."' alt='' class='img-item' width='700' height='700'><br>";
								echo "<span class='precio-item'>". $row["precio"]."€</span><br>";
								//echo "<button class='boton-item'>Agregar al Carrito</button><br>";
								echo "<h2 class='titulo-item'>DESCRIPCIÓN</h2><br>";
								echo "<span class='precio-item'>". $row["descripcion"]."</span><br>";
							echo "</div>";
						echo "</div>";
					echo "</div>";    
				echo "</section><br><br>";
				echo "<div class='in-post-max-width'><iframe class='centrado' width='700' height='500' style='border-radius:12px' src='". $row["spotify"]."' width='100%' height='352' frameBorder='0' allowfullscreen='' allow='autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture' loading='lazy'></iframe></div>";

			}
			
		} else {
			echo "No se encontraron resultados";
		}

		// Cerrar la conexión
		mysqli_close($conection);
	?>

</body>
</html>