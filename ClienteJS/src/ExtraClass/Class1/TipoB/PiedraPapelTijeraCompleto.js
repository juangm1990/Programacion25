function jugarPiedraPapelTijera() {
    let nombreJugador1 = prompt("Ingrese nombre del jugador 1:");
    let nombreJugador2 = prompt("Ingrese nombre del jugador 2:");

    // Número de rondas
    let rondas = parseInt(prompt("¿Cuántas rondas quieren jugar?"));

    if (rondas <= 0) {
        alert("Número de rondas no válido.");
        return;
    }

    // Contadores
    let victoriasJugador1 = 0;
    let victoriasJugador2 = 0;
    let empates = 0;

    // Rondas
    for (let i = 1; i <= rondas; i++) {
        let jugada1 = prompt(nombreJugador1 + " elige: piedra, papel o tijera");
        let jugada2 = prompt(nombreJugador2 + " elige: piedra, papel o tijera");

        if (jugada1 === jugada2) {
            alert("Ronda " + i + ": Empate");
            empates = empates + 1;
        } else if (
            (jugada1 === "piedra" && jugada2 === "tijera") ||
            (jugada1 === "papel" && jugada2 === "piedra") ||
            (jugada1 === "tijera" && jugada2 === "papel")
        ) {
            alert("Ronda " + i + ": Gana " + nombreJugador1);
            victoriasJugador1 = victoriasJugador1 + 1;
        } else {
            alert("Ronda " + i + ": Gana " + nombreJugador2);
            victoriasJugador2 = victoriasJugador2 + 1;
        }
    }

    // Resultados finales
    alert("Resultados finales:" +
          "\n" + nombreJugador1 + " victorias: " + victoriasJugador1 +
          "\n" + nombreJugador2 + " victorias: " + victoriasJugador2 +
          "\nEmpates: " + empates);

    if (victoriasJugador1 > victoriasJugador2) {
        alert("El ganador es: " + nombreJugador1);
    } else if (victoriasJugador2 > victoriasJugador1) {
        alert("El ganador es: " + nombreJugador2);
    } else {
        alert("El juego terminó en empate");
    }
}

// Ejecutar partida
jugarPiedraPapelTijera();
