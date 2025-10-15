// Lista inicial de palabras
let palabras = ["mesa", "movil", "caja", "portatil", "altavoz", "mostaza"];

// Referencias a los elementos del HTML
let buscador = document.getElementById("buscador");
let resultados = document.getElementById("resultados");

// Mostrar todas las palabras al inicio
mostrarPalabras(palabras);

// Evento: cada vez que el usuario escribe algo
buscador.addEventListener("input", function() {
    let texto = buscador.value.toLowerCase(); // texto que se está escribiendo
    let filtradas = [];

    // Recorrer la lista y quedarse solo con las que contienen el texto escrito
    for (let i = 0; i < palabras.length; i++) {
        if (palabras[i].toLowerCase().includes(texto)) {
            filtradas.push(palabras[i]);
        }
    }

    // Mostrar las palabras filtradas
    mostrarPalabras(filtradas);
});

// Función para mostrar la lista de palabras
function mostrarPalabras(lista) {
    resultados.innerHTML = ""; // limpiar la lista

    // Si no hay resultados
    if (lista.length == 0) {
        let li = document.createElement("li");
        li.textContent = "No hay coincidencias";
        resultados.appendChild(li);
    }

    // Si hay palabras, mostrarlas
    for (let i = 0; i < lista.length; i++) {
        let li = document.createElement("li");
        li.textContent = lista[i];
        resultados.appendChild(li);
    }
}
