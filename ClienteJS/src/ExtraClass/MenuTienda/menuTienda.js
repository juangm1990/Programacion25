// Array vacío
let productos = [];

// Insertar producto
function insertarProducto() {
    let nombre = prompt("Introduce el nombre del producto:");
    let precio = prompt("Introduce el precio del producto:");
    let enStock = confirm("¿Está en stock? (Aceptar = Sí / Cancelar = No)");

    let nuevoProducto = { nombre: nombre, precio: Number(precio), enStock: enStock };
    productos.push(nuevoProducto);

    alert("Producto insertado correctamente.");
}

// Eliminar producto
function eliminarProducto() {
    let nombre = prompt("Introduce el nombre del producto a eliminar:");
    let encontrado = false;

    for (let i = 0; i < productos.length; i++) {
        if (productos[i].nombre == nombre) {
            productos.splice(i, 1);
            alert("Producto eliminado.");
            encontrado = true;
        }
    }

    if (encontrado == false) {
        alert("Producto no encontrado.");
    }
}

// Mostrar productos
function mostrarProductos() {
    if (productos.length == 0) {
        console.log("No hay productos.");
    } else {
        console.log("LISTADO DE PRODUCTOS:");
        for (let i = 0; i < productos.length; i++) {
            console.log(
                productos[i].nombre + " - " + productos[i].precio + "€ - " +
                (productos[i].enStock == true ? "En stock" : "Sin stock")
            );
        }
    }
}

// Filtrar precio mayor a 10€
function filtrarPorPrecio() {
    console.log("PRODUCTOS CON PRECIO > 10€:");
    let hay = false;

    for (let i = 0; i < productos.length; i++) {
        if (productos[i].precio > 10) {
            console.log(productos[i].nombre + " - " + productos[i].precio + "€");
            hay = true;
        }
    }

    if (hay == false) {
        console.log("No hay productos con precio mayor a 10€.");
    }
}

// Calcular media de precios
function calcularMedia() {
    if (productos.length == 0) {
        alert("No hay productos para calcular la media.");
    } else {
        let suma = 0;

        for (let i = 0; i < productos.length; i++) {
            suma = suma + productos[i].precio;
        }

        let media = suma / productos.length;
        alert("La media de precios es: " + media + "€");
    }
}

// Mostrar productos en stock
function mostrarStock() {
    console.log("PRODUCTOS EN STOCK:");
    let hay = false;

    for (let i = 0; i < productos.length; i++) {
        if (productos[i].enStock == true) {
            console.log(productos[i].nombre + " - " + productos[i].precio + "€");
            hay = true;
        }
    }

    if (hay == false) {
        console.log("No hay productos en stock.");
    }
}
