const btn_jugar = document.querySelector("#btn_jugar");


const piedra1 = document.querySelector("#piedra1")
const papel1 = document.querySelector("#papel1")
const tijera1 = document.querySelector("#tijera1")
const piedra2 = document.querySelector("#piedra2")
const papel2 = document.querySelector("#papel2")
const tijera2 = document.querySelector("#tijera2")
const imagenes = document.querySelector("#imagenes")
let puntos1 = 0
let puntos2 = 0


imagenes.addEventListener("click", () => {
    piedra1.classList.remove("borde")
    papel1.classList.remove("borde")
    tijera1.classList.remove("borde")



}, true)

piedra1.addEventListener("click", () => {



    piedra1.classList.add("borde")

})
papel1.addEventListener("click", () => {


    papel1.classList.add("borde")

})


tijera1.addEventListener("click", () => {


    tijera1.classList.add("borde")

})

// ----JUGADOR 2-----

piedra2.addEventListener("click", () => {
    piedra2.classList.remove("borde")
    papel2.classList.remove("borde")
    tijera2.classList.remove("borde")

    piedra2.classList.add("borde")

})
papel2.addEventListener("click", () => {
    piedra2.classList.remove("borde")
    papel2.classList.remove("borde")
    tijera2.classList.remove("borde")

    papel2.classList.add("borde")

})


tijera2.addEventListener("click", () => {
    piedra2.classList.remove("borde")
    papel2.classList.remove("borde")
    tijera2.classList.remove("borde")

    tijera2.classList.add("borde")

})


btn_jugar.addEventListener("click", () => {
    const contador1 = document.querySelector("#contador1")
    const contador2 = document.querySelector("#contador2")
    let jugadaJugador1 = "";
    let jugadaJugador2 = "";

    if (piedra1.classList.contains("borde")) {
        jugadaJugador1 = "piedra"
    } else if (papel1.classList.contains("borde")) {
        jugadaJugador1 = "papel"
    } else if (tijera1.classList.contains("borde")) {
        jugadaJugador1 = "tijera"
    } else {

    }

    


    if (piedra2.classList.contains("borde")) {
        jugadaJugador2 = "piedra"
    } else if (papel2.classList.contains("borde")) {
        jugadaJugador2 = "papel"
    } else if (tijera2.classList.contains("borde")) {
        jugadaJugador2 = "tijera"
    } else {

    }

    if (jugadaJugador1 != "" || jugadaJugador2 != "") {

        if (jugadaJugador1 == jugadaJugador2) {
            alert("EMPATE")
        } else if (jugadaJugador1 == "piedra" && jugadaJugador2 == "tijera" || jugadaJugador1 == "tijera" && jugadaJugador2 == "papel" || jugadaJugador1 == "papel" && jugadaJugador2 == "piedra") {
            puntos1++
        } else {
            puntos2++
        }


        contador1.textContent = puntos1
        contador2.textContent = puntos2
    }else{
        alert("Selecciona correctamente")
    }
})