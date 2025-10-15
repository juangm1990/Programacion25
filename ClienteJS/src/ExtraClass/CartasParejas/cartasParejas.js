// === JUEGO DE PAREJAS ===
// Todo básico y funcional

// 1. Array de imágenes (2 de cada tipo)
let imagenes = [
    "img/carta1.png", "img/carta1.png",
    "img/carta2.png", "img/carta2.png",
    "img/carta3.png", "img/carta3.png",
    "img/carta4.png", "img/carta4.png"
];

// 2. Mezcla manual (intercambio aleatorio)
for (let i = 0; i < imagenes.length; i++) {
    let posicion = Math.floor(Math.random() * imagenes.length);
    let temporal = imagenes[i];
    imagenes[i] = imagenes[posicion];
    imagenes[posicion] = temporal;
}

// 3. Variables principales
let intentos = 5;
let cartaPrimera = null;
let cartaSegunda = null;
let cartasBloqueadas = false;
let partidasGanadas = 0;

// 4. Mostrar los intentos
document.getElementById("intentos").textContent = "Intentos restantes: " + intentos;

// 5. Crear cartas y eventos
for (let i = 0; i < imagenes.length; i++) {
    let carta = document.getElementById("carta" + i);
    carta.src = "img/reverso.png";
    carta.valor = imagenes[i];
    carta.addEventListener("click", girarCarta);
}

// 6. Función para girar carta
function girarCarta() {
    if (cartasBloqueadas == true) {
        return;
    }

    if (this.src.indexOf("reverso.png") != -1) {
        this.src = this.valor;

        if (cartaPrimera == null) {
            cartaPrimera = this;
        } else {
            cartaSegunda = this;
            cartasBloqueadas = true;
            setTimeout(comprobarPareja, 1000);
        }
    }
}

// 7. Función para comprobar pareja
function comprobarPareja() {
    if (cartaPrimera.valor == cartaSegunda.valor) {
        alert("¡Pareja encontrada!");
    } else {
        cartaPrimera.src = "img/reverso.png";
        cartaSegunda.src = "img/reverso.png";
        intentos = intentos - 1;
        document.getElementById("intentos").textContent = "Intentos restantes: " + intentos;

        if (intentos == 0) {
            alert("Fin del juego. No te quedan intentos.");
            mostrarTodas();
            preguntarReinicio();
        }
    }

    cartaPrimera = null;
    cartaSegunda = null;
    cartasBloqueadas = false;

    if (intentos > 0) {
        comprobarVictoria();
    }
}

// 8. Función para comprobar si se han descubierto todas
function comprobarVictoria() {
    let descubiertas = 0;

    for (let i = 0; i < imagenes.length; i++) {
        let carta = document.getElementById("carta" + i);
        if (carta.src.indexOf("reverso.png") == -1) {
            descubiertas = descubiertas + 1;
        }
    }

    if (descubiertas == imagenes.length) {
        alert("¡Has ganado!");
        partidasGanadas = partidasGanadas + 1;
        preguntarReinicio();
    }
}

// 9. Función para mostrar todas las cartas
function mostrarTodas() {
    for (let i = 0; i < imagenes.length; i++) {
        let carta = document.getElementById("carta" + i);
        carta.src = carta.valor;
    }
}

// 10. Función para jugar otra partida
function preguntarReinicio() {
    let jugarOtra = confirm("¿Quieres jugar otra partida?");
    if (jugarOtra == true) {
        iniciarNuevaPartida();
    } else {
        alert("Has ganado un total de " + partidasGanadas + " partida(s). ¡Hasta la próxima!");
    }
}

// 11. Reiniciar partida sin recargar
function iniciarNuevaPartida() {
    intentos = 5;
    cartaPrimera = null;
    cartaSegunda = null;
    cartasBloqueadas = false;

    // Mezclar otra vez
    for (let i = 0; i < imagenes.length; i++) {
        let posicion = Math.floor(Math.random() * imagenes.length);
        let temporal = imagenes[i];
        imagenes[i] = imagenes[posicion];
        imagenes[posicion] = temporal;
    }

    // Volver a mostrar el reverso
    for (let i = 0; i < imagenes.length; i++) {
        let carta = document.getElementById("carta" + i);
        carta.src = "img/reverso.png";
        carta.valor = imagenes[i];
    }

    document.getElementById("intentos").textContent = "Intentos restantes: " + intentos;
}
