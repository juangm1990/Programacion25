let jugador1 = prompt("Nombre: Jugador 1");
let jugada1 = prompt("Piedra, Papel o Tijera (puedes poner varias jugadas separadas por espacio)");

let jugador2 = prompt("Nombre: Jugador 2");
let jugada2 = prompt("Piedra, Papel o Tijera (puedes poner varias jugadas separadas por espacio)");

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
        contador1++;
    } else {
        contador2++;
    }
}

// Mostrar resultado final
alert("( " + contador1 + " ) " + jugador1 + " | ( " + contador2 + " ) " + jugador2);

if (contador1 > contador2) {
    alert("Ha ganado " + jugador1);
} else if (contador1 < contador2) {
    alert("Ha ganado " + jugador2);
} else {
    alert("Empate");
}



// SACARLO POR TERMINAL
// node ./ NOMBRE DEL ARCHIVO .js 