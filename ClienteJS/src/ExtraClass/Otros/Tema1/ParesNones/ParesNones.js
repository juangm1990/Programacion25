function jugar() {
    let jugador1 = prompt("Nombre: Jugador 1");
    let jugador2 = prompt("Nombre: Jugador 2");

    let rondas = parseInt(prompt("Introduce el número de rondas"));
    let rondasJ1 = 0;
    let rondasJ2 = 0;

    while (rondas > 0) {
        let jugada1 = prompt(jugador1 + ": introduce tus números separados por espacios");
        let jugada2 = prompt(jugador2 + ": introduce tus números separados por espacios");

        let arrayJ1 = jugada1.split(" ");
        let arrayJ2 = jugada2.split(" ");

        let contador1 = 0;
        let contador2 = 0;

        for (let i = 0; i < arrayJ1.length; i++) {
            let num1 = parseInt(arrayJ1[i]);
            let num2 = parseInt(arrayJ2[i]);

            let suma = num1 + num2;

            alert("Ronda " + (i + 1) + ": " + num1 + " + " + num2 + " = " + suma);

            if (suma % 2 === 0) {
                contador1++; // jugador1 es par
            } else {
                contador2++; // jugador2 es non
            }
        }

        alert(jugador1 + ": " + contador1 + " | " + jugador2 + ": " + contador2);

        if (contador1 > contador2) {
            alert("Gana " + jugador1);
            rondasJ1++;
        } else if (contador2 > contador1) {
            alert("Gana " + jugador2);
            rondasJ2++;
        } else {
            alert("Empate");
        }

        rondas--; // restamos una ronda
    }

    // Resultado final de la partida
    alert("Resultado final:\n" +
          jugador1 + ": " + rondasJ1 + " rondas ganadas\n" +
          jugador2 + ": " + rondasJ2 + " rondas ganadas");
}

// Ejecutar varias partidas con confirm()
do {
    jugar();
} while (confirm("¿Quieres jugar otra partida?"));

alert("¡Gracias por jugar!");
