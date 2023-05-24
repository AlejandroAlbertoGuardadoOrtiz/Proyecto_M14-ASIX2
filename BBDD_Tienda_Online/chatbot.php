<?php 
    // Inicio de sesión
    session_start();

    if(!isset($_SESSION['usuario'])) {
      $_SESSION['usuario'] = array();
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Asistente</title>
    <link rel="stylesheet" href="chat_style.css">
  </head>
  <body>
    <header>
        <h1>ChatBot</h1>
      
    </header>
    <main>
      <div id="chatBot">
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
        precio: "El precio del disco es de $XX.XX",
        stock: "Sí, tenemos en stock.",
        noStock: "Lo siento, actualmente no tenemos en stock.",
        metodoPago: "Aceptamos pago mediante PayPal y tarjeta de credito",
        metodoContacto: "Si desea ponerse en contacto con nosotros directamente nuestro email es nuestratienda@gmail.com",
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
        if (mensaje.includes("hola") || mensaje.includes("buenos días") || mensaje.includes("buenas tardes") || mensaje.includes("buenas noches")) {
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
        // Verificamos si el mensaje es sobre el precio de un disco
        else if (mensaje.includes("cuánto cuesta") || mensaje.includes("cuanto cuesta") || mensaje.includes("precio")) {
          agregarMensajeChat("ChatBot", respuestas.precio);
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
    
    </body>
  
    </html>