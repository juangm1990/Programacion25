function jugarPiedraPapelTijera() {
    // Pedir nombres
    let nombreJugador1 = prompt("Introduce el nombre del jugador 1:");
    let jugadasJugador1 = prompt("Introduce las jugadas de " + nombreJugador1 + " (Ejemplo: Piedra, papel o tijera):");

    let nombreJugador2 = prompt("Introduce el nombre del jugador 2:");
    let jugadasJugador2 = prompt("Introduce las jugadas de " + nombreJugador2 + " (Ejemplo: Piedra, papel o tijera):");

    // Separar las jugadas con split (espacios)
    let listaJugadas1 = jugadasJugador1.split(" ");
    let listaJugadas2 = jugadasJugador2.split(" ");

    // Contadores
    let puntosJugador1 = 0;
    let puntosJugador2 = 0;

    // Bucle para comparar jugadas
    for (let i = 0; i < listaJugadas1.length; i++) {
        let jugada1 = listaJugadas1[i];
        let jugada2 = listaJugadas2[i];

        if (jugada1 == jugada2) {
            console.log("Ronda " + (i + 1) + ": Empate");
        } else if (
            (jugada1 == "piedra" && jugada2 == "tijera") ||
            (jugada1 == "papel" && jugada2 == "piedra") ||
            (jugada1 == "tijera" && jugada2 == "papel")
        ) {
            console.log("Ronda " + (i + 1) + ": Gana " + nombreJugador1);
            puntosJugador1 = puntosJugador1 + 1;
        } else {
            console.log("Ronda " + (i + 1) + ": Gana " + nombreJugador2);
            puntosJugador2 = puntosJugador2 + 1;
        }
    }

    // Mostrar resultados finales
    console.log("Resultado final:");
    console.log(nombreJugador1 + ": " + puntosJugador1 + " puntos");
    console.log(nombreJugador2 + ": " + puntosJugador2 + " puntos");

    if (puntosJugador1 > puntosJugador2) {
        console.log("Ganador: " + nombreJugador1);
    } else if (puntosJugador2 > puntosJugador1) {
        console.log("Ganador: " + nombreJugador2);
    } else {
        console.log("Empate total");
    }
}

// Ejecutar programa
jugarPiedraPapelTijera();
