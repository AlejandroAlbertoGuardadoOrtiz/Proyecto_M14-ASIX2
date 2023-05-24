<?php 
    // Inicio de sesión
    session_start();
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add meta tags for mobile and IE -->
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
        // Muestra el nombre del usuario si existe la sesión.
        if(isset($_SESSION['user_name'])) {
					echo '<a name="login" href="loginprueba.php" style="color:#FFFFFF; float:left; margin-top: 10px; font-size: 18px;">Bienvenido/a: ' . $_SESSION['user_name'] . '</a>';
					echo '<a name="login" href="cerrarsesion.php" style="color:#FFFFFF; float:right; margin-top: 10px; font-size: 18px;">Cerrar sesión </a></br>';
		
				} else {
					echo '<a name="login" href="loginprueba.php" style="color:#FFFFFF; float:left; margin-top: 10px; font-size: 18px;">Iniciar Sesion/Registrarse</a></br>';
				}
					echo "<h1>Tienda Online <br>IronSound</br></h1>";
					echo "<center> <a name='volver' href='index.php' style='color:#FFFFFF; font-size: 18px' >Inicio</a></center></br>";
        
        ?>
    </header>

<div id="smart-button-container">
    <div style="text-align: center;">
      <div id="paypal-button-container"></div>
    </div>
  </div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
<script>


  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'pill',
        color: 'gold',
        layout: 'vertical',
        label: 'pay',
        
      },

      createOrder: function(data, actions) {
  
  // Obtener el valor de totalCarrito desde sessionStorage
  var valorAlmacenado = localStorage.getItem('totalCarrito');


  return actions.order.create({
    purchase_units: [{"amount":{"currency_code":"EUR","value": valorAlmacenado}}]
  });
},


      onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
          
          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>Gracias por el pago!</h3>';
          
        });
      },

      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
</script>

</body>

</html>