function calcularTiempo() {
    let horas = parseInt(prompt("Introduce las horas"));
    let minutos = parseInt(prompt("Introduce los minutos"));
    let segundos = parseInt(prompt("Introduce los segundos"));

    let totalSegundos = (horas * 3600) + (minutos * 60) + segundos;

    alert("Total de segundos: " + totalSegundos);
}


calcularTiempo();
