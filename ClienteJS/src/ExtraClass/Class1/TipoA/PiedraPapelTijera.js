function jugarPiedraPapelTijera() {
    let nombreJugador1 = prompt("Ingrese nombre del jugador 1:");
    let jugadasJugador1 = prompt("Ingrese jugadas de " + nombreJugador1 + " (ejemplo: piedra papel tijera):");

    let nombreJugador2 = prompt("Ingrese nombre del jugador 2:");
    let jugadasJugador2 = prompt("Ingrese jugadas de " + nombreJugador2 + " (ejemplo: piedra papel tijera):");

    // Dividir las jugadas con split
    let listaJugadas1 = jugadasJugador1.split(" ");
    let listaJugadas2 = jugadasJugador2.split(" ");

    // Contadores de rondas ganadas
    let puntosJugador1 = 0;
    let puntosJugador2 = 0;

    // Bucle para comparar jugada a jugada
    for (let i = 0; i < listaJugadas1.length; i++) {
        let jugada1 = listaJugadas1[i];
        let jugada2 = listaJugadas2[i];

        if (jugada1 === jugada2) {
            // Empate, no suma nadie
        } else if (
            (jugada1 === "piedra" && jugada2 === "tijera") ||
            (jugada1 === "papel" && jugada2 === "piedra") ||
            (jugada1 === "tijera" && jugada2 === "papel")
        ) {
            puntosJugador1 = puntosJugador1 + 1;
        } else {
            puntosJugador2 = puntosJugador2 + 1;
        }
    }

    // Mostrar resultado final
    alert("Resultado: " + puntosJugador1 + " (" + nombreJugador1 + ") vs " + puntosJugador2 + " (" + nombreJugador2 + ")");

    if (puntosJugador1 > puntosJugador2) {
        alert("Ganador: " + nombreJugador1);
    } else if (puntosJugador2 > puntosJugador1) {
        alert("Ganador: " + nombreJugador2);
    } else {
        alert("Empate");
    }
}

// Ejecutar programa
jugarPiedraPapelTijera();
