/*
// ==============================
//  PROGRAMA LISTAS DE CATEGORÍAS
// ==============================
*/

// Creamos un array vacío por cada categoría
let dwec = [];
let dwes = [];
let empleo = [];
let personal = [];

// Guardamos todas las categorías dentro de un solo array llamado "categorias"
let categorias = [dwec, dwes, empleo, personal];


function agregarTarea() {
    let agregar = true; // Controla si queremos seguir agregando tareas

    do {
        // Preguntamos en qué categoría se quiere agregar la tarea
        let opcion2 = prompt("1. DWEC \n2. DWES \n3. EMPLEO \n4. PERSONAL") - 1;

        // Pedimos al usuario que escriba la tarea
        let tarea = prompt("Ingresa la tarea que quieres realizar");

        // Añadimos la tarea a la categoría elegida
        categorias[opcion2].push(tarea);

        console.log(categorias[opcion2]); // Mostrar en terminal las actuales (solo para control)

        // Preguntamos si se quiere seguir agregando más tareas
        let pregunta = prompt("¿Quieres agregar otra tarea? \n1. SÍ \n2. NO");
        if (pregunta == "2") {
            agregar = false; // Si se elige NO, salimos del bucle
        }
    } while (agregar); // Repite mientras agregar sea true
}


function borrarTarea() {
    let borrar = true; // Controla si seguimos borrando tareas

    do {
        // Elegir la categoría donde se encuentra la tarea
        let opcion2 = prompt("Elige una categoría:\n1. DWEC \n2. DWES \n3. EMPLEO \n4. PERSONAL") - 1;

        // Comprobamos si esa categoría está vacía
        if (categorias[opcion2].length === 0) {
            alert("No hay tareas en esta categoría.");
        } else {
            // Mostramos las tareas existentes por terminal
            console.log("Tareas en la categoría seleccionada:");
            for (let i = 0; i < categorias[opcion2].length; i++) {
                console.log((i + 1) + ". " + categorias[opcion2][i]);
            }

            // Pedimos el número de la tarea que se quiere borrar
            let num = prompt("Escribe el número de la tarea que quieres borrar:") - 1;

            // Creamos una nueva lista 
            let nuevaLista = [];
            for (let i = 0; i < categorias[opcion2].length; i++) {
                if (i != num) {
                    nuevaLista.push(categorias[opcion2][i]);
                }
            }

            // Reemplazamos la categoría antigua por la nueva lista
            categorias[opcion2] = nuevaLista;

            alert("Tarea borrada correctamente.");
        }

        // Preguntamos si quiere borrar otra tarea
        let pregunta = prompt("¿Quieres borrar otra tarea? \n1. SÍ \n2. NO");
        if (pregunta == "2") {
            borrar = false; // Si se elige NO, salimos del bucle
        }

    } while (borrar); // Repite mientras borrar sea true
}

function listarTareas() {
    console.log("LISTA DE TAREAS");
    console.log(" ");

    // Creamos un texto que luego mostraremos por pantalla
    let mensaje = "LISTA DE TAREAS\n\n";

    // Recorremos todas las categorías
    for (let i = 0; i < categorias.length; i++) {
        // Mostramos el nombre de la categoría según su posición
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

        // Línea separadora
        console.log("----------------------");
        mensaje = mensaje + "----------------------\n";

        // Si la categoría no tiene tareas
        if (categorias[i].length == 0) {
            console.log("(No hay tareas)");
            mensaje = mensaje + "(No hay tareas)\n";
        } 
        // Si tiene tareas, las mostramos una por una
        else {
            for (let j = 0; j < categorias[i].length; j++) {
                console.log((j + 1) + ". " + categorias[i][j]);
                mensaje = mensaje + (j + 1) + ". " + categorias[i][j] + "\n";
            }
        }

        console.log(" ");
        // SALTO DE LÍNEA DOBLE (comentado por estética)
        //mensaje = mensaje + "\n";
    }

    // Mostrar el listado completo en pantalla (alert)
    alert(mensaje);
}



let opcion; // Menú de opciones

do {

    opcion = prompt("1. Agregar tarea. \n2. Borrar tarea. \n3. Listar tareas. \n4. SALIR");


    switch (opcion) {
        case "1":
            agregarTarea();
            break;
        case "2":
            borrarTarea();
            break;
        case "3":
            listarTareas();
            break;
        default:
            break;
    }

} while (opcion != "4"); // SALIR
