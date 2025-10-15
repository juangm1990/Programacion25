// Declarar Array
const numeros1 = [1,2,3,4,5]
const numeros2 = new Array (1,2,3,4,5)
const numeros3 = [1,2,3,4,5,[1,2,3,4,5]]

// Mostrar en consola
console.log(numeros1)
console.log(numeros3[5][3])
  //console.table(numeros2)
  //console.table(numeros3)

//Recorrer un array - Iterador
for (let i = 0; i < numeros1.length; i++) {
  console.log(numeros1[i]);
  
}

// Agregar al final (Se modifica en el mismo array)
numeros3.push(8)
console.table(numeros3)


// CRUD ARRAY
// Declarar array vacio
const carrito = []

//Crear objeto sin la estructura de una clase JSON
const producto1 = {
  nombre: "Impresora 3D",
  precio: 250
}

carrito.push(producto1)
console.table(carrito)

const producto2 = {
  nombre: "Ninebot One St",
  precio: 300
}

///////////// AÑADIR /////////////
// Añadir un elemento al principio de un array
carrito.unshift(producto2)
console.table(carrito)

///////////// ELIMINAR /////////////
// Eliminar ultimo elemento de un array
carrito.pop()
console.table(carrito)

// Eliminar primer elemento de un array
carrito.shift()
console.table(carrito)

// Eliminar cualquier elemento de un array(posición, cantidad)
carrito.splice(0)
console.table(carrito)
let array = [8,99,100]
numeros.splice(numeros.length-1)
numeros.splice(2)

///////////// ACTUALIZAR /////////////
// Eliminar  elemento de un array (posición, cantidad, nueva cantidad) y lo actualizas
let numeros = [8,99,100]
console.log(numeros)
numeros.splice(1,1,5)
numeros.splice(numeros.length,1,5)
numeros.splice(numeros.length,0,{nombre:'prueba', edad:18})
console.log(numeros)


