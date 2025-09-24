function jugar() {
    let jugador1 = prompt("Nombre: Jugador 1");
    let jugador2 = prompt("Nombre: Jugador 2");

    let jugada1 = prompt(jugador1 + ": Piedra, Papel o Tijera");
    let jugada2 = prompt(jugador2 + ": Piedra, Papel o Tijera");

    if (jugada1 === jugada2) {
        alert("Empate");
    } else if (
        (jugada1 === "piedra" && jugada2 === "tijera") ||
        (jugada1 === "papel" && jugada2 === "piedra") ||
        (jugada1 === "tijera" && jugada2 === "papel")
    ) {
        alert("Gana " + jugador1);
    } else {
        alert("Gana " + jugador2);
    }
}

// Ejecutar varias partidas con confirm()
do {
    jugar();
} while (confirm("¿Quieres jugar otra partida?"));

alert("¡Gracias por jugar!");
