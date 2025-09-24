let jugarOtra = "si";

do {
    let jugador1 = prompt("Nombre: Jugador 1");
    let jugador2 = prompt("Nombre: Jugador 2");

    let rondas = parseInt(prompt("Introduce el número de rondas"));
    let rondasJ1 = 0;
    let rondasJ2 = 0;

    while (rondas > 0) {
        let jugada1 = prompt(jugador1 + ": Piedra, Papel o Tijera");
        let jugada2 = prompt(jugador2 + ": Piedra, Papel o Tijera");

        let contador1 = 0;
        let contador2 = 0;

        let arrayj1 = jugada1.split(" ");
        let arrayj2 = jugada2.split(" ");

        for (let i = 0; i < arrayj1.length; i++) {
            if (arrayj1[i] == arrayj2[i]) {
                // Empate en esta jugada
            } else if (
                (arrayj1[i] == "piedra" && arrayj2[i] == "tijera") ||
                (arrayj1[i] == "papel" && arrayj2[i] == "piedra") ||
                (arrayj1[i] == "tijera" && arrayj2[i] == "papel")
            ) {
                contador1++
            } else {
                contador2++
            }
        }

        alert(jugador1 + ": " + contador1 + " | " + jugador2 + ": " + contador2);

        if (contador1 > contador2) {
            alert("Gana " + jugador1);
            rondasJ1 = rondasJ1 + 1;
        } else if (contador2 > contador1) {
            alert("Gana " + jugador2);
            rondasJ2 = rondasJ2 + 1;
        } else {
            alert("Empate");
        }

        rondas = rondas - 1; // restamos una ronda
    }

    // Resultado final de la partida
    alert("Resultado final:\n" +
          jugador1 + ": " + rondasJ1 + " rondas ganadas\n" +
          jugador2 + ": " + rondasJ2 + " rondas ganadas");

    // Preguntar si quiere jugar otra partida
    jugarOtra = prompt("¿Quiere jugar otra partida? (si/no)");

} while (jugarOtra == "si");

alert("¡Gracias por jugar!");

