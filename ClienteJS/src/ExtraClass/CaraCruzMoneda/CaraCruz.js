// Seleccionamos los elementos del DOM (las imágenes y contenedor principal)
const cara = document.querySelector("#cara")      // Imagen de la cara
const cruz = document.querySelector("#cruz")      // Imagen de la cruz
const maquina = document.querySelector("#maquina") // Imagen que muestra la elección aleatoria de la máquina
const contenedor = document.querySelector("#contenedor") // Contenedor que agrupa las dos imágenes del jugador

// Variables de control
let jugada = 0         // Guarda la elección del jugador: 0 = cara, 1 = cruz
let comprobar = 0      // Guarda la jugada aleatoria de la máquina (0 o 1)
const getRandomInt = max => Math.floor(Math.random() * max) 
// Función que genera un número entero aleatorio entre 0 y (max - 1)
// En este caso, al pasarle 2, devuelve 0 o 1

// Variables para mostrar y controlar las rachas
let rachaMaxhtml = document.querySelector("#rachaMax")  // Elemento HTML donde se muestra la racha máxima
let rachahtml = document.querySelector("#racha")        // Elemento HTML donde se muestra la racha actual
let racha = 0        // Racha actual de aciertos seguidos
let rachaMax = 0     // Racha máxima alcanzada

// ---------------------------
// EVENTO SOBRE EL CONTENEDOR
// ---------------------------

// Este evento se activa cada vez que el jugador hace clic en el área del contenedor.
// Su función es limpiar cualquier selección anterior (quita la opacidad).
// El "true" al final indica que se usa la fase de captura del evento.
contenedor.addEventListener("click", () => {
    cara.classList.remove("seleccionarMoneda")
    cruz.classList.remove("seleccionarMoneda")
}, true)


// ----------------------------------
// EVENTO CUANDO EL JUGADOR ELIGE CARA
// ----------------------------------
cara.addEventListener("click", () => {
    console.log(racha)  // Muestra la racha actual en consola (solo para comprobar funcionamiento)
    cara.classList.add("seleccionarMoneda") // Añade la clase para marcar visualmente la elección
    jugada = 0  // El jugador ha elegido "cara"
    
    comprobar = getRandomInt(2) // La máquina elige aleatoriamente 0 o 1

    // Si la jugada del jugador coincide con la de la máquina:
    if (jugada == comprobar) {
        racha++ // Suma 1 a la racha
        maquina.src = "img/cara.png" // Cambia la imagen de la máquina a cara

        // Si la nueva racha supera la máxima, se actualiza
        if (racha > rachaMax) {
            rachaMax = racha
        }
    } 
    // Si no coincide (pierde la ronda):
    else {
        maquina.src = "img/cruz.png" // Cambia la imagen de la máquina a cruz
        racha = 0 // Reinicia la racha
    }

    // Actualiza los valores de texto en el marcador HTML
    rachahtml.textContent = racha
    rachaMaxhtml.textContent = rachaMax
})


// ----------------------------------
// EVENTO CUANDO EL JUGADOR ELIGE CRUZ
// ----------------------------------
cruz.addEventListener("click", () => {
    cruz.classList.add("seleccionarMoneda") // Marca la cruz con opacidad
    jugada = 1  // El jugador ha elegido "cruz"

    comprobar = getRandomInt(2) // La máquina elige aleatoriamente 0 o 1

    // Si el jugador acierta:
    if (jugada == comprobar) {
        racha++ // Aumenta la racha
        maquina.src = "img/cruz.png" // Cambia imagen de la máquina a cruz

        // Actualiza la racha máxima si es necesario
        if (racha > rachaMax) {
            rachaMax = racha
        }
    } 
    // Si el jugador falla:
    else {
        maquina.src = "img/cara.png" // La máquina muestra cara (pierde)
        racha = 0 // Reinicia la racha
    }

    // Muestra en pantalla las rachas actualizadas
    rachahtml.textContent = racha
    rachaMaxhtml.textContent = rachaMax
})
