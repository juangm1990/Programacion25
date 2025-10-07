let dwec = [];
let dwes = [];
let empleo = [];
let personal = [];

let categorias = [dwec, dwes, empleo, personal];

function agregarTarea() {
    let agregar = true;

    do {
        let opcion2 = prompt("1. DWEC \n2. DWES \n3. EMPLEO \n4. PERSONAL") - 1;
        let tarea = prompt("Ingresa la tarea que quieres realizar");
        categorias[opcion2].push(tarea);

        console.log(categorias[opcion2]); // que no se te olvide borrar macaco

        let pregunta = prompt("¿Quieres agregar otra tarea? \n1. SÍ \n2. NO");
        if (pregunta == "2") {
            agregar = false;
        }
    } while (agregar);
}

function borrarTarea() {
    let borrar = true;

    do {
        let opcion2 = prompt("Elige una categoría:\n1. DWEC \n2. DWES \n3. EMPLEO \n4. PERSONAL") - 1;

        if (categorias[opcion2].length == 0) {
            alert("No hay tareas en esta categoría.");
        } else {
            console.log("Tareas en la categoría seleccionada:");
            categorias[opcion2].forEach(function(tarea, indice) {
                console.log((indice + 1) + ". " + tarea);
            });

            let num = prompt("Escribe el número de la tarea que quieres borrar:") - 1;

            // Crear nueva lista sin esa tarea
            let nuevaLista = [];
            categorias[opcion2].forEach(function(tarea, indice) {
                if (indice != num) {
                    nuevaLista.push(tarea);
                }
            });
            categorias[opcion2] = nuevaLista;

            alert("Tarea borrada correctamente.");
        }

        let pregunta = prompt("¿Quieres borrar otra tarea? \n1. SÍ \n2. NO");
        if (pregunta == "2") {
            borrar = false;
        }

    } while (borrar);
}

function listarTareas() {
    let mensaje = "LISTA DE TAREAS\n\n";
    let nombres = ["DWEC", "DWES", "EMPLEO", "PERSONAL"];

    categorias.forEach(function(categoria, indice) {
        mensaje = mensaje + nombres[indice] + "\n";
        mensaje = mensaje + "----------------------\n";

        if (categoria.length == 0) {
            mensaje = mensaje + "(No hay tareas)\n";
        } else {
            categoria.forEach(function(tarea, num) {
                mensaje = mensaje + (num + 1) + ". " + tarea + "\n";
            });
        }

        mensaje = mensaje + "\n";
    });

    alert(mensaje); // MOSTRAR POR PANTALLA 
    console.log(mensaje); // MOSTRAR POR CONSOLA
}

let opcion;

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
} while (opcion != "4");
