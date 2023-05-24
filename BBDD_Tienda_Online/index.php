<?php 
    // Inicio de sesión
    session_start();

    // Condicional para verificar si existe la sesión
    if(!isset($_SESSION['usuario'])) {
        $_SESSION['usuario'] = array();
    }
   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="chat_style.css">
    <link href="../bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
		
		<script src="../bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <style>
    
        </style>

    <script src="script.js" async></script>
    <title>Tienda de Discos</title>
</head>

<body>
    <header>
        <?php
        // Muestra el nombre del usuario si existe la sesión.
        if(isset($_SESSION['user_name'])) {
            echo '<a name="login" href="datosusuarios.php" style="color:#FFFFFF; float:left; margin-top: 10px; font-size: 18px;">Bienvenido/a: ' . $_SESSION['user_name'] . '</a>';
            echo '<a name="login" href="cerrarsesion.php" style="color:#FFFFFF; float:right; margin-top: 10px; font-size: 18px;">Cerrar sesión </a>';

        } else {
            echo '<a name="login" href="loginprueba.php" style="color:#FFFFFF; float:left; margin-top: 10px; font-size: 18px;">Iniciar Sesion/Registrarse</a>';
        }
        
        ?>
        <br>
        <h1>Tienda Online <br>IronSound</br></h1>
    </header>

    <section class="contenedor">
		
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <a name="item1" href="./pagina_dinamica.php?alias=impowerslave">
                    <span class="titulo-item">Iron Maiden, Powerslave</span>
                    <img src="img/ironmaidenpowerslave.jpg" alt="" class="img-item">
                    <span class="precio-item">15€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
                
            </div>

            <div class="item">
                <a name="item2" href="./pagina_dinamica.php?alias=jppainkiller">
                    <span class="titulo-item">Judas Priest, Painkiller</span>
                    <img src="img/JudasPriestPainkiller.jpg" alt="" class="img-item">
                    <span class="precio-item">25€</span>
                </a>    
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
				<a name="item3" href="./pagina_dinamica.php?alias=mmasterofpuppets">
					<span class="titulo-item">Metallica, Master Of Puppets</span>
					<img src="img/metallica.jfif" alt="" class="img-item">
					<span class="precio-item">19€</span>
				</a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
		
            <div class="item">
                <a name="item4" href="./pagina_dinamica.php?alias=lpmeteora">
                    <span class="titulo-item">Linkin Park, Meteora</span>
                    <img src="img/linkin-park-meteora.jpg" alt="" class="img-item">
                    <span class="precio-item">11€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            
            <div class="item">
                <a name="item5" href="./pagina_dinamica.php?alias=lphybridtheory">
                    <span class="titulo-item">Linkin Park, Hybrid Theory</span>
                    <img src="img/linkin-park-hybrid-theory.jpeg" alt="" class="img-item">
                    <span class="precio-item">11€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>

            <div class="item">
                <a name="item6" href="./pagina_dinamica.php?alias=lpminutestomidnight">
                    <span class="titulo-item">Linkin Park, Minutes to Midnight</span>
                    <img src="img/linkin-park-minutes-to-midnight.jpg" alt="" class="img-item">
                    <span class="precio-item">18€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>

            <div class="item">
                <a name="item7" href="./pagina_dinamica.php?alias=soadtoxicity">
                    <span class="titulo-item">System Of A Down, Toxicity</span>
                    <img src="img/SystemOfADown Toxicity.jpg" alt="" class="img-item">
                    <span class="precio-item">15€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>

            <div class="item">
                <a name="item8" href="./pagina_dinamica.php?alias=soadsoad">
                    <span class="titulo-item">System Of A Down, System Of A Down</span>
                    <img src="img/SystemOfADown.jpg" alt="" class="img-item">
                    <span class="precio-item">12€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>

            <div class="item">
                <a name="item9" href="./pagina_dinamica.php?alias=soadhypnotice">
                    <span class="titulo-item">System Of A Down, Hypnotize</span>
                    <img src="img/SystemOfADown Hypnotize.jpg" alt="" class="img-item">
                    <span class="precio-item">14€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
			<div class="item">
                <a name="item10" href="./pagina_dinamica.php?alias=kissues">
                    <span class="titulo-item">Korn, Issues</span>
                    <img src="img/korn-Issues.jpg" alt="" class="img-item">
                    <span class="precio-item">12€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>

			<div class="item">
                <a name="item11" href="./pagina_dinamica.php?alias=kfollowtheleader">
                    <span class="titulo-item">Korn, Follow The Leader</span>
                    <img src="img/korn-Follow-the-Leader.jpg" alt="" class="img-item">
                    <span class="precio-item">10€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>

			<div class="item">
                <a name="item12" href="./pagina_dinamica.php?alias=kk">
                    <span class="titulo-item">Korn, Korn</span>
                    <img src="img/korn-Korn.jpg" alt="" class="img-item">
                    <span class="precio-item">14€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <a name="item13" href="./pagina_dinamica.php?alias=abb">
                    <span class="titulo-item">AC/DC, Back in Black</span>
                    <img src="img/ACDC_Back_in_Black.png" alt="" class="img-item">
                    <span class="precio-item">10€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <a name="item14" href="./pagina_dinamica.php?alias=aaero">
                    <span class="titulo-item">Aerosmith, Aerosmith's Greatest Hits</span>
                    <img src="img/Aerosmith_Aerosmiths_Greatest_Hits.jpg" alt="" class="img-item">
                    <span class="precio-item">12€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <a name="item15" href="./pagina_dinamica.php?alias=bb">
                    <span class="titulo-item">Boston, Boston</span>
                    <img src="img/boston_boston.jpg" alt="" class="img-item">
                    <span class="precio-item">7€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <a name="item16" href="./pagina_dinamica.php?alias=grad">
                    <span class="titulo-item">Guns N Roses, Appetite for Destruction</span>
                    <img src="img/gunsandrosesad.jpg" alt="" class="img-item">
                    <span class="precio-item">9€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <a name="item17" href="./pagina_dinamica.php?alias=lzlz">
                    <span class="titulo-item">Led Zeppelin, Led Zeppelin IV</span>
                    <img src="img/Led_Zeppelin_Led_Zeppelin_IV.jpg" alt="" class="img-item">
                    <span class="precio-item">10€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <a name="item18" href="./pagina_dinamica.php?alias=lzpg">
                    <span class="titulo-item">Led Zeppelin, Physical Graffiti</span>
                    <img src="img/lzpg.jpg" alt="" class="img-item">
                    <span class="precio-item">12€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <a name="item19" href="./pagina_dinamica.php?alias=mm">
                    <span class="titulo-item">Metallica, Metallica</span>
                    <img src="img/mm.jpg" alt="" class="img-item">
                    <span class="precio-item">10€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <a name="item20" href="./pagina_dinamica.php?alias=pfw">
                    <span class="titulo-item">Pink Floyd, The Wall</span>
                    <img src="img/pfw.jpg" alt="" class="img-item">
                    <span class="precio-item">10€</span>
                </a>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            
        </div>
        
        


        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items" id="carrito-items"></div>

            <div class="carrito-total">
                <div class="fila" id="total">
                    <strong>Tu Total</strong>
                </div>

                <button class="btn-pagar" href="payment.php">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var chatbotContainer = document.querySelector('.chatbot-container');
      var chatbotBtn = chatbotContainer.querySelector('.chatbot-btn');
      var chatbot = chatbotContainer.querySelector('.chatbot');
      
      chatbotBtn.addEventListener('click', function() {
        if (chatbot.style.display === 'none') {
          chatbot.style.display = 'block';
        } else {
          chatbot.style.display = 'none';
        }
      });
    });
    </script>


  <div class="chatbot-container">
        <div class="chatbot-btn">
            <i class="fa fa-comments"></i>
        </div> 
        <div class="chatbot">
            
            <!-- Contenido del chatbot -->
            <div id="chatBot">
            <center><span>Asistente</span></center><br>
        <div id="chatBotHistorial"></div>
        
        <input type="text" id="chatBotMensaje" name= "nombre" method="GET" placeholder="Escribe tu mensaje...">
        <button id="chatBotEnviar">Enviar</button>
      </div>
    </main>
    <script>
      // Definimos las respuestas del ChatBot
      const respuestas = {
        saludo: "¡Hola! ¿En qué puedo ayudarte?",
        despedida: "¡Hasta pronto! ¡Que tengas un buen día!",
        compra: "¿Qué disco te interesa comprar?",
        stock: "Sí, tenemos en stock.",
        noStock: "Lo siento, actualmente no tenemos en stock.",
        metodoPago: "Aceptamos pago mediante PayPal y tarjeta de credito",
        metodoContacto: "Si desea ponerse en contacto con nosotros directamente nuestro email es IronSound@gmail.com",
        obtenerDiscos: "Obteniendo lista de discos...",
        linkin: "Mostrando discos de Linkin Park...",
        korn: "Mostrando discos de Korn...",
        soad: "Mostrando discos de System of a Down...",
        metallica: "Mostrando discos de Metallica...",
        acdc: "Mostrando discos de AC/DC...",
        judas: "Mostrando discos de Judas Priest...",
        iron: "Mostrando discos de Iron Maiden...",
        aerosmith: "Mostrando discos de Aerosmith...",
        boston: "Mostrando discos de Boston...",
        guns: "Mostrando discos de Guns and Roses...",
        led: "Mostrando discos de Led Zeppelin...",
        pink: "Mostrando discos de Pink Floyd...",
        tiempoEnvio: "Entre 3 o 5 dias laborables.",
        envio: "",
        error: "Lo siento, no entendí lo que quisiste decir. ¿Podrías reformular tu pregunta?"
      };

      // Obtenemos los elementos del ChatBot
      const chatBot = document.getElementById("chatBot");
      const chatBotHistorial = document.getElementById("chatBotHistorial");
      const chatBotMensaje = document.getElementById("chatBotMensaje");
      const chatBotEnviar = document.getElementById("chatBotEnviar");

      // Creamos la función para enviar un mensaje del usuario
      function enviarMensajeUsuario() {
        let mensaje = chatBotMensaje.value;
        if (mensaje.trim() === "") return;
        chatBotMensaje.value = "";

        // obtenemos el nombre de usuario desde el servidor
        fetch('http://localhost/m14/BBDD_Tienda_Online/mostrarNombre.php')
        .then(response => response.text())
        .then(nombre => {
          agregarMensajeChat(nombre, mensaje); // agregamos el nombre de usuario al mensaje
          responderMensajeChat(mensaje);
        })
        .catch(error => console.log(error));
      }


      // Creamos la función para agregar un mensaje al historial del ChatBot
      function agregarMensajeChat(usuario, mensaje) {
        let nuevoMensaje = document.createElement("div");
        nuevoMensaje.innerHTML = "<strong>" + usuario + ":</strong> " + mensaje;
        chatBotHistorial.appendChild(nuevoMensaje);
      }


      // Creamos la función para responder un mensaje del usuario
      function responderMensajeChat(mensaje) {
        // Verificamos si el mensaje es un saludo
        if (mensaje.includes("hola") || mensaje.includes("buenos días") || mensaje.includes("buenas tardes") || mensaje.includes("buenas noches") || mensaje.includes("Hola") || mensaje.includes("Buenos días") || mensaje.includes("Buenas noches") || mensaje.includes("Buenas tardes")) {
          agregarMensajeChat("ChatBot", respuestas.saludo);
        }
        // Verificamos si el mensaje es una despedida
        else if (mensaje.includes("pago") || mensaje.includes("pagar") || mensaje.includes("Pago") || mensaje.includes("Pagar")) {
          agregarMensajeChat("ChatBot", respuestas.metodoPago);
        }
        else if (mensaje.includes("contacto") || mensaje.includes("contactar") || mensaje.includes("email") || mensaje.includes("correo") || mensaje.includes("Contacto") || mensaje.includes("Email") || mensaje.includes("Correo") || mensaje.includes("Contactar")) {
          agregarMensajeChat("ChatBot", respuestas.metodoContacto);
        }
        else if (mensaje.includes("adiós") || mensaje.includes("chau") || mensaje.includes("hasta luego")) {
          agregarMensajeChat("ChatBot", respuestas.despedida);
        }
        // Verificamos si el mensaje es sobre una compra
        else if (mensaje.includes("quiero comprar") || mensaje.includes("quiero comprar") || mensaje.includes("quiero comprar")) {
          agregarMensajeChat("ChatBot", respuestas.compra);
        }
        // Verificamos si el mensaje es sobre el stock de un disco
        else if (mensaje.includes("tienes stock") || mensaje.includes("hay")) {
          agregarMensajeChat("ChatBot", respuestas.stock);
        }
        else if (mensaje.includes("tiempo de envio") || mensaje.includes("tiempo aproximado de envio") || mensaje.includes("tarda en llegar")) {
          agregarMensajeChat("ChatBot", respuestas.tiempoEnvio);
        }
        // Verificamos si el mensaje es sobre el stock de un disco
        else if (mensaje.includes("no tenés") || mensaje.includes("no tienes") || mensaje.includes("no hay")) {
          agregarMensajeChat("ChatBot", respuestas.noStock);
        }
        else if (mensaje.includes("obtenerDiscos") || (mensaje.includes("Lista de Discos")) || (mensaje.includes("lista de discos")) || (mensaje.includes("lista")) || (mensaje.includes("Lista"))) {
        agregarMensajeChat("ChatBot", respuestas.obtenerDiscos);
        fetch("http://localhost/m14/BBDD_Tienda_Online/obtener_discos.php")
          .then(response => response.json())
          .then(data => {
            console.log(data);
            let respuesta = "Lista de discos:\n";
            data.forEach(discos => {
              respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
            });
            agregarMensajeChat("ChatBot", respuesta);
          })
          .catch(error => {
          // Si se produjo un error al llamar a la API, se envía un mensaje de error
          agregarMensajeChat("ChatBot", respuestas.error);
          });
          }else if (mensaje.includes("linkin") || (mensaje.includes("linkin park")) || (mensaje.includes("Linkin Park")) || (mensaje.includes("Linkin park"))) {
        agregarMensajeChat("ChatBot", respuestas.linkin);
        fetch("http://localhost/m14/BBDD_Tienda_Online/discoslinkin.php")
          .then(response => response.json())
          .then(data => {
            console.log(data);
            let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
            data.forEach(discos => {
              respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
            });
            agregarMensajeChat("ChatBot", respuesta);
          })
          .catch(error => {
          // Si se produjo un error al llamar a la API, se envía un mensaje de error
          agregarMensajeChat("ChatBot", respuestas.error);
          });
          } else if (mensaje.includes("soad") || (mensaje.includes("SOAD")) || (mensaje.includes("System of a Down")) || (mensaje.includes("System")) || (mensaje.includes("system")) || (mensaje.includes("system of a down"))) {
          agregarMensajeChat("ChatBot", respuestas.soad);
          fetch("http://localhost/m14/BBDD_Tienda_Online/discossoad.php")
            .then(response => response.json())
            .then(data => {
              console.log(data);
              let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
              data.forEach(discos => {
                respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
              });
              agregarMensajeChat("ChatBot", respuesta);
            })
            .catch(error => {
            // Si se produjo un error al llamar a la API, se envía un mensaje de error
            agregarMensajeChat("ChatBot", respuestas.error);
            });
          } else if (mensaje.includes("korn") || (mensaje.includes("Korn"))) {
          agregarMensajeChat("ChatBot", respuestas.korn);
          fetch("http://localhost/m14/BBDD_Tienda_Online/discoskorn.php")
            .then(response => response.json())
            .then(data => {
              console.log(data);
              let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
              data.forEach(discos => {
                respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
              });
              agregarMensajeChat("ChatBot", respuesta);
            })
            .catch(error => {
            // Si se produjo un error al llamar a la API, se envía un mensaje de error
            agregarMensajeChat("ChatBot", respuestas.error);
            });
          } else if (mensaje.includes("metallica") || (mensaje.includes("Metallica"))) {
            agregarMensajeChat("ChatBot", respuestas.metallica);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discosmetallica.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }else if (mensaje.includes("acdc") || (mensaje.includes("ACDC")) || (mensaje.includes("AC/DC")) || (mensaje.includes("ac/dc"))) {
            agregarMensajeChat("ChatBot", respuestas.acdc);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discosacdc.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }else if (mensaje.includes("judas") || (mensaje.includes("Judas")) || (mensaje.includes("judas priest")) || (mensaje.includes("Judas Priest"))) {
            agregarMensajeChat("ChatBot", respuestas.judas);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discosjudas.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }else if (mensaje.includes("iron") || (mensaje.includes("Iron")) || (mensaje.includes("Iron Maiden")) || (mensaje.includes("iron maiden"))) {
            agregarMensajeChat("ChatBot", respuestas.iron);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discosiron.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }else if (mensaje.includes("aerosmith") || (mensaje.includes("Aerosmith"))) {
            agregarMensajeChat("ChatBot", respuestas.aerosmith);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discosaerosmith.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }else if (mensaje.includes("boston") || (mensaje.includes("Boston"))) {
            agregarMensajeChat("ChatBot", respuestas.boston);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discosboston.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }else if (mensaje.includes("Guns and roses") || (mensaje.includes("guns and roses")) || (mensaje.includes("guns and Roses")) || (mensaje.includes("guns"))|| (mensaje.includes("Guns"))) {
            agregarMensajeChat("ChatBot", respuestas.guns);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discosgunsandroses.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }else if (mensaje.includes("led") || (mensaje.includes("Led")) || (mensaje.includes("Led zeppelin ")) || (mensaje.includes("Led Zeppelin"))|| (mensaje.includes("led zeppelin"))) {
            agregarMensajeChat("ChatBot", respuestas.led);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discosledzeppelin.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }else if (mensaje.includes("pink") || (mensaje.includes("Pink")) || (mensaje.includes("Pink Floyd")) || (mensaje.includes("Pink floyd"))|| (mensaje.includes("pink floyd"))) {
            agregarMensajeChat("ChatBot", respuestas.pink);
            fetch("http://localhost/m14/BBDD_Tienda_Online/discospinkfloyd.php")
              .then(response => response.json())
              .then(data => {
                console.log(data);
                let respuesta = "Lista de discos disponibles en nuestra tienda:\n";
                data.forEach(discos => {
                  respuesta += `<br>- ${discos.nombre}, ${discos.precio}€`;
                });
                agregarMensajeChat("ChatBot", respuesta);
              })
              .catch(error => {
              // Si se produjo un error al llamar a la API, se envía un mensaje de error
              agregarMensajeChat("ChatBot", respuestas.error);
              });
          }
          
          // Si no se reconoce el mensaje, se envía un mensaje de error
        else {
          agregarMensajeChat("ChatBot", respuestas.error);
        }
          
        }
            // Si no se reconoce el mensaje, se envía un mensaje de error
            

        // Agregamos el evento click al botón de enviar mensaje
        chatBotEnviar.addEventListener("click", enviarMensajeUsuario);

        // Agregamos el evento keypress al input de mensaje
        chatBotMensaje.addEventListener("keypress", function (e) {
          if (e.key === "Enter") {
            enviarMensajeUsuario();
          }
        });

        // Agregamos el evento click al chatBot

        chatBot.addEventListener("click", function () {
          chatBotMensaje.focus();
        });

        // Agregamos el evento load al window

        window.addEventListener("load", function () {
          chatBotMensaje.focus();
        });
      
    </script>
    </div>
    </div> 
</body>
</html>