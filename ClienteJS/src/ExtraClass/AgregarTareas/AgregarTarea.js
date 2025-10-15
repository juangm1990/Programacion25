// Arrays para las categorías
let dwec = [];
let dwes = [];
let empleo = [];
let personal = [];

// Array con todas las categorías
let categorias = [dwec, dwes, empleo, personal];

// Función para agregar tarea
function agregarTarea() {
    let seguir = true;

    while (seguir == true) {
        let opcion = prompt("Elige una categoría:\n1. DWEC\n2. DWES\n3. EMPLEO\n4. PERSONAL") - 1;
        let tarea = prompt("Escribe la tarea que quieres agregar:");

        categorias[opcion].push(tarea);
        alert("Tarea agregada correctamente.");

        seguir = confirm("¿Quieres agregar otra tarea?");
    }
}

// Función para borrar tarea
function borrarTarea() {
    let seguir = true;

    while (seguir == true) {
        let opcion = prompt("Elige una categoría:\n1. DWEC\n2. DWES\n3. EMPLEO\n4. PERSONAL") - 1;

        if (categorias[opcion].length == 0) {
            alert("No hay tareas en esta categoría.");
        } else {
            console.log("TAREAS EN LA CATEGORÍA SELECCIONADA:");
            for (let i = 0; i < categorias[opcion].length; i++) {
                console.log((i + 1) + ". " + categorias[opcion][i]);
            }

            let num = prompt("Escribe el número de la tarea que quieres borrar:") - 1;

            // Crear un nuevo array sin la tarea elegida
            let nuevaLista = [];
            for (let i = 0; i < categorias[opcion].length; i++) {
                if (i != num) {
                    nuevaLista.push(categorias[opcion][i]);
                }
            }

            categorias[opcion] = nuevaLista;
            alert("Tarea borrada correctamente.");
        }

        seguir = confirm("¿Quieres borrar otra tarea?");
    }
}

// Función para listar todas las tareas
function listarTareas() {
    console.log("LISTA DE TAREAS");
    console.log("------------------");

    let mensaje = "LISTA DE TAREAS\n\n";

    for (let i = 0; i < categorias.length; i++) {
        // Mostrar nombre de categoría
        if (i == 0) {
            console.log("DWEC");
            mensaje = mensaje + "DWEC\n";
        } else if (i == 1) {
            console.log("DWES");
            mensaje = mensaje + "DWES\n";
        } else if (i == 2) {
            console.log("EMPLEO");
            mensaje = mensaje + "EMPLEO\n";
        } else if (i == 3) {
            console.log("PERSONAL");
            mensaje = mensaje + "PERSONAL\n";
        }

        console.log("----------------------");
        mensaje = mensaje + "----------------------\n";

        if (categorias[i].length == 0) {
            console.log("(No hay tareas)");
            mensaje = mensaje + "(No hay tareas)\n";
        } else {
            for (let j = 0; j < categorias[i].length; j++) {
                console.log((j + 1) + ". " + categorias[i][j]);
                mensaje = mensaje + (j + 1) + ". " + categorias[i][j] + "\n";
            }
        }

        console.log(" ");
        mensaje = mensaje + "\n";
    }

    // Mostrar listado completo en pantalla
    alert(mensaje);
}

// PROGRAMA PRINCIPAL
let opcion;

do {
    opcion = prompt(
        "MENÚ PRINCIPAL\n\n" +
        "1. Agregar tarea\n" +
        "2. Borrar tarea\n" +
        "3. Listar tareas\n" +
        "4. Salir"
    );

    if (opcion == "1") {
        agregarTarea();
    } else if (opcion == "2") {
        borrarTarea();
    } else if (opcion == "3") {
        listarTareas();
    }

} while (opcion != "4");

alert("Programa finalizado. ¡Hasta pronto!");
