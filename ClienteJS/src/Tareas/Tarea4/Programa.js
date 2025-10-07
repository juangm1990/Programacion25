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

        if (categorias[opcion2].length === 0) {
            alert("No hay tareas en esta categoría.");
        } else {
            console.log("Tareas en la categoría seleccionada:");
            for (let i = 0; i < categorias[opcion2].length; i++) {
                console.log((i + 1) + ". " + categorias[opcion2][i]);
            }

            let num = prompt("Escribe el número de la tarea que quieres borrar:") - 1;

            // Creamos una nueva lista sin esa tarea
            let nuevaLista = [];
            for (let i = 0; i < categorias[opcion2].length; i++) {
                if (i != num) {
                    nuevaLista.push(categorias[opcion2][i]);
                }
            }
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
    console.log("LISTA DE TAREAS");
    console.log(" ");

    for (let i = 0; i < categorias.length; i++) {
        if (i == 0) {
            console.log("DWEC");
        } else if (i == 1) {
            console.log("DWES");
        } else if (i == 2) {
            console.log("EMPLEO");
        } else if (i == 3) {
            console.log("PERSONAL");
        }

        console.log("----------------------");

        if (categorias[i].length == 0) {
            console.log("(No hay tareas)");
        } else {
            for (let j = 0; j < categorias[i].length; j++) {
                console.log((j + 1) + ". " + categorias[i][j]);
            }
        }

        console.log(" ");
    }

    alert("Se ha mostrado la lista de tareas en la consola.");
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
