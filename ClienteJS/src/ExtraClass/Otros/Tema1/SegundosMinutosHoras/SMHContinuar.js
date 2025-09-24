function calcularTiempo() {
    let horas = parseInt(prompt("Introduce las horas"));
    let minutos = parseInt(prompt("Introduce los minutos"));
    let segundos = parseInt(prompt("Introduce los segundos"));

    let totalSegundos = (horas * 3600) + (minutos * 60) + segundos;

    alert("Total de segundos: " + totalSegundos);
}

let jugarOtra = "si";

do {
    calcularTiempo();

    // Preguntar si quiere calcular otro tiempo
    jugarOtra = prompt("¿Quieres calcular otro tiempo? (si/no)");

} while (jugarOtra == "si");

alert("¡Gracias por usar el conversor!");

