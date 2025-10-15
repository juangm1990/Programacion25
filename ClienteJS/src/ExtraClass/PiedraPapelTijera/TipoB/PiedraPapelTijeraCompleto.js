function jugarPiedraPapelTijera() {
    let nombreJugador1 = prompt("Introduce el nombre del jugador 1:");
    let nombreJugador2 = prompt("Introduce el nombre del jugador 2:");

    // Control del bucle para pedir un número válido de rondas
    let rondasCorrectas = false;
    let rondas;

    while (rondasCorrectas == false) {
        rondas = prompt("¿Cuántas rondas quieren jugar?");
        
        if (rondas > 0) {
            rondasCorrectas = true;
        } else {
            console.log("Número no válido. Introduce un número mayor que 0.");
        }
    }

    // Contadores de resultados
    let victoriasJugador1 = 0;
    let victoriasJugador2 = 0;
    let empates = 0;

    // Bucle principal de juego
    for (let i = 1; i <= rondas; i++) {
        let jugada1 = prompt(nombreJugador1 + " elige: piedra, papel o tijera");
        let jugada2 = prompt(nombreJugador2 + " elige: piedra, papel o tijera");

        if (jugada1 == jugada2) {
            console.log("Ronda " + i + ": Empate");
            empates = empates + 1;
        } else if (
            (jugada1 == "piedra" && jugada2 == "tijera") ||
            (jugada1 == "papel" && jugada2 == "piedra") ||
            (jugada1 == "tijera" && jugada2 == "papel")
        ) {
            console.log("Ronda " + i + ": Gana " + nombreJugador1);
            victoriasJugador1 = victoriasJugador1 + 1;
        } else {
            console.log("Ronda " + i + ": Gana " + nombreJugador2);
            victoriasJugador2 = victoriasJugador2 + 1;
        }
    }

    // Mostrar resultados finales
    console.log("Resultados finales:");
    console.log(nombreJugador1 + " victorias: " + victoriasJugador1);
    console.log(nombreJugador2 + " victorias: " + victoriasJugador2);
    console.log("Empates: " + empates);

    if (victoriasJugador1 > victoriasJugador2) {
        console.log("El ganador es: " + nombreJugador1);
    } else if (victoriasJugador2 > victoriasJugador1) {
        console.log("El ganador es: " + nombreJugador2);
    } else {
        console.log("El juego terminó en empate");
    }
}

// Ejecutar la partida
jugarPiedraPapelTijera();
