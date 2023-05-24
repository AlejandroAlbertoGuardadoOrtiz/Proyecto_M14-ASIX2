//Variable que mantiene el estado visible del carrito
var carritoVisible = false;

var carrito = [];

//Espermos que todos los elementos de la pàgina cargen para ejecutar el script
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready();
}

function comprobarcarrito(){
    if (localStorage.getItem("carrito")){
        mostrarCarrito();
    }
}
function ready(){

    if (localStorage.getItem("carrito")) {
        carrito = JSON.parse(localStorage.getItem("carrito"))
        hacerVisibleCarrito();
        carrito.forEach((item, index) => {
            agregarItemAlCarrito(item.titulo, item.precio, item.imagenSrc, item.cantidad, index)
        });
    }
    
    

    //Agregremos funcionalidad a los botones eliminar del carrito
    var botonesEliminarItem = document.getElementsByClassName('btn-eliminar');
    for(var i=0;i<botonesEliminarItem.length; i++){
        var button = botonesEliminarItem[i];
        button.addEventListener('click',eliminarItemCarrito);
    }

    //Agrego funcionalidad al boton sumar cantidad
    var botonesSumarCantidad = document.getElementsByClassName('sumar-cantidad');
    for(var i=0;i<botonesSumarCantidad.length; i++){
        var button = botonesSumarCantidad[i];
        button.addEventListener('click',sumarCantidad);
    }

     //Agrego funcionalidad al buton restar cantidad
    var botonesRestarCantidad = document.getElementsByClassName('restar-cantidad');
    for(var i=0;i<botonesRestarCantidad.length; i++){
        var button = botonesRestarCantidad[i];
        button.addEventListener('click',restarCantidad);
    }

    //Agregamos funcionalidad al boton Agregar al carrito
    var botonesAgregarAlCarrito = document.getElementsByClassName('boton-item');
    for(var i=0; i<botonesAgregarAlCarrito.length;i++){
        var button = botonesAgregarAlCarrito[i];
        button.addEventListener('click', agregarAlCarritoClicked);
    }

    //Agregamos funcionalidad al botón comprar
    document.getElementsByClassName('btn-pagar')[0].addEventListener('click',pagarClicked)
}
//Eliminamos todos los elementos del carrito y lo ocultamos
function pagarClicked(){
    location.replace('payment.php');
    //Elimino todos los elmentos del carrito
    //var carritoItems = document.getElementsByClassName('carrito-items')[0];
   // while (carritoItems.hasChildNodes()){
     //   carritoItems.removeChild(carritoItems.firstChild)
    //}
    //Actualizamos el carrito en el local storage
    
   // localStorage.setItem('carrito', JSON.stringify(carrito));

    //actualizarTotalCarrito();
    //ocultarCarrito();
}
//Funciòn que controla el boton clickeado de agregar al carrito
function agregarAlCarritoClicked(event){
    var button = event.target;
    var item = button.parentElement;
    var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
    var precio = item.getElementsByClassName('precio-item')[0].innerText;
    var imagenSrc = item.getElementsByClassName('img-item')[0].src;

    // Buscar si el producto ya existe en el carrito
    for (var i = 0; i < carrito.length; i++) {
        if (carrito[i].titulo === titulo) {
            carrito[i].cantidad++; // aumentar la cantidad del producto existente
            break;
        }
    }

    // Si no existe, agregarlo al carrito con cantidad 1
    if (i === carrito.length) {
        var cantidad = 1;
        carrito.push({titulo:titulo, precio:precio, imagenSrc:imagenSrc, cantidad:cantidad});
    }

    localStorage.setItem("carrito", JSON.stringify(carrito));

    agregarItemAlCarrito(titulo, precio, imagenSrc, carrito[i].cantidad, i); // pasar la cantidad actualizada
    hacerVisibleCarrito();   
}

//Funcion que hace visible el carrito
function hacerVisibleCarrito(){
    carritoVisible = true;
    var carritov = document.getElementsByClassName('carrito')[0];
    carritov.style.marginRight = '0';
    carritov.style.opacity = '1';

    var items =document.getElementsByClassName('contenedor-items')[0];
    items.style.width = '60%';
}
function mostrarCarrito() {
    const carritoGuardado = localStorage.getItem('carrito');
    if (carritoGuardado) {
      carrito = JSON.parse(carritoGuardado);
      for (let i = 0; i < carrito.length; i++) {
        const producto = carrito[i];
        // Mostrar el producto en la página del carrito
      }
    }
  }

//Funciòn que agrega un item al carrito
function agregarItemAlCarrito(titulo, precio, imagenSrc,cantidad, position){
    var item = document.createElement('div');
    item.classList.add = ('item');
    var itemsCarrito = document.getElementsByClassName('carrito-items')[0];
    
    

    //controlamos que el item que intenta ingresar no se encuentre en el carrito
    var nombresItemsCarrito = itemsCarrito.getElementsByClassName('carrito-item-titulo');
    for(var i=0;i < nombresItemsCarrito.length;i++){
        if(nombresItemsCarrito[i].innerText==titulo){
            alert("El item ya se encuentra en el carrito");
            return;
        }
    }

    var itemCarritoContenido = `
        <div class="carrito-item">
            <img src="${imagenSrc}" width="80px" alt="">
            <div class="carrito-item-detalles">
                <span class="carrito-item-titulo">${titulo}</span>
                <div class="selector-cantidad">
                    <i class="fa-solid fa-minus restar-cantidad"></i>
                    <input type="text" value="1" class="carrito-item-cantidad" disabled>
                    <i class="fa-solid fa-plus sumar-cantidad"></i>
                </div>
                <span class="carrito-item-precio">${precio}</span>
            </div>
            <button data-position="${position}" class="btn-eliminar">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    `
    item.innerHTML = itemCarritoContenido;
    itemsCarrito.append(item);

    //Agregamos la funcionalidad eliminar al nuevo item
     //item.getElementsByClassName('btn-eliminar')[0].addEventListener('click', (ev) => {
     //   eliminarItemCarrito(ev)
     //});

     document.querySelectorAll(".btn-eliminar").forEach((element, index) => {
        element.addEventListener("click", eliminarItemCarrito)
     })

    //Agregmos al funcionalidad restar cantidad del nuevo item
    var botonRestarCantidad = item.getElementsByClassName('restar-cantidad')[0];
    botonRestarCantidad.addEventListener('click',restarCantidad);

    //Agregamos la funcionalidad sumar cantidad del nuevo item
    var botonSumarCantidad = item.getElementsByClassName('sumar-cantidad')[0];
    botonSumarCantidad.addEventListener('click',sumarCantidad);

    //Actualizamos total
    actualizarTotalCarrito();
}
//Aumento en uno la cantidad del elemento seleccionado
function sumarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
    var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
    cantidadActual++;
    selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
    actualizarTotalCarrito();
}
//Resto en uno la cantidad del elemento seleccionado
function restarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
    var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
    cantidadActual--;
    if(cantidadActual>=1){
        selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
        actualizarTotalCarrito();
    }
}

//Elimino el item seleccionado del carrito
function eliminarItemCarrito(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    carrito.splice(event.target.dataset.position, 1);
    localStorage.setItem("carrito", JSON.stringify(carrito))
    console.log(localStorage.getItem("carrito"))
    //Actualizamos el total del carrito
    actualizarTotalCarrito();
    document.getElementById("carrito-items").innerHTML = "";
    carrito.forEach((item, index) => {
        agregarItemAlCarrito(item.titulo, item.precio, item.imagenSrc, item.cantidad, index)
    });


    //la siguiente funcion controla si hay elementos en el carrito
    //Si no hay elimino el carrito
    ocultarCarrito();
}
//Funciòn que controla si hay elementos en el carrito. Si no hay oculto el carrito.
function ocultarCarrito(){
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
    if(carritoItems.childElementCount==0){
        var carrito = document.getElementsByClassName('carrito')[0];
        carrito.style.marginRight = '-100%';
        carrito.style.opacity = '0';
        carritoVisible = false;
    
        var items =document.getElementsByClassName('contenedor-items')[0];
        items.style.width = '100%';
    }
}
//Actualizamos el total de Carrito
function actualizarTotalCarrito(){
    
    // seleccionamos el contenedor carrito
    var carritoContenedor = document.getElementsByClassName('carrito')[0];
    var carritoItems = carritoContenedor.getElementsByClassName('carrito-item');
  
    var total = 0;
  
    // recorremos cada elemento del carrito para actualizar el total
    for (var i=0; i < carritoItems.length; i++) {
      var item = carritoItems[i];
      var cantidad = parseInt(item.getElementsByClassName('carrito-item-cantidad')[0].value);
      var precio = parseInt(item.getElementsByClassName('carrito-item-precio')[0].innerText.replace('$',''));
      total += cantidad * precio;
    }
  
    total = Math.round(total);
    localStorage.setItem('totalCarrito', total);
    
  
    // actualizamos el elemento del DOM que muestra el precio total del carrito
    document.getElementById('total').innerText = `Tu Total: ${total}€`;

  }







