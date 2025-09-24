let productos = [
    { nombre: "Manzana", precio: 12, enStock: true },
    { nombre: "Banana", precio: 8, enStock: false },
    { nombre: "Naranja", precio: 15, enStock: true }
];

// 1. Mostrar por consola el nombre de cada producto
function mostrarNombres(productos) {
    productos.forEach(p => console.log(p.nombre));
}

// 2. Mostrar por consola los nombres de productos con precio > 10
function mostrarMayorQue10(productos) {
    productos.forEach(p => {
        if (p.precio > 10) {
            console.log(p.nombre);
        }
    });
}

// 3. Mostrar por consola los nombres de productos en stock
function mostrarEnStock(productos) {
    productos.forEach(p => {
        if (p.enStock) {
            console.log(p.nombre);
        }
    });
}

// 4. Eliminar el producto indicado por el usuario del array
function eliminarProducto(productos, nombre) {
    let index = productos.findIndex(p => p.nombre === nombre);
    if (index !== -1) {
        productos.splice(index, 1);
        console.log(nombre + " eliminado.");
    } else {
        console.log("Producto no encontrado.");
    }
}

// 5. Añadir dos nuevos productos en la mitad del array
function anadirProductos(productos, nuevo1, nuevo2) {
    let mitad = Math.floor(productos.length / 2);
    productos.splice(mitad, 0, nuevo1, nuevo2);
    console.log("Productos añadidos.");
}

// -----------------------
// EXTRA DEL EXAMEN
// -----------------------

// Filtrar números menores que X
function filtrarNumerosMenoresQue(array, x) {
    return array.filter(num => num < x);
}

// Aplanar matriz en un array con todos los elementos
function obtenerArray(matriz) {
    return matriz.flat();
}

// -----------------------
// EJEMPLOS DE USO
// -----------------------

console.log("---- Todos los nombres ----");
mostrarNombres(productos);

console.log("---- Productos con precio > 10 ----");
mostrarMayorQue10(productos);

console.log("---- Productos en stock ----");
mostrarEnStock(productos);

console.log("---- Eliminar Banana ----");
eliminarProducto(productos, "Banana");
mostrarNombres(productos);

console.log("---- Añadir Pera y Mango ----");
anadirProductos(
    productos,
    { nombre: "Pera", precio: 11, enStock: true },
    { nombre: "Mango", precio: 20, enStock: false }
);
mostrarNombres(productos);

console.log("---- Filtrar menores que 7 ----");
console.log(filtrarNumerosMenoresQue([3, 8, 12, 1, 7, 4], 7));

console.log("---- Aplanar matriz ----");
console.log(obtenerArray([[1, 5, 4], [3, 10], [2, 5]]));
