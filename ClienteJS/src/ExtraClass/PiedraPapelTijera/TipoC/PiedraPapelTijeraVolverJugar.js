function jugarPiedraPapelTijera() {
    let nombreJugador1 = prompt("Introduce el nombre del jugador 1:");
    let nombreJugador2 = prompt("Introduce el nombre del jugador 2:");

    // Contadores totales de partidas ganadas
    let partidasJugador1 = 0;
    let partidasJugador2 = 0;
    let totalPartidas = 0;

    let jugar = true;

    while (jugar == true) {
        // Cada partida nueva
        let jugada1 = prompt(nombreJugador1 + " elige: piedra, papel o tijera");
        let jugada2 = prompt(nombreJugador2 + " elige: piedra, papel o tijera");

        totalPartidas = totalPartidas + 1;
        console.log("Partida " + totalPartidas + ":");
        console.log(nombreJugador1 + " eligió " + jugada1);
        console.log(nombreJugador2 + " eligió " + jugada2);

        // Comprobamos quién gana
        if (jugada1 == jugada2) {
            alert("Empate en esta partida.");
            console.log("Resultado: Empate");
        } else if (
            (jugada1 == "piedra" && jugada2 == "tijera") ||
            (jugada1 == "papel" && jugada2 == "piedra") ||
            (jugada1 == "tijera" && jugada2 == "papel")
        ) {
            alert("Ha ganado " + nombreJugador1 + ".");
            console.log("Resultado: Ha ganado " + nombreJugador1);
            partidasJugador1 = partidasJugador1 + 1;
        } else {
            alert("Ha ganado " + nombreJugador2 + ".");
            console.log("Resultado: Ha ganado " + nombreJugador2);
            partidasJugador2 = partidasJugador2 + 1;
        }

        console.log("----------------------------------");

        // Preguntar si quieren seguir
        jugar = confirm("¿Queréis jugar otra partida?");
    }

    // Mostrar resultados finales
    let mensajeFinal =
        "Resultados totales:\n" +
        nombreJugador1 + ": " + partidasJugador1 + " partidas ganadas.\n" +
        nombreJugador2 + ": " + partidasJugador2 + " partidas ganadas.\n" +
        "Total de partidas jugadas: " + totalPartidas;

    alert(mensajeFinal);

    console.log("==================================");
    console.log("RESULTADOS TOTALES:");
    console.log(nombreJugador1 + ": " + partidasJugador1 + " partidas ganadas");
    console.log(nombreJugador2 + ": " + partidasJugador2 + " partidas ganadas");
    console.log("Total de partidas jugadas: " + totalPartidas);

    if (partidasJugador1 > partidasJugador2) {
        console.log("Ganador total: " + nombreJugador1);
        alert("Ganador total: " + nombreJugador1);
    } else if (partidasJugador2 > partidasJugador1) {
        console.log("Ganador total: " + nombreJugador2);
        alert("Ganador total: " + nombreJugador2);
    } else {
        console.log("Empate total entre los jugadores.");
        alert("Empate total entre los jugadores.");
    }

    console.log("==================================");
    console.log("Gracias por jugar. ¡Hasta la próxima!");
}

// Ejecutar
jugarPiedraPapelTijera();
