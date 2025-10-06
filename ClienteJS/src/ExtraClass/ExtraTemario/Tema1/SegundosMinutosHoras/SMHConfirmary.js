function calcularTiempo() {
    let horas = parseInt(prompt("Introduce las horas"));
    let minutos = parseInt(prompt("Introduce los minutos"));
    let segundos = parseInt(prompt("Introduce los segundos"));

    function CalSegHoras(h) {
        return h * 3600;
    }

    function CalSegMin(m) {
        return m * 60;
    }

    let totalSegundos = CalSegHoras(horas) + CalSegMin(minutos) + segundos;

    alert("Total de segundos: " + totalSegundos);
}

// Ejecutar varias veces con confirm()
do {
    calcularTiempo();
} while (confirm("¿Quieres calcular otro tiempo?"));

alert("¡Gracias!");
