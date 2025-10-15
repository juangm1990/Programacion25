const meses = ['Enero','Febrero','Marzo','Abril']
const meses2 = ['Mayo','Junio','Julio','Agosto']

const producto1 = {
  nombre: "Impresora 3d",
  precio: 500
}

const producto2 = {
  nombre: "XBox",
  precio: 500
}

const producto3 = {
  nombre: "Cata ATX RGB",
  precio: 500
}

// Método .forEach -> No devuelve nada
const carrito = [
  producto1,
  producto2,
  producto3
]

////////////////////////////////////

let total = 0

for (let i = 0; index < carrito.length; i++) {
  
  total = total + carrito[i].precio;
  
}

console.log(total)


for (let p of carrito){
  console.log(p.nombre)
}

// Posición en la que se encuentra cada producto
let i = 0

carrito.forEach(producto1 =>{
  console.log(i)
  console.log(producto1.nombre)
  i++
})

let j = 0
carrito.forEach((producto1, j) =>{
  console.log(producto1.nombre)
})

// Metodo .map (Igual que forEach pero devuelve un nuevo array)
const nuevoCarrito = carrito.map(producto => producto.precio)
console.table(nuevoCarrito)

const nuevoCarrito2 = carrito.map(producto1 => {
  console.log(producto1.nombre)
  return producto1.precio
  //return [producto.precio, producto.nombre]
})


// Comprobar si un valor existe en un array
carrito.forEach (producto => {
  if (producto.precio==30){
    console.log("OK")
  }
})

// Some -> array de objetos (True / False)
const existe = carrito.some(producto=>producto.precio==30)
console.log(exite)

// Para encontrar el indice y mostrar la posición
const indice1 = meses.findIndex ( mes => mes=="Abril") // Tener en cuenta la posición -1
console.log(indice)

const indice2 = carrito.findIndex(producto => producto.precio==50)
console.log(indice2)


// FILTER (MÁS UTILIZADOS)

// Para operaciones 
let res = carrito.reduce((total, producto1) => total + producto1.precio,0)
console.log(res)

// Todos los productos que tengan precio mayor a 50€
res = carrito.filter(producto1 => producto1.precio > 50)
console.log(res)

// Quitar todos los productos que tenga un precio distinto
res = carrito.filter(producto1 => producto1.precio !=30)
console.log(res)

// .find -> igual que finIndex pero te devuelve el elemento
res = carrito1.find (producto1 => producto1.precio !=30)
console.log(res)

// .concat -> unir dos array
res = meses.concat(meses2)
console.log(res)
