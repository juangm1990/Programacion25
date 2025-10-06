function caraOCruz() {
    let opcion = "";
    let contador = 0;      // racha actual
    let mayorRacha = 0;    // mejor racha
    let cara = 1;
    let cruz = 0;
    let comprobar = 0;
    let ganar = false;     // control del bucle

    while (ganar == false) {
        opcion = prompt("Introduce CARA o CRUZ (SALIR para terminar)").toLowerCase();

        if (opcion == "salir") {
            ganar = true;   // se cierra el bucle
            
        } else if (opcion == "cara" || opcion == "cruz") {
            // Generar aleatorio (0 o 1)
            comprobar = Math.floor(Math.random() * 2);

            if (opcion == "cara") {
                if (cara == comprobar) {
                    contador = contador + 1;
                    console.log("Has acertado. Racha = " + contador + " aciertos");
                    if (mayorRacha < contador) {
                        mayorRacha = contador;
                    }
                } else {
                    console.log("Has fallado");
                    contador = 0;
                }
            }

            if (opcion == "cruz") {
                if (cruz == comprobar) {
                    contador = contador + 1;
                    console.log("Has acertado. Racha = " + contador + " aciertos");
                    if (mayorRacha < contador) {
                        mayorRacha = contador;
                    }
                } else {
                    console.log("Has fallado");
                    contador = 0;
                }
            }
        } else {
            console.log("Opción no válida. Escribe CARA o CRUZ.");
        }
    }

    console.log("Hasta pronto. Tu mejor racha de aciertos seguidos es: " + mayorRacha);
}

// Ejecutar el juego
caraOCruz();
