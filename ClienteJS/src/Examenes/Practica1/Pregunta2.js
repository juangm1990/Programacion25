// Juego de emparejar pares de cartas

// Declaramos un array con las cartas (dos de cada tipo)
let cartas = ["O", "O", "B", "B", "C", "C", "E", "E"];

let intentos = 0;
let paresEncontrados = 0;

// Bucle principal del juego
while (paresEncontrados < 4) {
    console.log("Intento número: " + (intentos + 1));

    // Pedimos al usuario dos posiciones
    let posicionPrimeraCarta = prompt("Introduce la primera carta (1 al 8):");
    let posicionSegundaCarta = prompt("Introduce la segunda carta (1 al 8):");

    // Convertimos a número
    posicionPrimeraCarta = Number(posicionPrimeraCarta);
    posicionSegundaCarta = Number(posicionSegundaCarta);

    // Comprobamos si las posiciones son válidas
    if (
        posicionPrimeraCarta < 1 || posicionPrimeraCarta > 8 ||
        posicionSegundaCarta < 1 || posicionSegundaCarta > 8 ||
        posicionPrimeraCarta == posicionSegundaCarta
    ) {
        console.log("Posiciones no válidas. Intenta otra vez.");
    } else {
        // Restamos 1 porque los arrays empiezan en 0
        let cartaPrimera = cartas[posicionPrimeraCarta - 1];
        let cartaSegunda = cartas[posicionSegundaCarta - 1];

        // Mostramos las cartas elegidas
        console.log("Has elegido: " + cartaPrimera + " y " + cartaSegunda);

        // Comparamos si son iguales
        if (cartaPrimera == cartaSegunda) {
            console.log("¡Has encontrado un par de " + cartaPrimera + "!");
            paresEncontrados = paresEncontrados + 1;
        } else {
            console.log("No coinciden. Vuelve a intentarlo.");
        }

        // Sumamos un intento
        intentos = intentos + 1;
    }
}

// Mensaje final
console.log("Has encontrado todos los pares en " + intentos + " intentos.");
