function calcularIMC() {
    let metros = parseFloat(prompt("Introduce la altura en metros"));
    let kg = parseFloat(prompt("Introduce el peso en kilogramos"));

    let indiceMasaCorporal = kg / (metros * metros);
    let situacion = "";

    if (indiceMasaCorporal < 18.5) {
        situacion = "bajo peso";
    } else if (indiceMasaCorporal < 25) {
        situacion = "normopeso";
    } else if (indiceMasaCorporal < 27) {
        situacion = "sobrepeso grado I";
    } else if (indiceMasaCorporal < 30) {
        situacion = "sobrepeso grado II";
    } else if (indiceMasaCorporal < 35) {
        situacion = "obesidad de tipo I";
    } else if (indiceMasaCorporal < 40) {
        situacion = "obesidad de tipo II";
    } else if (indiceMasaCorporal < 50) {
        situacion = "obesidad de tipo III (mórbida)";
    } else {
        situacion = "obesidad de tipo IV (extrema)";
    }

    alert("Tu IMC es " + indiceMasaCorporal.toFixed(2) + " y estás en " + situacion);
}

let continuar = "si";

do {
    calcularIMC();
    continuar = prompt("¿Quieres calcular otro IMC? (si/no)");
} while (continuar == "si");

alert("¡Gracias por usar el programa!");
