// Juego de emparejar pares de cartas

// Array con las cartas (dos de cada tipo)
let cartas = ["O", "O", "B", "B", "C", "C", "E", "E"];

// Tablero inicial (todas ocultas)
let tablero = ["X", "X", "X", "X", "X", "X", "X", "X"];

let intentos = 0;
let paresEncontrados = 0;

// Bucle principal del juego
while (paresEncontrados < 4) {

    console.log("CARTAS: " + tablero[0], tablero[1], tablero[2], tablero[3], tablero[4], tablero[5], tablero[6], tablero[7]);

    // Pedimos las dos posiciones separadas por coma
    let texto = prompt("Introduzca dos cartas a revelar (ejemplo: 1,2):");

    // Dividimos la cadena en dos partes usando split
    let posiciones = texto.split(",");

    // Guardamos las dos posiciones en variables
    let pos1 = posiciones[0];
    let pos2 = posiciones[1];

    // Comprobamos que las posiciones sean válidas
    if (
        pos1 < 1 || pos1 > 8 ||
        pos2 < 1 || pos2 > 8 ||
        pos1 == pos2
    ) {
        console.log("Posiciones no válidas. Inténtelo otra vez.");
    } else {
        intentos = intentos + 1;

        // Restamos 1 porque los arrays empiezan en 0
        let carta1 = cartas[pos1 - 1];
        let carta2 = cartas[pos2 - 1];

        // Revelamos las cartas elegidas
        tablero[pos1 - 1] = carta1;
        tablero[pos2 - 1] = carta2;

        console.log("CARTAS: " + tablero[0], tablero[1], tablero[2], tablero[3], tablero[4], tablero[5], tablero[6], tablero[7]);

        // Comprobamos si son iguales
        if (carta1 == carta2) {
            console.log("¡Has acertado un par de " + carta1 + "!");
            paresEncontrados = paresEncontrados + 1;
        } else {
            console.log("¡Has fallado!");
            tablero[pos1 - 1] = "X";
            tablero[pos2 - 1] = "X";
        }
    }
}

// Fin del juego
console.log("¡Has encontrado todos los pares en " + intentos + " intentos!");

if (intentos <= 6) {
    console.log("EXCELENTE");
} else if (intentos <= 10) {
    console.log("BIEN HECHO");
} else {
    console.log("SE PUEDE MEJORAR");
}
