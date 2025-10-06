function caraOCruz() {
    let racha = 0;
    let rachaMaxima = 0;
    let opcion;

    do {
        opcion = prompt("Introduce CARA o CRUZ (escribe SALIR para terminar):");

        if (opcion === "SALIR") {
            break;
        }

        // Generar aleatorio (0 = CARA, 1 = CRUZ)
        let aleatorio = Math.floor(Math.random() * 2);
        let moneda = (aleatorio === 0) ? "CARA" : "CRUZ";

        alert("La moneda ha salido: " + moneda);

        if (opcion === moneda) {
            racha++;
            alert("¡Has acertado! Racha = " + racha + " aciertos.");
            if (racha > rachaMaxima) {
                rachaMaxima = racha;
            }
        } else {
            alert("¡Has fallado! Racha = 0");
            racha = 0;
        }

    } while (opcion !== "SALIR");

    alert("¡Hasta pronto! Tu racha máxima de aciertos ha sido = " + rachaMaxima);
}

// Ejecutar el juego
caraOCruz();
