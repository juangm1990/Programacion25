function calcularNotasAlumno() {
    let nombreAlumno = prompt("Introduce el nombre del alumno:");

    let notasAlumno = [];

    // Pedimos 3 notas y las guardamos en el array
    for (let indice = 0; indice < 3; indice = indice + 1) {
        let notaIntroducida = parseFloat(prompt("Introduce la nota " + (indice + 1) + ":"));
        notasAlumno.push(notaIntroducida);
    }

    // Calculamos la suma de todas las notas
    let sumaNotas = 0;
    for (let indice = 0; indice < notasAlumno.length; indice = indice + 1) {
        sumaNotas = sumaNotas + notasAlumno[indice];
    }

    // Calculamos la media
    let mediaNotas = sumaNotas / notasAlumno.length;

    // Mostramos resultados
    alert(
        "Alumno: " + nombreAlumno +
        "Nota 1: " + notasAlumno[0] +
        "Nota 2: " + notasAlumno[1] +
        "Nota 3: " + notasAlumno[2] +
        "Nota media: " + mediaNotas
    );
}

// Repetir 
do {
    calcularNotasAlumno();
} while (confirm("¿Quieres introducir otro alumno?"));

alert("¡Programa terminado!");


/*
----------------------------------------------
TEORÍA SOBRE REDONDEOS EN JAVASCRIPT
----------------------------------------------
Math.round() → redondea al entero más cercano
Math.floor() → redondea hacia abajo (siempre al entero inferior)
Math.ceil()  → redondea hacia arriba (siempre al entero superior)
parseInt()   → elimina los decimales y deja solo la parte entera
toFixed(x)   → muestra el número con x decimales fijos
(Math.round(num * 100) / 100) → redondea manualmente a 2 decimales
console.log(num) → muestra el número completo sin tocarlo
----------------------------------------------
*/
