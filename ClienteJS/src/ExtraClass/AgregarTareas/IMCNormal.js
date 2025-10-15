// === CALCULADORA DE IMC (versión básica con console.log) ===

console.log("=== CALCULADORA DE IMC ===");

// Pedimos los datos al usuario
let altura = prompt("Introduce tu altura en metros:");
let peso = prompt("Introduce tu peso en kilogramos:");

// Calculamos el IMC
let imc = peso / (altura * altura);
let situacion = "";

// Determinamos la situación según el IMC
if (imc < 18.5) {
    situacion = "bajo peso";
} else if (imc < 25) {
    situacion = "normopeso";
} else if (imc < 27) {
    situacion = "sobrepeso grado I";
} else if (imc < 30) {
    situacion = "sobrepeso grado II";
} else if (imc < 35) {
    situacion = "obesidad tipo I";
} else if (imc < 40) {
    situacion = "obesidad tipo II";
} else if (imc < 50) {
    situacion = "obesidad tipo III (mórbida)";
} else {
    situacion = "obesidad tipo IV (extrema)";
}

// Mostramos todo por consola
console.log("Altura: " + altura + " metros");
console.log("Peso: " + peso + " kilogramos");
console.log("IMC: " + imc);
console.log("Situación: " + situacion);
console.log("==========================");
